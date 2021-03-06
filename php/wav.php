<?php class WavFile{
		private static $HEADER_LENGTH = 44;

		public static function ReadFile($filename) {
            $filesize = filesize($filename);
            if ($filesize<self::$HEADER_LENGTH)
                return false;           
            $handle = fopen($filename, 'rb');
            $wav = array(
                'header'    => array(
                    'chunkid'       => self::readString($handle, 4), // "RIFF"
                    'chunksize'     => self::readLong($handle),
                    'format'        => self::readString($handle, 4) // "WAVE"
                    ),
                'subchunk1' => array(
                    'id'            => self::readString($handle, 4), //"fmt "
                    'size'          => self::readLong($handle),
                    'audioformat'   => self::readWord($handle),
                    'numchannels'   => self::readWord($handle), // 1/2
                    'samplerate'    => self::readLong($handle),
                    'byterate'      => self::readLong($handle),
                    'blockalign'    => self::readWord($handle),
                    'bitspersample' => self::readWord($handle) // 1/2/4...
                    ),
                'subchunk2' => array( 
                    'id'            => self::readString($handle, 4), //"data"
                    'size'			=> self::readLong($handle),
                    'data'          => null //data sound
                    ),
                'subchunk3' => array(
                	'id'			=> null,
                	'size'			=> null,
                    'data'          => null
                    )
                );
            $wav['subchunk2']['data'] = fread($handle, $wav['subchunk2']['size']); // fread(file,lenght) => byte
            $wav['subchunk3']['id'] = self::readString($handle, 4); 
            $wav['subchunk3']['size'] = self::readLong($handle);
			$wav['subchunk3']['data'] = fread($handle, $wav['subchunk3']['size']);
            fclose($handle);
            return $wav;
	    }
	    public static function WriteFile($wav, $filename) {
            $handle = fopen($filename, 'wb');
            self::writeString($handle, $wav['header']['chunkid']);
            self::writeLong($handle, $wav['header']['chunksize']);
            self::writeString($handle, $wav['header']['format']);
            self::writeString($handle, $wav['subchunk1']['id']);
            self::writeLong($handle, $wav['subchunk1']['size']);
            self::writeWord($handle, $wav['subchunk1']['audioformat']);
            self::writeWord($handle, $wav['subchunk1']['numchannels']);
            self::writeLong($handle, $wav['subchunk1']['samplerate']);
            self::writeLong($handle, $wav['subchunk1']['byterate']);
            self::writeWord($handle, $wav['subchunk1']['blockalign']);
            self::writeWord($handle, $wav['subchunk1']['bitspersample']);
            self::writeString($handle, $wav['subchunk2']['id']);
            self::writeLong($handle, $wav['subchunk2']['size']);
            fwrite($handle, $wav['subchunk2']['data']);
            self::writeString($handle, $wav['subchunk3']['id']);
            self::writeLong($handle, $wav['subchunk3']['size']);
            fwrite($handle, $wav['subchunk3']['data']);
            fclose($handle);
	    }
	    
	    private static function readString($handle, $length) {
	        return self::readUnpacked($handle, 'a*', $length);
	    }

	    private static function readLong($handle) {
	        return self::readUnpacked($handle, 'V', 4);
	    }

	    private static function readWord($handle) {
	        return self::readUnpacked($handle, 'v', 2);
	    }

	    private static function readUnpacked($handle, $type, $length) {
	        $r = unpack($type, fread($handle, $length));
	        return array_pop($r);
	    }

	    private static function writeString($handle, $string) {
	        self::writePacked($handle, 'a*', $string);
	    }

	    private static function writeLong($handle, $string) {
	        self::writePacked($handle, 'V', $string);
	    }

	    private static function writeWord($handle, $string) {
	        self::writePacked($handle, 'v', $string);
	    }

	    private static function writePacked($handle, $type, $string) {
	        fwrite($handle, pack($type, $string));
	    }
	}
?>
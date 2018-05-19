<?php
		ini_set('max_execution_time', 600);
		ini_set('memory_limit', '-1');
		error_reporting(0);
		session_start();
		include "config.php";

		include "wav.php";

		if(isset($_POST['upfilebtn'])){
			$fileName = $_FILES["upfile"]["tmp_name"];
			$fileType = strtolower($_FILES['upfile']['type']);
			if ($fileType == "audio/wav"){
				$wavFile = new WavFile;
				$tmp = $wavFile->ReadFile($fileName);
				unlink($fileName);
				function BintoText($bin){
					$text = "";
					for($i = 0; $i < strlen($bin)/8 ; $i++)
						$text .= chr(bindec(substr($bin, $i*8, 8)));
					return $text;
				}
				$subchunk3data = unpack("H*", $tmp['subchunk3']['data']);

				$signature = "";
				for($i = 0; $i < 80; $i++){
					$signature .= substr(str_pad(base_convert(substr($subchunk3data[1], $i*2, 2), 16, 2), 8, '0', STR_PAD_LEFT), 7, 1);
				}
				$lenofsigndat = BintoText(substr($signature, 0, 80));
				if (is_numeric($lenofsigndat)){
					for($i = 80; $i < 80+$lenofsigndat*8; $i++){
						$signature .= substr(str_pad(base_convert(substr($subchunk3data[1], $i*2, 2), 16, 2), 8, '0', STR_PAD_LEFT), 7, 1);
					}
					$signdat = BintoText(substr($signature, 80, $lenofsigndat*8));
				}
			}
		}

		

		if (isset($_SESSION['user'])){
			
			if (($_SESSION['user']) == "admin"){

				if(isset($_POST['upfilebtn1']) ){
					$fileName = $_FILES["upfile1"]["tmp_name"];
					$fileType = strtolower($_FILES['upfile1']['type']);

					if ($fileType == "audio/wav"){

						//LOAD TO DRIVE
						require_once 'google-api-php-client-2.2.1/vendor/autoload.php';
						$client = new Google_Client();
						putenv('GOOGLE_APPLICATION_CREDENTIALS=google-api-php-client-2.2.1/service_account_keys.json');
						$client = new Google_Client();
						$client->addScope(Google_Service_Drive::DRIVE);
						$client->useApplicationDefaultCredentials();
						$service = new Google_Service_Drive($client);

						$content = file_get_contents($fileName);
						$fileMetadata = new Google_Service_Drive_DriveFile(array('name' => mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $_POST['upfilesinger'] . " - " . $_POST['upfilesong'] . ".wav")));
						$file = $service->files->create($fileMetadata, array(
						    'data' => $content,
						    'mimeType' => 'audio/wav',
						    'uploadType' => 'multipart',
						    'fields' => 'id'));
						$fileId = $file->id;
						unlink($fileName);


						$service->getClient()->setUseBatch(true);
						$batch = $service->createBatch();
						$filePermission = new Google_Service_Drive_Permission(array(
					    	'type' => 'anyone',
					    	'role' => 'reader',
						));
					    $request = $service->permissions->create($fileId, $filePermission, array('fields' => 'id'));
					    $batch->add($request, 'anyone');
					    $results = $batch->execute();
						$service->getClient()->setUseBatch(false);
						$fileUrl = "https://drive.google.com/file/d/" . $fileId . "/view?usp=sharing";
						//Add DB

						$qsl="insert into music (parentid, id, name, singer, url, owner) values ('$fileId','$fileId', '".$_POST['upfilesong']."', '".$_POST['upfilesinger']."','$fileUrl', 'admin');";
						//echo $qsl;
						$result1 = mysqli_query($con,"insert into music (parentid, id, name, singer, url, owner) values ('$fileId','$fileId', '".$_POST['upfilesong']."', '".$_POST['upfilesinger']."','$fileUrl', 'admin');");						
						echo "<script>
		alert('UPLOAD SUCCESS!');
		</script>";
					}
				}
			}
		}

	?>
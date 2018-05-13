<?php include('process2.php');?>
<form style="margin-left:10px; margin-right:10px;" action="" method="post" enctype="multipart/form-data">
				<input style="padding-left:10px; display:block" id="upfile-song" name="upfilesong" type="text" placeholder="Song" /> 
				<input style="padding-left:10px; display:block" id="upfile-song" name="upfilesinger" type="text" placeholder="Singer" /> <br>
                <input id="upfile-input-file-1" name="upfile1" type="file" accept='audio/wav' style="display: none;"/>
                <label for="upfile-input-file-1" class="btn btn-primary"><i class="fa fa-search"></i> Choose file from computer</label>
                <label id="upfile-file-name-1" style="display: none;"></label>
                <button class="btn btn-primary" name="upfilebtn1"><i class="fa fa-upload"></i> UPLOAD</button>
			</form>
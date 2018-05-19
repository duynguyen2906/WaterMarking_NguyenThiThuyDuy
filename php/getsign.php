<?php include_once('process.php');?>

<form style="margin-left:10px; margin-right:10px;" action="" method="post" enctype="multipart/form-data" >
                <input id="upfile-input-file" name="upfile" type="file" accept='audio/wav' style="display: none;"/>
                <label for="upfile-input-file" class="btn btn-primary"><i class="fa fa-search"></i> Choose file from computer</label>
                <label id="upfile-file-name" style="display: none;"></label>
                <button class="btn btn-primary" name="upfilebtn"><i class="fa fa-upload"></i> UPLOAD</button>
                <?php 
                	if(isset($_POST['upfilebtn'])){
                		echo "<div class=\"reponse-" . ($signdat!="" ? "success" : "failure") . "\">" . ($signdat!="" ? $signdat : "Sorry!No found!!") . "</div>";
        			}
        		?>
</form>


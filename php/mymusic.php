<?php
session_start();
ini_set('display_errors',0);
include('config.php');
$result = mysqli_query($con, "select * from music where owner = '".$_SESSION['user']."' order by name asc");
$n = mysqli_num_rows($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<div class="w3-container">
  <?php if ($n > 0){?>
	<table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Name Song</th>
        <th>Singer</th>
        <th>Download</th>
      </tr>
    </thead>
    <?php
	while($row = mysqli_fetch_array($result)){?>
    <tr class="w3-hover-green">
    	<td><?php echo $row["name"]?></td>
		<td><?php echo $row["singer"]?></td>
		<td><a href="<?php echo $row['url']?>" ><i class="fa fa-download"></i></a></td>
      <!--  <audio controls="controls">
    <source src="https://docs.google.com/uc?export=download&id=<?php echo $row['url']?>">
</audio> -->
<?php }?>
    </tr>
    
  
  </table>
  <?php }
  	else
	{echo '<h1 style="text-align:center; ">Please buy any  <a href="index.php">SONG</a></h1>';}
  ?>
</div>           

</body>
</html>
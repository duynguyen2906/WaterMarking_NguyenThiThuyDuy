
<?php
session_start();
ini_set('display_errors',0);
include('config.php');

$result = mysqli_query($con, "select * from music where owner = 'admin' order by name asc");
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


<div class="wrap-nav zerogrid">
		<div class="menu">
			<ul>
				<li style="font-weight:bold; color:#F0C"><a href="index.php?act=getsign">GET SIGNATURE</a></li>
				<?php if ($_SESSION['user']=='admin') echo '<li style="font-weight:bold; color:#F0C"><a href="index.php?act=up">UPLOAD A SONG</a></li>'?>
			</ul>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.php?act=getsign">GET SIGNATURE</option>
				<?php if ($_SESSION['user']=='admin') echo '<option value="index.php?act=up">UPLOAD A SONG</option>' ?>
			</select>
		</div>		
	</div>

<div class="w3-container">
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Song</th>
        <th>Singer</th>
        <th>Status</th>
      </tr>
    </thead>
    <?php
	while($row = mysqli_fetch_array($result)){?>
    <tr class="w3-hover-green">
    	<td><?php echo $row['name']?></td>
		<td><?php echo $row['singer']?></td>
		<td><?php if ($_SESSION['user'] == "") 
				  	echo '<a href="index.php?act=dn">LOGIN</a>';
					else{
					$result2 = mysqli_query($con, "select * from music where owner = '" . $_SESSION['user'] .  "' and parentid = '" . $row['id'] . "' limit 1;");
					$row2 = mysqli_fetch_array($result2);
					if ($row2['owner']==$_SESSION['user'])
						{echo 'Owned';}
						else{
							echo "<button id=\"" . $row['id'] . "\" class=\"btn btn-danger btn-mini btnbuysong\"><i class=\"fa fa-shopping-cart\"></i></button>";}
							}

					?></td>
<?php }?>
    </tr>
    
  
  </table>
</div>           
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="wow.min.js"></script>
	<script type="text/javascript">
	    new WOW().init();

    	$(".btnbuysong").click(function(){
	    	$("*").css("cursor", "wait");
	    	var buysongid = $(this).attr("id");
	    	$.ajax({
				url: "php/buysong.php",
				type: "get",
				data: { buysongid : buysongid },
				success : function(response){
					$("*").css("cursor", "default");
					if (response == "buy success"){
					  alert("BUY SUCCESS");
					  window.location="";
					}
					else if (response == "buy failure"){
					  alert("OOPS!");
					  window.location="";
					}
				}
			});
    	});

    	
    </script>
</body>
</html>
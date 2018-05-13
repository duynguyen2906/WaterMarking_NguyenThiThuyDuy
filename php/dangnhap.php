<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>

</head>
<body>
<?php
ini_set('display_errors',0);


include('config.php');
if(isset($_POST['user'])&&isset($_POST['pass']))
{
	$user = $_POST['user'];
	$pass = ($_POST['pass']);
	$sql = "select * from user where username='$user' and password='$pass'";
	//echo $user;
	//echo $pass;
	//echo $sql;
	$result = mysqli_query($con, "select * from user where username='$user' and password='$pass'");
	$n = mysqli_num_rows($result);
	if($n == 0)
	{
		?>
        <script>
		alert('Đăng nhập không thành công!');
		</script>
        <?php		
	}
	else
	{
		//khi dùng $_SESSION ta phải khai báo session_start() ở đầu trang web
		$_SESSION['user']=$user;
		?>
        <script>
		alert('Đăng nhập thành công!');
		location.href='index.php';
		</script>
        <?php
	}		
}


?>
<div class="container">
    <div class="omb_login">
        <div class="row omb_row-sm-offset-3">
       
			<div class="col-md-6" >
		<form id="form1" name="form1" method="post" action="">
  			<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" >
       
    			<tr> <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input name="user" type="text" class="form-control" id="user" value="<?php  echo $_POST['user'];  ?>"  placeholder="username">
					</div>
    			</tr>  
    
    			<tr>
    				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i> </span>
						<input name="pass" type="password" class="form-control" id="pass" value="<?php  echo $_POST['pass'];  ?>" placeholder="Password"> <br/>
					</div>
                    <hr />
                    					
    			</tr>
                
    			<tr>
      				<input name="dangnhap" type="submit" class="btn btn-lg btn-primary btn-block" id="dangnhap" value="LOGIN" />
    			</tr>
                <tr height="20px">
                </tr>
  			</table>
		</form>
	</div>
</div>		
</div>
</div>
</body>
</html>
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/responsiveslides.css" 
    <link href="css/style1.css" rel="stylesheet">
	<link href="css/style2.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>

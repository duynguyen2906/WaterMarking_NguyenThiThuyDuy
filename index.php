<?php
session_start();
?>
<!DOCTYPE html>

<head>
<!-- NGUYEN THI THUY DUY - N14DCAT108 - D14CQAT01 -->
<meta charset="utf-8">
<title>NEW MUSIC</title>
<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
<meta name="author" content="www.zerotheme.com">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    

</head>
<body>
<?php
	include ('config.php');
	ini_set('max_execution_time', 180);
		ini_set('memory_limit', '-1');
	ini_set('display_errors',0);
	$act = $_GET['act'];
?>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="#"><img src="./images/logo.png"/></a>			</div>
		
        	<div class="col-sm-5">
							<ul style="padding-top:10px;" class="list-inline pull-right">
								<?php if ($_SESSION['user']=='') { ?>
                                	<li style="color:#0F0;font-weight:bold"><a href="index.php?act=dn" ><i class="fa fa-user"></i> Login</a></li>
								<li style="color:#0F0;font-weight:bold"><a class="register" href="index.php?act=dk" ><i class="fa fa-sign-in"></i> Register</a></li>
                                <?php } else { ?>
                                	<li style="color:#F00;font-weight:bold"><a href= "#"><i class="fa fa-user"></i> Hi <?php echo $_SESSION['user']?></a></li>		
                                    <li style="color:#0F0;font-weight:bold"><i class="fa fa-sign-out"></i><a href='index.php?act=dx'>Logout</a></li>
                                    <!-- lenh cho admin -->
                                <?php }?>
							</ul>	
			</div>	
		</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<ul>
				<li style="font-weight:bold" class="current"><a href="index.php">Home</a></li>
				<!--<li><a href="index.php?act=gallerry">Gallery</a></li>-->
				<li style="font-weight:bold"><a href="index.php?act=mymusic">Gallery</a></li>
				<!--<li><a href="index.php?act=contact">About</a></li>-->
			</ul>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.php">Home</option>
				<!--<option value="index.php?act=gallerry">Gallery</option> -->
				<option value="index.php?act=mymusic">Gallery</option>
				<!--<option value="index.php?act=contact">About</option>-->
			</select>
		</div>		
	</div>
</nav>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<li><img src="images/slide1.png"/></li>
					<li><img src="images/slide3.png"/></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div id="sankhau">
   			 <?php   include('php/sankhau.php');     ?>
    		</div>
		
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">	
		<div class="row copyright">
			<p>Copyright © 2018 - Designed by <a href="https://www.facebook.com/DUY.NTT208">DUYNTT</a></p>
		</div>
	</div>
</footer>

</body></html>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="wow.min.js"></script>
<script type="text/javascript">
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
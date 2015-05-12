<?php

include_once('function.php');

if (isset($_POST['username'])) {
	echo register($_POST['username'],$_POST['password']);
	exit;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>register</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<link href="css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="css/sidebar-left.css" rel="stylesheet" type="text/css">
<style type="text/css">
.content {
	margin-left: 70px;
	margin-right: 70px;
}

.container {
	margin-bottom: 30px;
}

#register input {
	width:90%;
	height:30px;
	border-radius: 5px;
	border: 0;
}

#register input[type=submit] {
	background: #289ED7;
	border: 0;
	height: 38px;
	line-height: 38px;
	font-size: 16px;
	color: #FFF;
	cursor:pointer;
}

#register .item {
	padding:10px 0px;
}

#register {
	text-align:center;
	margin:50px 0px 100px 0px;
}
</style>
<body>

<div id="wrapper">
<header id="header">
	<div id="logo"><img src="images/logo.png" /></div>
	
	<div id="menu_sidebar" style="display:none">
		<a href="#" class="deploy-left-sidebar"></a>
	</div>
	
	<div id="menu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="sections.html">Sections</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="subscribe.html">Subscribe</a></li>
			<li><a href="account.html">Account</a></li>
		</ul>
	</div>
	<div id="user">
		<div id="info"><a href="login.php" id="login">Login</a><a href="register.php">Regiter</a></div>
		<div id="search"><input type="text" value="" placeholder="search" /></div>
	</div>
</header>


<section id="register">
	<div class="item"><input type="text" value="" name="username" id="username" placeholder="username" autocomplete="off"></div>
	<div class="item"><input type="password" value="" name="password" id="password" placeholder="password" autocomplete="off"></div>
	<div class="item"><input type="password" value="" name="password2" id="password2" placeholder="password again" autocomplete="off"></div>
	<div class="item"><input type="email" value="" name="email" id="email" placeholder="email" autocomplete="off"></div>
	<div class="item"><input type="submit" value="register" name="submit" id="submit"></div>
</section>


<footer id="bottom">
	<h2>Things not to miss in Manhattan</h2>
	
	<div id="banner">
		<div class="content">
			<div class="container">
				<a href="#" class="next-staff"></a>
				<a href="#" class="prev-staff"></a>
				<div class="staff-slider" data-snap-ignore="true">
					<div>
						<div class="staff-item">
							<strong>Fifth Avenue divides Manhattan into the east and west sides. Building numbers increase as you go farther east or west.</strong>
						</div>
					</div>
					<div>
						<div class="staff-item">
							<strong>When getting directions, always ask for the cross streets (for example, 810 Seventh Ave., the location of the Official</strong>
						</div>
					</div>
					<div>
						<div class="staff-item">
							<strong>In Manhattan, if you walk 20 blocks north or south, you've walked one mile. Locals call the north-south blocks “short</strong>
						</div>
					</div>
					<div>
						<div class="staff-item">
							<strong>An MTA MetroCard can be used for both subways and buses, and transfers between the two modes of transport—which run 2</strong>
						</div>
					</div>
					<div>
						<div class="staff-item">
							<strong>If the number on a taxicab’s top light is lit, it indicates that the cab is available. (On the other hand, a non-litn</strong>
						</div>
					</div>
					
					<div>
						<div class="staff-item">
							<strong>If the number on a taxicab’s top light is lit, it indicates that the cab is available. (On the other hand, a non-litn</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="img">
		<img src="images/bottom.png" alt="">
	</div>

	<div class="nav">
		<a>About us</a>
		<a>FAQ</a>
		<a>Customer care</a>
		<a>Contact us</a>
	</div>
</footer>

<div class="sidebar-left">
	<div class="sidebar-scroll-left">

		<div class="sidebar-header-left">
			<img src="images/logo-sidebar.png" class="sidebar-left-logo replace-2x" width="125" alt="img">
			<a href="#" class="close-sidebar-left"></a>
		</div>

		<a href="index.html" class="nav-item">Home<em class="icon-active"></em></a>
		<a href="sections.html" class="nav-item">Sections<em class="icon-active"></em></a>
		<a href="gallery.html" class="nav-item">Gallery<em class="icon-active"></em></a>
		<a href="subscribe.html" class="nav-item">Subscribe<em class="icon-active"></em></a>
		<a href="account.html" class="nav-item">Account<em class="icon-active"></em></a>
	</div>
</div>
</div>


<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/framework.plugins.js"></script>
<script src="js/custom.js"></script>
<script src="js/sidebar-left.js"></script>
<script src="js/resize.js"></script>
<script type="text/javascript">

jQuery(function(){
	jQuery('.prev-staff,.next-staff').css({
		'margin-top':(parseInt(jQuery('.staff-slider').height())/2-20)+'px'
	});
	
	jQuery('#submit').click(function(){
		var username = jQuery.trim(jQuery('#username').val());
		var password = jQuery.trim(jQuery('#password').val());
		var password2 = jQuery.trim(jQuery('#password2').val());
		var email = jQuery.trim(jQuery('#email').val());
		
		if (!/@/.test(email)) {
			alert('email format is wrong');
			return false;
		}
		
		if (!username || !password) {
			alert('username and password can not be empty');
			return false;
		}
		
		if (password != password2) {
			alert('twice password is not the same');
			return false;
		}
		
		jQuery.ajax({
			type: "POST",
			url: "register.php",
			data: {username:username,password:password},
			success: function(data){
				if (data == 'duplicate') {
					alert('this username is duplicate');
				} else {
					alert('register successfully!');
					location.href = 'index.html';
				}
			}
		})
	});
});


</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Hng Internship 4</title>
	<style>
	*{
	margin: 0;
    padding: 0;
	}

	ul {
    list-style-type: none;
    margin: 5px;
    padding: 5px;
}
	li{
		display: inline;
	}
	#nav{
		float: right;
		/*
		padding-right: 20px;
		padding-bottom: 60px;
		*/
	}

	.header{
	background-color: #CACACA;
	width: 100%;
	height: 120px;
	position: relative;
	}	
		.header-text{
	color: #2F80ED;
	font-weight: bold;
	font-size: 50px;
	margin-left: 20px;
	padding-top: 20px;
	
}

.home{
	text-decoration: none;
	font-style: Helvetica sans-serif bold;
	font-weight: bold;
	color: #2F80ED;
	margin-left: 30px;
	text-decoration: underline;
	text-decoration-color: black;

}
.about-us{
	text-decoration: none;
	font-style: Helvetica sans-serif bold;
	font-weight: bold;
	color: #2F80ED;
	margin-left: 30px;

}
.contact{
	text-decoration: none;
	font-weight: bold;
	color: #2F80ED;
	margin-left: 30px;
	

}
.our-work{
	text-decoration: none;
	font-weight: bold;
	color: #2F80ED;
	margin-left: 30px;

}
.login{
	text-decoration: none;
	font-weight: bold;
	color: #2F80ED;
	margin-left: 30px;
	margin-right: 10px;
}
.main-body{
	background-image: url(img/blue.jpg);
	width: 100%;
	height: 600px;
	background-size: cover;

}
.body-text{
	font-weight: bolder;
	font-size: 50px;
	color: #ffffff;
	padding-top: 50px;
}
.footer{
	background-color: #CACACA;
	width: 100%;
	height: 80px;
	
}
#foot{
	clear: both;
	/*margin: 0 aut0 2px aut0;*/
	font-weight: bolder;
	font-size: 20px;
	padding: 20px 5px 0px 40px;
	position: relative;
}
.time{
	color: red;
	padding-bottom: 200px;
	font-size: 50px;
	font-weight: bolder;
	margin-top: 100px;

}
img{
	width: 20px;
	height: 20px;
	padding: 0 10px 0px 5px;
	position: relative;

}


	</style>
</head>
<body>
	<div class="header">
		<div class="header-text">
			<p>hng Internship4</p>
		</div>
		<div id="nav">
			<ul>
				<li><a class="home" href='#' title='Home'>Home</a></li>
				<li><a class="about-us" href='#' title='About Us'>About Us</a></li>
				<li><a class="contact" href='#' title='Contact'>Contact</a></li>
				<li><a class="our-work" href='#' title='Our work'>Our work</a></li>
				<li><a class="login" href='#' title='Login'>Login/Logout</a></li>
			</ul>
		</div>
	</div>

	<div class="main-body">
		<div class="body-text">
			<p>
			<center>Do You Want to learn Coding .....?<br><br>Join Hng Remote Internship 4.<br><br>Start Date: Tuesday <time
  datetime="01-05-2018">01 May 2018</time><br></center>
		</p>

		</div>
		<div class="time">
		<center>
			<p><em>Time Is Money: <?php echo date('D-M-Y H:i:s') ?>;</p>
		</center>
	</div>
	</div>
	
	<div class="footer">
		<div id="foot">
			<p>&copy hng Internship 2018</p>
		</div>
		<div class="foot-img">
			<p><center><span><img src="img/facebook.jpg"><img src="img/twitter.jpg"><img src="img/gmaillogo.png"></span></center></p>
		</div>
		
	</div>

</body>
</html>
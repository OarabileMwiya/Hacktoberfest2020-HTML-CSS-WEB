<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		
	<head>
			<meta charset="UTF-8" />
			<title>Tertiary Journey</title>
		<link rel = "stylesheet" type = "text/css" href = "css/home.css">
		<script src="src/model/course.js"></script>
		
	</head>
	<body>
		<nav>
		<div class="navbar">
			<a href="#"><img src = "img/th.jpg" alt = "log" length = "50px" width="50px" style="position: absolute;top:10%;"></a>
			<h1>UNDERGRAD HELPER</h1>
			<hr>
			<a href="home.php">Home</a>
			<a href="findCareerPath.php">Career Path</a>
			<a href="aboutus.html" >About Us</a>
			<div class="dropdown">
				<button class="dropbtn" onclick="myFunction()">Institutions Location
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content" id="myDropdown">
				  <a href="https://www.google.com/maps/search/ub/@-24.6578699,25.9335494,17z/data=!3m1!4b1" target="_blank">University Of Botswana</a>
				  <a href="https://www.google.com/maps/search/biust/@-23.586844,26.0252093,9z/data=!3m1!4b1" target="_blank">Biust</a>
				  <a href="https://www.google.com/maps/place/Botswana+Accountancy+College/@-24.6809422,25.9248154,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb5be8edcea723:0x5ca701921e24760e!8m2!3d-24.6809422!4d25.9270041">Bac</a>
				  <a href = "https://www.google.com/maps/place/Botswana+University+of+Agriculture+and+Natural+Resources/" target="_blank">Buan </a>
				  <a href = "https://www.google.com/maps/search/Botho+University/@-24.6845584,25.8797398,15.5z" target="_blank">Botho University</a>
				  <a href = "https://www.google.com/maps/place/Institute+of+Development+Management,+Gaborone/@-24.6716157,25.9260432,17z/data=!4m12!1m6!3m5!1s0x1ebb5beb2bc6c7a9:0xcb34310eaa1e673d!2sInstitute+of+Development+Management,+Gaborone!8m2!3d-24.6719764!4d25.9263543!3m4!1s0x1ebb5beb2bc6c7a9:0xcb34310eaa1e673d!8m2!3d-24.6719764!4d25.9263543" target="_blank">Idm </a>
				  <a href = "https://www.google.com/maps/place/Limkokwing+University+of+Creative+Technology,+Gaborone/@-24.6228949,25.8903767,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb5ada10132401:0x2a117dc886518ea0!8m2!3d-24.6231738!4d25.8924694" target="_blank">Limkokwing</a>
				  <a href = "https://www.google.com/maps/place/New+Era+College/@-24.605659,25.9188894,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb44cac62c8eb1:0x3e9fc3ef6e5569af!8m2!3d-24.605659!4d25.9210781" target="_blank">New Era</a>
				  <a href = "https://www.google.com/maps/place/Limkokwing+University+of+Creative+Technology,+Gaborone/@-24.6228949,25.8903767,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb5ada10132401:0x2a117dc886518ea0!8m2!3d-24.6231738!4d25.8924694" target="_blank">Limkokwing</a>

				</div>
			</div> 
			<div class="search">
				<form id="find" name="find" action="find.php"  target="find.php" method="POST">
				<label for="sbar">Search:</label>
				<input type="text" name="search"/>
				<input type="submit"  id="sbar"/>
				</form>
			</div>
		</div>
		</nav>
  

		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
					<img id="slide" src="img/slide1.png" style="width:100%">
						<div class="text"><strong></strong></div>
			</div>
						
			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
					<img id="slide" src="img/slide2.png" style="width:100%">
						<div class="text"></div>
			</div>
						
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img id="slide" src="img/slide3.png" style="width:100%">
						<div class="text"></div>
			</div>
					
		</div>
		<br>
		<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>			
		
						
		<script>
			var slideIndex = 0;
			showSlides();
						
			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>

		<h1 id="uib">UNIVERSITIES IN BOTSWANA</h1>

		<section id="schools">
			<div class="varsity">
				<img src="img/ublogo.png" alt="ub logo" id="cardimage"/>
				<h2>University of Botswana</h2>
				<p>Learn More</p>
				<a href="http://www.ub.bw" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/biustlogo.png" alt="ub logo" id="cardimage"/>
				<h2>Buist</h2>
				<p>Learn More</p>
				<a href="http://www.ub.bw" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/baclogo.png" alt="ub logo" id="cardimage"/>
				<h2>Botwana Accountancy College</h2>
				<p>Learn More</p>
				<a href="https://www.bac.ac.bw/" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/bothologo.png" alt="ub logo" id="cardimage"/>
				<h2>Botho University</h2>
				<p>Learn More</p>
				<a href="https://www.bothouniversity.com/" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/limkologo.png" alt="ub logo" id="cardimage"/>
				<h2>Limkokwing</h2>
				<p>Learn More</p>
				<a href="https://www.limkokwing.net/botswana/" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/newera.png" alt="ub logo" id="cardimage"/>
				<h2>New Era College</h2>
				<p>Learn More</p>
				<a href="http://www.neweracollege.ac.bw/" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/buanlogo.png" alt="ub logo" id="cardimage"/>
				<h2>BUAN</h2>
				<p>Learn More</p>
					<a href="https://www.buan.ac.bw/" target="_blank" id="btn">Visit</a>
			</div>
			<div class="varsity">
				<img src="img/idmlogo.png" alt="ub logo" id="cardimage"/>
				<h2>IDM</h2>
				<p>Learn More</p>
				<a href="https://www.idmbls.com/" target="_blank" id="btn">Visit</a>
			</div>
	
			</section>
		

		<br>

	<footer style="width:100%;"> 
		<!--<img src = "img/th.jpg"  alt = "log" width = "50px" length = "50px" id = "img">-->
		<p style="text-align: center;padding: 20px 0px 20px 0px;"> &copy The Hybrids</p>
	</footer>
	
	</body>
</html>

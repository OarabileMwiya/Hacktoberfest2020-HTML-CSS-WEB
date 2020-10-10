<?php

session_start();
require 'config/dbconn.php';
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0" >
    <meta name="description" content="Insurance">
    <meta name="author" content="Chenzimu">
    <title>Chens Insurance bw</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   
<style>
#nav{
	margin-top:10px;height:79px;float:right;border-bottom:1px solid #007bff;
	
	
	}
	#shw{
		margin-bottom:10px;
		height:170px;
		max-width:100rem;
		
		}
h1,h2,h3,h4{
background-color:gray;
}
ul  li{
	margin-top:40px;
	text-decoration:none;
	display:inline-block;
	}

</style>
  </head>
  <body style="background-color:#c2b1ac;overflow-x:hidden">
    <header>
      <div id="logo" class="card"  style="height:200px;width:1300px"> 
        <div id="branding" style="width:100%">
			<div id="nav1" style="float:right;margin-top:38px"><nav class="navbar " id="nav">
           <ul  style="display:inline-block;text-decoration:none">
            <li class="current"><a href="home.php">Home</a></li>
            <li><a  style="max-height: 15rem;max-width:20rem" href="#about">About US</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="#boxes">Services</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="login.php">login</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="signup.php">SignUp</a></li>
          </ul></nav>
            
         </div>
          <h1><span class="highlight">CHENS INSURANCE LTD</h1><img src="../images/logo.png" style="height:auto;border-radius:50%;width:10%"/>
          </br></span><em class="small"  style="max-height: 15rem;max-width:9rem">insuring an assuring tommorow</em></h2>
        </div></div>    
    </header>
    <section id="showcase" style="heighwidth:100%;margin-top:10px;margin-bottom:10px">
      <div class="" id="shw" style="" class="container">
        <h1 class="h1">CHEN INSURANCE BW</h1>
        <p  ></p>INSURING A ASSURING TOMMOROW</p>
      </div>
    </section>
   
    <section  class= "card" id="boxes" >
      <div class="container">
		  <div class="box">
          <a href="add.php"><img src="../images/family.png" style="border-radius: 50%;width:195px;height:190px;"></a>
          <h3>INSURANCE</h3>
          <p>get insured today</p>
        </div>
        <div class="box">
          <a href="insurances"><img src="../images/bout.png" 
           style="border-radius: 50%;width:195px;height:190px;"/></a>
          </form>
          <h3>Offers</h3>
          <p>view what chen insurace offers</p>
        </div>
        <div class="box">
		<a href="staff.php"><img src="../images/staff.png" 
		 style="border-radius: 50%;width:195px;height:190px;"/></a>
          <h3>Staff</h3>
          <p>who are we </p></p>
        </div>
        <div class="box">
          <a href="add.php#first"><img src="../images/money.png" style="border-radius: 50%;width:195px;height:190px;"></a>
          <h3>Acquiring Insurance</h3>
          <p>view faqs </p>
        </div>
        <div class="box">
          <a href="help.php"><img src="../images/helpline.png" style="border-radius: 50%;width:195px;height:190px;"></a>
          <h3>Helpline</h3>
          <p>speak to a consultant</p>
        </div>
        <div class="box">
          <a href=""><img src="../images/appoint.jpeg" style="border-radius: 50%;width:195px;height:190px;"></a>
          <h3></h3>
          <p></p>
        </div>
      </div>
    </section>
    <div id="about" style="height:400px;background-color:#cccccc;">
		ABOUT US 
		<article style="font-weight:bold"><p><em>
		Chens Insurance BW is a privately owned insurance company lisenced under the Botswana insurance and policy cover in 2020. 
		The company was officially opened in April 24th April by its head of operation who is also the former Chief Officer of Botswana life
		insurances ltd for 15 years.The company profiles and trades under several insurance licences including life cover,accident and funeral expense
		cover,health insurance and asset cover.</em></p>
		</article><article id="show" style="width:100%;height:200px;border:1px solid blue;margin-right:0px">
      <img  class="mySlides"  src="../images/insurance.jpeg"/>
      <img  class="mySlides"  src="../images/insurance2.jpeg" />
      <img   class="mySlides" src="../images/showcase.jpg" />
    </article> 
   <section>
	   
   
   </section>
    </div>

    <footer  class="card"  style="height:100px;max-width:100rem">
      <p align="center" class="lead" >chen investments copyright(2020)</p>
    </footer>
    <script type="text/javascript">
var slideIndex = 0;
carousel();

function IdGet(str,str1){
	var id=prompt("enter the id number");
	document.getElementById(str1).value=id;
	document.getElementById(str).submit();
	}
	
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
  </body>
</html>


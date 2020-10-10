<?php

session_start();
if(!isset($_SESSION['username'])){
//header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="description" content="Insurance">
    <meta name="author" content="Chenzimu">
    <title>Chens Insurance bw</title>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
   
<style>
#nav{
	margin-top:10px;height:79px;float:right;border-bottom:1px solid #007bff;
	
	
	}
	#shw{
		margin-bottom:10px;
		height:170px;
		max-width:100rem;
		
		}
h1,h2,h4{
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
            <li><a   style="max-height: 15rem;max-width:20rem" href="#boxes">Services</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="logout.php">logout</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="contact.php">Extensions</a></li>
         
         </div>
          <h1><span class="highlight">CHENS INSURANCE LTD</h1><img src="../images/logo.png" style="height:auto;border-radius:50%;width:10%"/>
          </br></span><em class="small"  style="max-height: 15rem;max-width:9rem">insuring an assuring tommorow</em></h2>
        </div></div>

        <div style="float:right">
		  <img src="../images/coat.png" style="height:90px;width:90px;border-radius:50%;margin-left:930px" />
		  <img src="../images/images.png" style="height:90px;width:90px;border-radius:50%;margin-right:10px" />
		  <img src="../images/ins.png" style="height:90px;width:90px;border-radius:50%;margin-right:20px" /></div> 
	    </div>
	    <div>
		  <nav class="navbark" id="nav" style="margin-top:-200px;float:left;margin-left:150px;border:2px solid #007bff">
		  <ul  style="display:inline-block;text-decoration:none">
            <li class="current"><a href="clientele.php">Clintele</a></li>
            <li><a    style="max-height: 15rem;max-width:20rem" href="#staff">Staff</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="admision.php">Appointments</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="overdues.php">Insurances</a></li>
          </ul></nav>
       </div>
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
          <a href="overdues.php"><img src="../images/money.png" style="border-radius: 50%;width:95px;height:90px;"></a>
          <h3>Overdues</h3>
          <p>view clients' insurance equity </p>
        </div>
        <div class="box">
          <a type="button" href="add.php#first" ><img src="../images/add.png" 
          style="border-radius: 50%;width:95px;height:90px;"></a>
          <h3>Add new Client</h3>
          <p>New client Add</p>
        </div>
        <div class="box">
        <a type="button" href="clientele.php" ><img src="../images/q2.png" 
          style="border-radius: 50%;width:95px;height:90px;"></a>
          <h3>Clientelle</h3>
          <p>view clients</p>
        </div>
         </section>
        </div>
    <div style="height:auto;float:right;width:100%;border-bottom:1px solid gray;overflow:hidden" >
<article id="show" style="width:100%;height:auto;"> 
<img  class="mySlides"  src="../images/insurance.jpeg"/>
<img  class="mySlides"  src="../images/insurance2.jpeg" />
<img   class="mySlides" src="../images/in3.jpg" />
<img   class="mySlides" src="../images/in2.jpg" />
</article></div>

    <footer  class="card border-primary bg-primary mb-3"  style="height:100px;max-width:100rem">
      <p align="center" class="lead" >chen insurance copyright</p>
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

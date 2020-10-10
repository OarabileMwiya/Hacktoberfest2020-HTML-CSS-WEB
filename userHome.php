<?php
require 'config/dbconn.php';
session_start();
if(!isset($_SESSION['username'])){
header('location:homepage.php');
}
  $client=$_SESSION['username'];
   $sql="select * from insurance join users on insurance.clientNo=users.insuranceid where users.username='$client'";
      $result = mysqli_query($con, $sql);
       $status =$result->fetch_assoc()['status']; 
	?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>chen insurances | Welcome</title>
    <link rel="stylesheet" type="text/css" href="../css/userHome.css">
	
  </head>
  
  <body>
  
    <header>
    
       <div id="logo" class="card"  style="height:200px;width:1300px"> 
        <div id="branding" style="width:100%">
			<div id="nav1" style="float:right;margin-top:38px"><nav class="navbar " id="nav">
           <ul  style="display:inline-block;text-decoration:none">
            <li class="current"><a href="home.php">Home</a></li>
            <li><a  style="max-height: 15rem;max-width:20rem" href="about.php">About US</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="#boxes">Services</a></li>
            <li><a   style="max-height: 15rem;max-width:20rem" href="logout.php">logout</a></li>
            <li><a   id="stats" style="background-color:blue;border-radius:25px;border:1px solid black" href=""><?php echo $status ?></a></li>
          </ul></nav>
            <form action="search results" method="post">
          <img src="../images/icon.png" style="height:auto;border-radius:50%;margin-left:40%;float:left;width:10%"/>
		  <input type="text" style="width:300px;margin-left:20px;height:30px;margin-top:30px;" placeholder="find what" />
          <a type="submit" name="submit" ><img style="width:30px;height:40px;background-image:" src="../images/search.png" /></a>
          </button> 
          </form>
         </div>
          <h1><span class="highlight">CHENS INSURANCE LTD</h1><img src="../images/logo.png" style="height:auto;border-radius:50%;width:10%"/>
          </br></span><em class="small"  style="max-height: 15rem;max-width:9rem">insuring an assuring tommorow</em></h2>
        </div></div>        
    </header><div>
<article id="show" style="width:100%;height:200px;border:1px solid blue;margin-right:0px">
      <img  class="mySlides"  src="../images/insurance.jpeg"/>
      <img  class="mySlides"  src="../images/insurance2.jpeg" />
      <img   class="mySlides" src="../images/showcase.jpg" />
    </article></div> 
   <div style="margin-top:200px">
    <section id="boxes">
        <div class="box">
          <a href="#footer"><img src="../images/phone.png" style="width:159px;height:150px;">
          <h3>Helpline</h3></a>
          <p>View  helplines</p></div>
		  <div class="box">
		  <a href="#"><img src="../images/money.png" style="width:159px;height:150px;">
          <h3>PAYMENTS</h3></a>
          <p> Make a payment</p></p></p></div>
        <div class="box">
          <a href="#stats" ><img src="../images/inp.png" style="width:159px;height:150px;"/>
          <h3>INSURANCE STATUS</h3></a>
          <p>View my insurance status</p>
        </div>
    </section></div>
      <div id="about" style="height:400px;margin-top:100px;background-color:#cccccc;">
		  <br><br>
		<article style="font-weight:bold;background-color:gray;border-radius:20px 0px 20px 0px;">
			<h1>ABOUT US </h1>
			<p><em>	
		Chens Insurance BW is a privately owned insurance company lisenced under the Botswana insurance and policy cover in 2020. 
		The company was officially opened in April 24th April by its head of operation who is also the former Chief Officer of Botswana life
		insurances ltd for 15 years.The company profiles and trades under several insurance licences including life cover,accident and funeral expense
		cover,health insurance and asset cover.</em></p>
		</article>
		</div>	
    <footer id="footer">
		
      <ul style="list-style:none;"><li><p>chen insurances ltd,&copy; 2020</p></li>
	   <li><p>Toll free : (+267) 756672810</p></li>
			</ul>
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

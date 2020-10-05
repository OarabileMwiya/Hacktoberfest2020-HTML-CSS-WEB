<?php   
  $link = mysqli_connect("localhost", "root","", "UNIVERSITY_PROGRAMS");
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Tertiary Journey</title>    
  <script src="src/ctrl/initialize.js"></script>
  <script src="src/model/course.js"></script>
  <script src="src/view/findPath.js"></script>
  <script>
   window.addEventListener("load", pl.view.findPath.setupUserInterface);
  </script>
  <link rel="stylesheet" type = "text/css" href = "css/carrerpath.css"/>
  
</head>
<body style="overflow:scroll">
  <nav>
    <div class="navbar">
        <img src = "img/th.jpg" alt = "log" length = "50px" width="50px" style="position: absolute;top:10%;">
        <h1>UNDERGRAD HELPER: Find my career path</h1>
        <hr>
        <a href="home.php">Home</a>
        <a href="findCareerPath.php">Career Path</a>
        <a href="aboutus.html" >About Us</a>
        <a href="getData.php">viewAll programs</a> 
        <div class="dropdown">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Institutions Location
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                  <a href="https://www.google.com/maps/search/ub/@-24.6578699,25.9335494,17z/data=!3m1!4b1" target="_blank">University Of Botswana</a>
                  <a href="https://www.google.com/maps/search/biust/@-23.586844,26.0252093,9z/data=!3m1!4b1" target="_blank">Biust</a>
                  <a href="https://www.google.com/maps/place/Botswana+Accountancy+College/@-24.6809422,25.9248154,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb5be8edcea723:0x5ca701921e24760e!8m2!3d-24.6809422!4d25.9270041" target="_blank">Bac</a>
                  <a href = "https://www.google.com/maps/place/Botswana+University+of+Agriculture+and+Natural+Resources/" target="_blank">Buan </a>
                  <a href = "https://www.google.com/maps/search/Botho+University/@-24.6845584,25.8797398,15.5z" target="_blank">Botho University</a>
                  <a href = "https://www.google.com/maps/place/Institute+of+Development+Management,+Gaborone/@-24.6716157,25.9260432,17z/data=!4m12!1m6!3m5!1s0x1ebb5beb2bc6c7a9:0xcb34310eaa1e673d!2sInstitute+of+Development+Management,+Gaborone!8m2!3d-24.6719764!4d25.9263543!3m4!1s0x1ebb5beb2bc6c7a9:0xcb34310eaa1e673d!8m2!3d-24.6719764!4d25.9263543" target="_blank">Idm </a>
                  <a href = "https://www.google.com/maps/place/Limkokwing+University+of+Creative+Technology,+Gaborone/@-24.6228949,25.8903767,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb5ada10132401:0x2a117dc886518ea0!8m2!3d-24.6231738!4d25.8924694" target="_blank">Limkokwing</a>
                  <a href = "https://www.google.com/maps/place/New+Era+College/@-24.605659,25.9188894,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb44cac62c8eb1:0x3e9fc3ef6e5569af!8m2!3d-24.605659!4d25.9210781" target="_blank">New Era</a>
                  <a href = "https://www.google.com/maps/place/Limkokwing+University+of+Creative+Technology,+Gaborone/@-24.6228949,25.8903767,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebb5ada10132401:0x2a117dc886518ea0!8m2!3d-24.6231738!4d25.8924694" target="_blank">Limkokwing</a>
                </div>
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
          
  <section id="form">
	<!-- <form method="POST" id="subtion" action="suggested.php" >
		<input name="sub" id="subreq" value="" hidden>
		<input name="university" id="university" value="" hidden>
		<input name="field" id="field" value="" hidden> 
		<button id="submitter" type="button"  hidden>go</button>
	 </form>-->
    <form id="course" name="course" method="POST" action="suggested.php" target="suggested.php">
      <label>Preferred University: <br><input class="input" name="university" id="prefer" required/></label><br><br>
      <label>Interest:<br><input class="input" name="field"  id="interest" required/></label><br><br>
	    <label id="name">Maths          :<br><input class="input" id="subject" name="subject" max-length="1"/></label> <br><br>
	    <label id="name">Biology        :<br><input class="input" id="subject" name="subject" max-length="1"/></label>  <br><br>
	    <label id="name">Chemistry      :<br><input class="input" id="subject" name="subject" max-length="1" onKeyPress = ""/></label>  <br><br>
	    <label id="name">Physics        :<br><input class="input" id="subject" name="subject" max-length="1"/></label><br/><br/>
	    <label id="name">English        :<br><input class="input" id="subject" name="subject" max-length="1"/></label>  <br><br>
	    <label id="name">Setswana       :<br><input class="input" id="subject" name="subject" max-length="1"/></label>  <br><br>
	    <label id="name">Double-Science :<br><input class="input" id="subject" name="subject" min-length="2"/></label>  <br><br>
	    <label id="name">Single-Scince  :<br><input class="input" id="subject" name="subject" min-length="3"/></label><br/><br/>
	    <label id="name">Optional      :<br>
        <select name="optionals" >
	        <option>Development Studies</option><option>Geography<option>Social studies</option></select>
	    <input name="subject" id="subject" max-length="1"/></label><br/><br/>
      <label id="name">Practicals    :<br>
        <select name="practicals">
          <option>Physical Education</option>
          <option>Additional Mathematics</option>
          <option>Art</option>
        </select>
        <input name="subject" id="subject" max-length="1"/>
      </label><br/><br/>
      <label id="name">Others        :<br>
        <select name="others"> 
          <option>Accounting</option>
          <option>Business Studies</option> 
          <option>Commerce</option>
          <option>ComputerStudies</option>
          <option>Design And Technology</option>
        </select>
        <input name="subject" id="subject" max-length="1"/></label><br>
        <!--<label>Best six: </label><input name="sub" id="subreq" ><label></label>-->
    <p><button onclick="setParam();" class="btn" type="submit name="submit" value="submit" >Search</button></p>
  </form>
  </section>  
  <script>function setParam(){
	  x = document.querySelectorAll("#subject");
      y=document.querySelectorAll("#name")
     document.getElementById("subreq").value=getTopSix(x,y);
      //window.alert(document.getElementById("subreq").value);
      //document.getElementById("field").value=document.getElementById("interest").value;
      //document.getElementById("university").value=document.getElementById("prefer").value;
      //document.getElementById("course").submit();
	  }
   function getTopSix(values,names){
	var mapGrades=new Array(9),sum=0;
	//var required={};
	var data1={"AA":16,"BB":14,"CC":12,"DD":10,"EE":8,"FF":0,"UU":0,"GG":0,"A":8,"A*":8,"B":7,"C":6,"D":5,"E":4,"G":0,"F":0,"X":0,"U":0};
	var i=0,j=0,wrongG=false;
	var keys=Object.keys(data1);
  for(i=0;i<values.length;i++){
	  //window.alert(typeof(values[i].value));
    if (keys.includes(values[i].value)){
       mapGrades[j++]=data1[values[i].value];
   	
    }	
		}
 //window.alert(mapGrades[0]);
 if(mapGrades.length<7 || mapGrades.length>9){
		window.alert("INvalid Number Of Courses");window.location.href = "findCareerPath.php";	}
else{		

mapGrades.sort();
for (var i=3;i<mapGrades.length;i++){
	sum = sum +parseInt(mapGrades[i]);		
}

}
return sum;
}

  </script>
</body>
</html>

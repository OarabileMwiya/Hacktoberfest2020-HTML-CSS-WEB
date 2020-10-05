	<!DOCTYPE html>
<?php

$link = mysqli_connect("localhost", "root", "", "UNIVERSITY_PROGRAMS");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="UTF-8" />
  <title>undergrad helper: list Available </title>
  <script src="src/ctrl/initialize.js"></script>
  <script src="src/model/course.js"></script>
  <script src="src/view/listcourses.js"></script>
 <!-- <script src="http://www.izivote.com/res/js/jquery.min.js"></script>-->
  <script>
   window.addEventListener( "load", pl.view.listcourses.setupUserInterface);
  </script>
   <link rel="stylesheet" type = "text/css" href = "css/carrerpath.css"/>
  <style>
  #courses tr,th,td{
	  border:2px solid crimson;
	  border-collapse: collapse;
	  position: relative;
	  left: 5%;
	  }
  </style>
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
        </div>
	</nav>
	<div height="auto" style="margin-top:150px;background-color:crimson;text-align:center;padding: 10px 10px;">
		<h1>AVAILABLE COURSES(NB: ONLY ACREDITED COURSES SHOWN)</h1>
		</div>
   <?php
// Attempt select query execution
$array=array();
$sql = "SELECT * FROM programs";
if($result = mysqli_query($link, $sql)){
	$i=0;
    if(mysqli_num_rows($result) > 0){  
        while($row = $result->fetch_assoc() and $i<mysqli_num_rows($result)){
          $array[$i++]=$row;  
        }
        if($i>0){ ?>
        <p id="allC" type="text" hidden><?echo JSON_encode($array);?></p>
       <?php }
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
<section width="600px" height="500px" style="background-color:rgb(230, 230, 230);left:50px;right:50px;overflow:scroll">
  <h1 style="text-align:center">Undergrad helper : List of all courses</h1>
  <table id="courses" >
    <thead><tr><th>coursename</th><th>qualification</th><th>fieldOfStudy</th><th>School</th><th>Duration</th><th>EntryRequirements</th></th></tr></thead>
    <tbody></tbody>
  </table>  
 </section>
</body>
</html>


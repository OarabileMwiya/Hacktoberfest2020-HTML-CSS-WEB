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
  <style>
	  
	  table {
		  width: 100%;
	  }
		table, tr, td {
		border: 2px solid crimson;
		border-collapse: collapse;
		postion: relative;
		left: 0%;
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
        <a href="getData.php">viewAll programs</a> 
        <div class="dropdown"></div>
        </nav>
        <div height="auto" style="margin-top:150px;background-color:gray">
		<h1 style="background-color:crimson;padding:12px 12px;">RECOMENDED COURSES:by requirement analysis</h1>
		</div>
<?php   
  $link = mysqli_connect("localhost", "root","", "UNIVERSITY_PROGRAMS");
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$array=array();
$field=$_POST['field'];
$qualification=$_POST['qualification'];
$university= $_POST['university'];
$sql="SELECT * FROM programs where FieldOfStudy regexp '$field' and CutOffPoints<=$qualification  and OfferedAt regexp '$university'";
$sql=str_replace("'","\"",$sql);
if($result = mysqli_query($link,$sql)){
    if(mysqli_num_rows($result) > 0){  
        $i=0;
        while($row = $result->fetch_assoc() and $i<mysqli_num_rows($result)){
          $array[$i++]=$row;  
        }
        if($i>0){ ?>
        <p id="result" type="text" hidden><?echo JSON_encode($array);?></p>
       <?php } 
        mysqli_free_result($result);
    } else{
        echo "Mfethu work hard";
    }}
mysqli_close($link);
?>
  <section width="600px" height="500px" style="background-color:rgb(230, 230, 230);overflow:scroll">
  <h1 style="text-align:center">Undergrad helper : List of all courses</h1>
  <table id="RecommendedCourses"  >
    <thead><tr><th>coursename</th><th>qualification</th><th>Duration</th><th>fieldOfStudy</th><th>School</th><th>EntryRequirements</th></th></tr></thead>
    <tbody></tbody>
  </table>  
 </section>
</body>
</html>
  

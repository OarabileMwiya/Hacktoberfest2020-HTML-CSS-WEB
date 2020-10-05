 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="UTF-8" />
  <title>undergrad helper: list Available </title>
  <script src="src/ctrl/initialize.js"></script>
  <script src="src/model/course.js"></script>
  <script src="src/view/findCourse.js"></script>
  <script>
   window.addEventListener( "load", pl.view.findCourse.setupUserInterface);
  </script>
   <link rel="stylesheet" type = "text/css" href = "css/carrerpath.css"/>
  <style>
  #courses tr,th,td{
	  border:1px dashed black;
	  
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
	<section width="600px" height="500px" style="background-color:rgb(230, 230, 230);left:50px;right:50px;overflow:scroll">
	<div height="auto" style="margin-top:150px;background-color:gray">
		<h1>Search Results</h1>
		</div>
             <?php

                $link = mysqli_connect("localhost", "root", "", "UNIVERSITY_PROGRAMS");
                
// Check connection
                 if($link === false){
                     die("ERROR: Could not connect. " . mysqli_connect_error());
                       }
                     
                $array=array();
				$_searchData=$_POST["search"];
				$sql="SELECT * FROM programs where FieldOfStudy REGEXP '$_searchData' OR ProgramName regexp '$_searchData' or OfferedAt regexp '$_searchData'";
                $sql=str_replace("'","\"",$sql);
                if($result = mysqli_query($link,$sql)){
                      if(mysqli_num_rows($result) > 0){  
                             $i=0;
                     echo "<table>";       
                     echo " <thead><tr><th>coursename</th><th>qualification</th><th>Schoolf</th><th>ieldOfStudy</th>";
                      echo "<th>Duration</th><th>EntryRequirements</th></th></tr></thead>";       
                      while($row = $result->fetch_assoc()){
                              $array[$i++]=$row; 
                           echo "<tr>";   
						   echo "<td>".$row['ProgramName']."</td>";
						   echo "<td>".$row['CutOffPoints']."</td>";
						   echo "<td>".$row['OfferedAt']."</td>";
						   echo "<td>".$row['FieldOfStudy']."</td>";
						   echo "<td>".$row['Duration']."</td>";
						   echo "<td>".$row['Requirements']."</td>";
                           echo "</tr>";
								}   
                           }
                       echo"</table>";     
                           if($i>0){ ?>
                    <p id="res" type="text" hidden ><?echo JSON_encode($array);?></p>
                                 <?php } 
                      mysqli_free_result($result);
                      }
                  
				?>
				
  <h1 style="text-align:center">Undergrad helper : search results</h1>
  <!--<table id="resultant" >
    <thead><tr><th>coursename</th><th>qualification</th><th>fieldOfStudy</th><th>School</th><th>Duration</th><th>EntryRequirements</th></th></tr></thead>
    <tbody></tbody>
  </table> --> 
 </section>
</body>
</html>

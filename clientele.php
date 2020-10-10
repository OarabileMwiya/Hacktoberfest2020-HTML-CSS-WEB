<!DOCTYPE html>
<html>
<head>
      <title>addNewPatient</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
     
  <style>
	table{width:800px;
		 border-collapse: collapse;
		 align:center;
		 margin-bottom:20px;
		 margin-left:300px;
		 }  
    table ,th,tr,td{
	  border:2px solid blue;
	  }
	  
  tbody tr:nth-child(even){
	  background-color:lightblue;
	  //color:white;
	  }
table thead{ color:white;
	background-color:blue;
	}
ul :li{
	display:inline-block;text-decoration:none;
	}	  
  
  </style>
   </head>
<body style="background-color:#c2b1ac">
<header>
      <div id="logo" class="card border-info bg-dark mb-3"  style="max-height: 8rem;max-width:100rem">
        <div id="branding">
			
          <h1><span class="highlight">CHEN INSURANCE BW</h1><img src="../images/logo.png" style="height:100px;border-radius: 50%;width:100px"/>
          </br></span><em class="card border-info bg-dark border-primary mb-3"  style="max-height: 15rem;max-width:9rem">pharmaceuticals</em></h2>
        </div> </div>
       </header>
 <section>
	 <div style="margin-left:5px;float:right;margin-top:-200px">
			<ul><li><a href="home.php"><button  class="btn btn-secondary border-primary" style="float:left;margin-left:0%;margin-right:0px;width:206px;margin-top:90px">Home</button></li>	
        </a><li><img src="../images/card.png" style="float:right;width:90px;height:90px;border-radius:50%;margin-top:2px;margin-bottom:9px;" />
 			</li></ul></div>
	 <h1  style="text-align:center">CLIENT LIST</h1>
	      
	 </section>        
<div style="display:inline-block">
<button type="button"  class="btn" 
data-toggle="collapse" data-target="#demo"  style="float:right;margin-bottom:10px;margin-top:5px;height:40px;width:200px;margin-right:10px">
TableView</button>
<?php
require 'config/dbconn.php';
session_start();

$q = " SELECT * FROM clients";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num >= 1){	
		echo "<div style='background-color:lightblue;width:1300px;margin-left:10px;height:auto;overflow:hidden'>";
	 echo "<ul style='display:inline-block'>";
	 while($arr=$result->fetch_assoc()){
		$ClientNo=$arr['ClientNo'];
		$name=$arr['FIRSTNAMES'];
	echo "<li style='margin-left:40px;text-decoration:none;display:inline-block'>";	
	echo "<div style='width:150px;height:150px;border-radius:10%;background-color:gray;margin-top:10px;border:2px solid blue'><a>";
	echo "<img src='../images/card.png'  style='margin-left:10px;margin-top:15px;height:100px;width:100px;'/>";
	echo "<img src='../images/card.png'  style='margin-left:45px;margin-top:-100px;height:80px;width:80px;'/>";
	echo "</div><div><input type='text' value='{$ClientNo}' name='dah' style='width:150px;background-color:cyan' readonly /></div>";
	echo "<button type='text'  class='btn btn-primary' data-toggle='collapse'  style='margin-bottom:10px;margin-top:5px;height:40px;width:150px'>{$name}</button>";
	echo "</li>";

	}
	echo "</ul>";
	echo "</div>";
}else{
	
	echo "<script language='javascript'>";
    echo "alert('NO clients FOUND')";
    echo "</script>";
	$URL="home.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
	
}
?>
<div style="background-color:gray;border:1px solid green;width:100%;margin-top:10px;max-height:auto" id="demo" class="collapse"> 
<?php
 echo "<h1 class='h1' style='text-align:center;color:lightblue;font-weight:bold;'>CLIENTRECORDS</h1>";
 $query = " SELECT * FROM clients";
  $result = mysqli_query($con, $query);
  $num = mysqli_num_rows($result);
  if($num >= 1){
	  echo "<table><tbody>";
	  echo "<thead> <th>clintNo</th><th>Firstname</th><th>lastnames</th><th>gender/th><th>nationality</th>
	  <th>occupation</th><th>Date of birth</th><th>contact</th><th>insrance type</th><th>nationalid</th>
	  </thead>";
	  while($arr=$result->fetch_assoc()){
		  echo "<tr>";
		  echo "<td>".$arr['ClientNo']."</td>";
          echo "<td>".$arr['FIRSTNAMES']."</td>";
          echo "<td>".$arr['LASTNAME']."</td>";
          echo "<td>".$arr['GENDER']."</td>";
          echo "<td>".$arr['NATIONALITY']."</td>";
          echo "<td>".$arr['OCCUPATION']."</td>";
          echo "<td>".$arr['D_O_B']."</td>";
          echo "<td>".$arr['CONTACT']."</td>";
          echo "<td>".$arr['INS_TYPE']."</td>";	
          echo "<td>".$arr['NATIONAL_ID']."</td>";		   
		  echo"</tr>";
		  }	  
	  echo "</tbody></table>";
	  }
else {
	echo "<script>alert('unsuccessful request');</script>";
	}	  
  
    ?>
</div></div>
<footer  class="card border-primary bg-primary mb-3"  style="max-height:300vh;max-width:100rem">
      <p align="center" class="lead" >CHEN INSURANCE</p> copyright</p>
    </footer>


</body>
</html>

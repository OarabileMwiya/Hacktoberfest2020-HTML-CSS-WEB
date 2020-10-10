<!DOCTYPE html>
<html>

   <head>
      <title>addNewclient</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
	
  <body style="background-color:#c2b1ac">
<header>
      <div id="logo" class="card border-info bg-dark mb-3"  style="max-height: 8rem;max-width:100rem">
        <div id="branding">
          <h1><span class="highlight">CHENS INSURANCE</h1><img src="../images/logo.png" style="height:auto;border-radius: 50%;width:10%"/></br></span><em class="card border-info bg-dark border-primary mb-3"  style="max-height: 15rem;max-width:9rem">pharmaceuticals</em></h2>
        </div> </div>
       </header>
	 <section>
	 <h1 class="h1" style="text-align:center">NEW CLIENT</h1>
	 <img src="../images/inp.png" style="width:100px;height:100px;border-radius:50%;margin-left:45%;margin-bottom:10px;" />	      
	 </section>  
	   <div style="border:1px solid black;margin-bottom:8px;width:auto;height:400px;margin-left:10px;margin-right:10px;background-color:#cafae1" >
	   
      <form style="margin-top:17px;" action="add.php" method="post">
		  <div>
        <label> FIRSTNAME: <input type = "text" id="first" name = "firstname" required /></label>
          <label style="margin-left:50px">SURNAME: <input type = "text" name = "surname" required /></label>
          <label style="margin-left:50px">GENDER: <select style="height:30px;width:209px" name="Gender" id="gender">
                   <option value="M">MALE</option>
                   <option value="F">FEMALE</option>
    </select></label><br><br>
         <label style="text-align:center">EMAIL/PHONE:<input type="text" name="contact"  required /></label>
         <label style="margin-left:50px">OCCUPATION:<input type="text" name="occ"  required /></label>
         <label style="margin-left:50px">D.O.B<input type="date" name="dob"  required /></label>
         </div>
         <div style="margin-top:40px"><label>
		ID NUMBER: <input type = "text" name = "nationalid" required /></label>
		<label style="margin-left:50px">Nationality: <input type = "text" name = "nationality" required /></label>
          <label style="margin-left:50px">INSURANCE TYPE:<select  style="height:30px;width:216px"  name="type" id="visit">
  <option value="LIFE">LIFE</option>
  <option value="MEDICAL">Health</option>
  <option value="BUSINESS">BUSINESS</option>
  <option value="ASSET">VEHICLE/BUILDING</option>
  <option value="WORK">WORK</option>
</select></label>
        
         <label style="margin-left:50px">DATE: <input style="background-color:#d9e38a;margin-left:27px" type="text" name="date" value=<?php echo (date("Y-m-d-h:m",time()));?> readonly ></label>
         <br>
         <br><input style="width:209px;margin-left:35%;border:1px solid #d5f007;bg-color:#d5f007" type="submit" name="submit"  >
         <a href="home.php"><input style="margin-top:5px;width:209px;margin-left:35%;border:1px solid #d5f007;bg-color:#d5f007" type="button" value="cancel" ></a><br>
         </div></div>
         </div>
      </form>
      </div>
      
<div>    
<?php
require 'config/dbconn.php';
 if(isset($_POST['surname'])){
session_start();
$name= $_POST['firstname'];
$surname= $_POST['surname'];
$gender=$_POST['Gender'];
$nationality=$_POST['nationality'];
$id=$_POST['nationalid'];
$dob=$_POST['dob'];
$occupation=$_POST['occ'];
$contact=$_POST['contact'];
$instYpe=$_POST['type'];
$insNo=rand(100,999)."".substr($id,0,5);
$q="insert into clients values ('$insNo','$name','$surname','$gender','$nationality','$id','$dob','$occupation','$contact','$instYpe')";
	mysqli_query($con, $qy);
$result = mysqli_query($con, $q);  
if($result===true){
		echo "<script type='text/javascript'>alert('Client successfully Added : insurance Id : ".$insNo.");</script>";
		$URL="home.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>"; 
		}
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>"; 	 
	}  
      
     

      ?></div>  
     
      <footer  class="card border-primary bg-primary mb-3"  style="height:100px;max-width:100rem">
      <p align="center" class="lead" >CHENS INSURANCES copyright</p>
    </footer>
   </body>
	
</html>

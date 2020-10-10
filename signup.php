<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CHENINVESTMENTS|login</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
 </head>
  <body>
  <section align="center" style="border:1px solid lightblue;margin-bottom:5px;background-color:#f2f7f7">
  <h1><span class="highlight">CHEN INSURANCES</h1><img src="../images/logo.png" align="center" style="height:auto;border-radius: 50%;width:10%"/>
  </section>

<div  class="login-box">
  <h1 style="text-align:center;">SIGN UP</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <form action="handler/newUser.php" method="post">
	<input class="form-control" style="align:center;margin-left:40px"color="white" type="text" name="id" placeholder="NationalId" required/>
    <input class="form-control" style="align:center;margin-left:40px"color="white" type="text" name="user" placeholder="Username" required/>
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input class="form-control" style="align:center;margin-left:40px"  type="password" name="password" placeholder="Password" required/>
  </div>
  <button type="submit" class="btn" >Log In</button>
</form>
</div>
</body>
</html>

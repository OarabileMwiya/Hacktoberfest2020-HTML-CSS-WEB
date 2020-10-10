<!Doctype html>
<html>
<?php

?>
<head>
<script language="javascript">
 alert("logged off");
 window().alert("logging off");
 </script>

 </head>
<body> 

<?php
session_start();
session_destroy();
$URL="homepage.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
?>
</body>
</html>

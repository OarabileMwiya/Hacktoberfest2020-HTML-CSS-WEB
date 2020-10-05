<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="UTF-8" />
  <title>undergrad helper: list Available </title>
  <script src="src/ctrl/initialize.js"></script>
  <script src="src/model/course.js"></script>
  <script src="src/view/listcourses.js"></script>
  <script src="http://www.izivote.com/res/js/jquery.min.js"></script>
  <script>
   window.addEventListener( "load", pl.view.listcourses.setupUserInterface);
  </script>
  <style>
	table, tr, td, td {
		border: 2px dashed crimson;
		border-collapse: collapse;
		width: 70%
		postion: relative;
		left: 0%;
		
	}
  </style>
</head>
<body>
  <h1 style="font-family: cursive;">Undergrad helper : List of all courses</h1>
  <table id="courses" hidden>
    <thead><tr><th>coursename</th><th>courseTitle</th><th>Duration</th><th>fieldOfStudy</th><th>School</th><th>EntryRequirements</th></th></tr></thead>
    <tbody></tbody>
  </table>
  <nav><a href="homp.php">Main menu</a></nav>
</body>
</html>

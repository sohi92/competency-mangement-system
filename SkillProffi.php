<!DOCTYPE HTML>
<?php  
//  importing confiq file.
 include("config.php");

 ?> 
<html>

<head>
  <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 // calling functions
 google.setOnLoadCallback(drawChartPython);
 google.setOnLoadCallback(drawChartJava);
 google.setOnLoadCallback(drawChartC);
 google.setOnLoadCallback(drawChartPhp);
 google.setOnLoadCallback(drawChartNet);
 // function for python
 function drawChartPython() {
	 var data = google.visualization.arrayToDataTable([

	 ['Level', 'No of Employees'],
	 <?php 
	 $query = "SELECT Level, COUNT(*) AS number FROM skillset WHERE Skill_name = 'Python' GROUP BY Level";

	 $exec = mysqli_query($db,$query);
	 while($row = mysqli_fetch_array($exec)){

	 echo "['".$row['Level']."',".$row['number']."],";
	 }
	 ?>
	 
	 ]);

	 var options = {
	 title: 'Employees who know Python with thier Level of Expertization ',
	  is3D:true,
	   width:850,
	           colors: ['#808080'],
        bar: { groupWidth: '14%' },
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnPython"));
	 chart.draw(data, options);
	 }
	 // function for java
	  function drawChartJava() {
	 var data = google.visualization.arrayToDataTable([

	 ['Level', 'No of Employees'],
	 <?php 
	 $query = "SELECT Level, COUNT(*) AS number FROM skillset WHERE Skill_name = 'Java' GROUP BY Level";

	 $exec = mysqli_query($db,$query);
	 while($row = mysqli_fetch_array($exec)){

	 echo "['".$row['Level']."',".$row['number']."],";
	 }
	 ?>
	 
	 ]);

	 var options = {
	 title: 'Employees who know Java with thier Level of Expertization ',
	  is3D:true,
	   width:850,
	           colors: ['#808080'],
        bar: { groupWidth: '14%' },
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnJava"));
	 chart.draw(data, options);
	 }
	 // Function for C#
	 	  function drawChartC() {
	 var data = google.visualization.arrayToDataTable([

	 ['Level', 'No of Employees'],
	 <?php 
	 $query = "SELECT Level, COUNT(*) AS number FROM skillset WHERE Skill_name = 'C#' GROUP BY Level";

	 $exec = mysqli_query($db,$query);
	 while($row = mysqli_fetch_array($exec)){

	 echo "['".$row['Level']."',".$row['number']."],";
	 }
	 ?>
	 
	 ]);

	 var options = {
	 title: 'Employees who know C# with thier Level of Expertization ',
	  is3D:true,
	   width:850,
	           colors: ['#808080'],
        bar: { groupWidth: '14%' },
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnC"));
	 chart.draw(data, options);
	 }
	 // Function for php.
	 
	 	  function drawChartPhp() {
	 var data = google.visualization.arrayToDataTable([

	 ['Level', 'No of Employees'],
	 <?php 
	 $query = "SELECT Level, COUNT(*) AS number FROM skillset WHERE Skill_name = 'PHP' GROUP BY Level";

	 $exec = mysqli_query($db,$query);
	 while($row = mysqli_fetch_array($exec)){

	 echo "['".$row['Level']."',".$row['number']."],";
	 }
	 ?>
	 
	 ]);

	 var options = {
	 title: 'Employees Who know PHP with thier Level of Expertization ',
	  is3D:true,
	   width:850,
	           colors: ['#808080'],
        bar: { groupWidth: '14%' },
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnPHP"));
	 chart.draw(data, options);
	 }
	 // function 
	 
	 	  function drawChartNet() {
	 var data = google.visualization.arrayToDataTable([

	 ['Level', 'No of Employees'],
	 <?php 
	 $query = "SELECT Level, COUNT(*) AS number FROM skillset WHERE Skill_name = 'Network Security' GROUP BY Level";

	 $exec = mysqli_query($db,$query);
	 while($row = mysqli_fetch_array($exec)){

	 echo "['".$row['Level']."',".$row['number']."],";
	 }
	 ?>
	 
	 ]);

	 var options = {
	 title: 'Employees who know Network Security with thier Level of Expertization ',
	  is3D:true,
	   width:850,
	           colors: ['#808080'],
        bar: { groupWidth: '14%' },
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnNetwork"));
	 chart.draw(data, options);
	 }
 </script>
  
  <style>
  	.dropbtn {
    background-color: #464d4f;
    color: white;
    padding: 16px;
	 padding-top: 30px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #464d4f;
      min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e4
  </style>
</head>

<body>
  <div id="body">
    <div id="top">
      <div id="logoTitle" style="background-color:#379683; font-size: 24px; color: white; height: 170px; width: 900px;">
	 <a href="index.php" class="button">Log Out</a>
        <div id="logoText">
          <h1 style = " color: white;"><a href="#">CMS</a></h1>
		  Competence Management System
        </div>
      </div>
      <div id="navbar">
        <ul id="nav">
          <li class="selected"><a href="Home.php">Home</a></li>
          <li><a href="add_employee.php">Add Employee</a></li>
          <li><a href="delete_employee.php">Delete Employee</a></li>
          		  		  <li><div class="dropdown">
			  <button class="dropbtn">STATISTICS</button>
			  <div class="dropdown-content">
				<a href="statistics.php">Manpower in different fields</a>
				<a href="SkillProffi.php">Expertise level of employees in different fields</a>
				<a href="MultiAndSingle.php">Comparison B/W Multi and Single Skilled Employees</a>
				<a href="desigEmp.php">Employees Based On Designations</a>
			  </div>
			</div></li>
          <li><a href="search.php">Search</a></li>
        </ul>
      </div>
    </div>
    <div id="content">
 <h1 align="left">Quantitative Analysis of employees by their skill level in different fields </h1>  
      <div style="text-align: center; align: center;">
        <!-- insert the page content here -->
           <div >  
                <h2 align="center">For Python</h2>  
                <br />  
                <div id="columnPython" style=" align:center ;width: 860px; height: 350px;"></div>  
           </div>  
		   
		     <div >  
                <h2 align="center">For Java</h2>  
                <br />  
                <div id="columnJava" style=" align:center ;width: 860px; height: 350px;"></div>  
           </div>  
		    <div >  
                <h2 align="center">For C#</h2>  
                <br />  
                <div id="columnC" style=" align:center ;width: 860px; height: 350px;"></div>  
           </div> 

			<div >  
                <h2 align="center">For Network Security</h2>  
                <br />  
                <div id="columnNetwork" style=" align:center ;width: 860px; height: 350px;"></div>  
           </div>  
		   
		   			<div >  
                <h2 align="center">For PHP</h2>  
                <br />  
                <div id="columnPHP" style=" align:center ;width: 860px; height: 350px;"></div>  
           </div> 
      </div>
    </div>
    <div id="tail">
      <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>

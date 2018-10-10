<!DOCTYPE HTML>
<?php  
//  importing confiq file.
 include("config.php");
 $query = "SELECT Specialization, COUNT(*) AS number FROM employee GROUP BY Specialization";  
 // running query.
 $result = mysqli_query($db, $query);  
 ?> 
<html>

<head>
  <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
		   // Using google api to draw graphs.
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  // to draw chart.
                var Tbdata = google.visualization.arrayToDataTable([  
                          ['Specialization', 'Number'],  // data to table
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Specialization"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var opt = {  
                      title: 'Comparison Between Single Skilled Employee VS Multi Skilled Employee',  
                      //3D effect.
					  is3D: true,
					 
					  
					  colors: ['#892813', '#f48342'],
                      pieHole: 0.3  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(Tbdata, opt);  
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
		 <!--navigation menu-->
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

      <div style="text-align: center; align: center;">
        <!-- insert the page content here -->
           <div >  
                <h2 align="center">Showing The Human-Resources Available With Single Specialization and Multiple Specialization</h2>  
                <br />  
                <div id="piechart" style=" align:center ;width: 860px; height: 500px;"></div>  
           </div>  
      </div>
    </div>
    <div id="tail">
      <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>

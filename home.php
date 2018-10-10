<!DOCTYPE HTML>
<?php
// importing configuration file for database connection.
include("config.php");
// checking if the connection is done.
if (!$db) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
// query to select to performing employees.
$sql = 'SELECT employee.Emp_id, employee.Fname,employee.Lname,skillset.Skill_name,skillset.Performance_rating FROM skillset LEFT JOIN employee ON skillset.Emp_id = employee.Emp_id ORDER BY Performance_rating desc limit 10';
$sql1 = 'SELECT Fname, Lname, Experiance FROM employee order by Experiance desc limit 10';		
// running queries
$query = mysqli_query($db, $sql);
$query1 = mysqli_query($db, $sql1);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}
?>
<html>

<head>
  <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
  
  /*parallel  divisions*/
    #parent_div_1, #parent_div_2, #parent_div_3{
	position: relative;
    width:300px;
    height:100px;
    margin-right:10px;
    float:left;
	}
	#parent_div_2{
	position: relative;
    width:300px;
    height:100px;
   
    margin-right:10px;
    float:left;
	}
	/* drop down button*/
	.dropbtn {
    background-color: #464d4f;
    color: white;
    padding: 16px;
	 padding-top: 30px;
    font-size: 16px;
    border: none;
}
/*setting position for drop down button.*/

.dropdown {
    position: relative;
    display: inline-block;
}
/* css for drop down content.*/
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
/*css for hover on the button.*/
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e4;}


/*styles for table*/

table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
  </style>
</head>
<!--heads ends here-->
<body>
  <div id="body">
    <div id="top">
      <div id="logoTitle" style="background-color:#379683; font-size: 24px; color: white; height: 170px; width: 900px;">
	  <!--logout button-->
	  <a href="index.php" class="button">Log Out</a>
        <div id="logoText">
		<!--logo-->
          <h1 style = " color: white;"><a href="#">CMS</a></h1>
		  Competence Management System
		  
        </div>
      </div>
	  <!--Navigation bar-->
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
	<!--main content of the page.-->
    <div id="content">
      <div class="news" style="background-color:white;">
<!--list of most experienced employees-->
        <h3>Most Experienced Employees</h3>
		<ol>
		<?php 
				while ($row = mysqli_fetch_array($query1))
		{
			// displaying data in list.
			echo '<li>'.$row['Fname'].' '.$row['Lname'].' '.$row['Experiance'].'Years</li>';
			
		}
		?>
        </ol>

      </div>
	  <!--welcome message-->
      <div id="text" style="height: auto; background-color:white;">
        <h1>Welcome To Competence Management System</h1>
	<table class="data-table">
		<caption class="title">Top 10 Employees With Best Performance</caption>
		<thead>
		<!--table header.-->
			<tr>
				<th>Employee ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Skill</th>
				<th>Performance Rating</th>
			</tr>
		</thead>
		<tbody>
		<?php
		// inserting data in table
		while ($row = mysqli_fetch_array($query))
		{
			/// inserting data in rows
			echo '<tr>
					<td>'.$row['Emp_id'].'</td>
					<td>'.$row['Fname'].'</td>
					<td>'.$row['Lname'].'</td>
					<td>'.$row['Skill_name'] . '</td>
					<td>'.$row['Performance_rating'].'</td>
				</tr>';

		}?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<!--end of the table-->
	
      </div>
    </div>
	<!--footer-->
    <div id="tail">
      <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>
<!--EOF-->

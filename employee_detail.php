<!DOCTYPE HTML>

<?php
// required php code.
   include("config.php");
   session_start();
   $error = false;
     $row1 = $_SESSION['emp_data'];
	 $_SESSION['Current_emp'] =   $row1['Emp_id']
	 
?>
<html>

<head>
  <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
  #parent_div_1, #parent_div_2, #parent_div_3{
	position: relative;
    width:350px;
    height:100px;
    margin-right:10px;
    float:left;
	}
	#parent_div_2{
	position: relative;
    width:250px;
    height:100px;
   
    margin-right:10px;
    float:left;
	}
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
	  <!--navigation menu-->
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
      <div class="news" style="background-color:white;">
	   <!--about us -->
 <h3>About Us</h3>
        <p style = "text-align : justify;">Description Traditional arrangements reflect a hierarchical structure where human resources management is centered on organizational structures and position descriptions with linked remuneration arrangements. As firms become more organized around networks and projects, a different set of arrangements center on generic competencies is required. Some employees have to be formally registered and certified to undertake particular tasks (e.g. medical practitioners or electricians) and may have a particular competency in a particular specialization. Individual employees will continue to enhance their skill sets as they learn new things, and it is intended this be captured using a set of smart forms, with the data to be added to personal files in a corporate database. </p>


  <!--follow us links-->
<h3>Follow us</h2>
        <ul>
          <li><a href="https://www.facebook.com/">@facebook</a></li>
          <li><a href="https://twitter.com/login?lang=en">@twitter</a></li>
          <li><a href="https://plus.google.com/">@google+</a></li>
          <li><a href="https://in.pinterest.com/">@pinterest</a></li>
        </ul>
        
      </div>
      <div   style = "height:800px;" id="text">
	  <?php 
	  // user image
	  echo '<div style = "text-align :center; height: auto; width:750px;">';
	 echo '<table><tr><td><img src="style/user_png.png"></td><td>  <h4>Name: </h4><p>'.$row1['Fname'].' '.$row1['Lname'].'</p> <br />
	 <h4>Designation: </h4><p>'.$row1['Designation'].'</p> <a href = "addmoreSkills.php">Add More Skill</a></td></tr></table>';
	 // adding table for skills 
	 	  echo '<hr />'; 
		  echo '<br />';
		  echo '<br />';
		echo '<div id="parent_div_1">';
		echo '<h2>Skill Sets</h2>';
		//// other details
		echo '<table style="width: 300px;"><th>Skill(s)</th> <th>Level</th> <th>Average Performance</th>';
					$ID=  $Fname= mysqli_real_escape_string($db,$row1['Emp_id']);
			
			 $sqlcheck = "SELECT * FROM skillset WHERE Emp_id = '$ID'";
			$result = $db->query($sqlcheck);

		if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo '<tr><td>'.$row["Skill_name"].'</td><td>'.$row["Level"].'</td><td>'.$row["Performance_rating"].'</td></tr>';
										
				}
			}
		$db->close();
		echo '</table>';
		
		// tables for other details.
		echo '</div>';

		echo '<div id="parent_div_2">';
		echo '<h2>Other Details</h2>';
		echo '<table style="width: 250px;">';
		echo '<th>First Name</th>';
		echo '<tr><td>'.$row1['Fname'].'</td></tr>';
		echo '<th>Last Name</th>';
		echo '<tr><td>'.$row1['Lname'].'</td></tr>';
		echo '<th>Contact No.</th>';
		echo '<tr><td>'.$row1['Contact'].'</td></tr>';
		echo '<th>Email</th>';
		echo '<tr><td>'.$row1['Email'].'</td></tr>';
		echo '<th>Designation</th>';
		echo '<tr><td>'.$row1['Designation'].'</td></tr>';
		echo '<th>Work Experience</th>';
		echo '<tr><td>'.$row1['Experiance'].'</td></tr>';
		echo '</table>';
	  echo '</div>';
	  echo '</div>';
	  ?>

      </div>
    </div>
    <div id="tail">
       <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>

<!DOCTYPE HTML>

<?php
// confiq file.
   include("config.php");
   session_start();
   $error = false;
   if (isset($_POST['DelBtn'])) {
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
			   // converting to mysql string
			 $ID= mysqli_real_escape_string($db,$_POST['emp_id']);
			 $sqlcheck = "DELETE FROM employee WHERE Emp_id = '$ID'";
			  $sqlskill = "DELETE FROM skillset WHERE Emp_id = '$ID'";
		 if($db->query($sqlskill) === TRUE && $db->query($sqlcheck) === TRUE) {
			 // query file.
			 $errorMsg = 'Record successfully removed.';
		echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
      }else {
// error if not exist in the database
	$errorMsg = 'The employee you are looking for do not exist in the database.';
		echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
      }	
	  
	  $db->close();
   }

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
	  <!--navigation file.-->
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
        <!-- insert your sidebar items here -->
 <h3>About Us</h3>
        <p style = "text-align : justify;">Description Traditional arrangements reflect a hierarchical structure where human resources management is centered on organizational structures and position descriptions with linked remuneration arrangements. As firms become more organized around networks and projects, a different set of arrangements center on generic competencies is required. Some employees have to be formally registered and certified to undertake particular tasks (e.g. medical practitioners or electricians) and may have a particular competency in a particular specialization. Individual employees will continue to enhance their skill sets as they learn new things, and it is intended this be captured using a set of smart forms, with the data to be added to personal files in a corporate database. </p>



<h3>Follow us</h2>
        <ul>
          <li><a href="https://www.facebook.com/">@facebook</a></li>
          <li><a href="https://twitter.com/login?lang=en">@twitter</a></li>
          <li><a href="https://plus.google.com/">@google+</a></li>
          <li><a href="https://in.pinterest.com/">@pinterest</a></li>
        </ul>

      </div>
      <div id="text">
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <!--FORM TO DETELE AN Employee -->
       <div style = "background-color : White; padding: 10px">
        <h1>Delete An Employee: </h1>
        <p>Enter the ID of the employee you want to delete:</p>
        <form action="#" method="post">
          <div class="set_form">
            <p><span>Employee's ID:</span><input class="contact" type="text" name="emp_id" value=""  required /></p>

            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="DelBtn" value="Delete" /></p>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div id="tail">
       <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>

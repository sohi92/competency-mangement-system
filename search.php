<!DOCTYPE HTML>

<?php
// importing config file.
   include("config.php");
   session_start();
   // checking if the button is pressed or not.
   $error = false;
   if (isset($_POST['findBtn'])) {
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
			 $ID= mysqli_real_escape_string($db,$_POST['emp_id']);
			 $sqlcheck = "SELECT * FROM employee WHERE Emp_id = '$ID'";
      
			
		// executing query.
	   $result = mysqli_query($db,$sqlcheck);
     
      
      
      $count = mysqli_num_rows($result);
		 if($count == 1) { // if employee exits in  database
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			 $_SESSION['emp_data'] =  $row;
		  header("location: employee_detail.php");
      }else { // not exist in the data base.

	$errorMsg = 'The employee you are looking for do not exist in the database.';
		echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
      }	
	  // closing database
	  $db->close();
   }

	}
?>
<html>

<head>
<!--heads ends here-->
  <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
 
  /*styles for drop down button.*/
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

<body><!--body of the page.-->
  <div id="body">
    <div id="top">
       <div id="logoTitle" style="background-color:#379683; font-size: 24px; color: white; height: 170px; width: 900px;">
	   <!--log out button-->
	  <a href="index.php" class="button">Log Out</a>
        <div id="logoText">
		<!--logo-->
          <h1 style = " color: white;"><a href="#">CMS</a></h1>
		  Competence Management System
        </div>
      </div>
	  <!--Navigation menu of the page-->
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
	<!--content of small panel-->
      <div class="news" style="background-color:white;">
 <h3>About Us</h3>
        <p style = "text-align : justify;">Description Traditional arrangements reflect a hierarchical structure where human resources management is centered on organizational structures and position descriptions with linked remuneration arrangements. As firms become more organized around networks and projects, a different set of arrangements center on generic competencies is required. Some employees have to be formally registered and certified to undertake particular tasks (e.g. medical practitioners or electricians) and may have a particular competency in a particular specialization. Individual employees will continue to enhance their skill sets as they learn new things, and it is intended this be captured using a set of smart forms, with the data to be added to personal files in a corporate database. </p>

<!--follows us links.-->

<h3>Follow us</h2>
        <ul>
          <li><a href="https://www.facebook.com/">@facebook</a></li>
          <li><a href="https://twitter.com/login?lang=en">@twitter</a></li>
          <li><a href="https://plus.google.com/">@google+</a></li>
          <li><a href="https://in.pinterest.com/">@pinterest</a></li>
        </ul>

      </div>
      <div   id="text">
	  	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <!--content in the bigger panel-->
	  <div style = "background-color : White; padding: 10px">
        <h1>Search An Employee: </h1>
        <p>Enter the ID of the employee you are looking for:</p>
        <form action="#" method="post">
          <div class="set_form">
            <p><span>Employee's ID:</span><input class="contact" type="text" name="emp_id" value="" required /></p>

            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="findBtn" value="submit" /></p>
          </div>
        </form>
        </div>
      </div>
    </div>
	<!--footer page-->
    <div id="tail">
       <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>

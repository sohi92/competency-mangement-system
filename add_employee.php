<?php
// importing config file
   include("config.php");
   session_start();
   $error = false;
   // check if the submit button is clicked or not.
   if (isset($_POST['btnSubmit'])) {
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
			   // converting to mysql string.
			  $emp_id= mysqli_real_escape_string($db,$_POST['Emp_ID']);
			 $Fname= mysqli_real_escape_string($db,$_POST['fname']);
			 $Lname= mysqli_real_escape_string($db,$_POST['ltname']);
			 $Email= mysqli_real_escape_string($db,$_POST['email']);
			 $Contact= mysqli_real_escape_string($db,$_POST['contact']);
			 $designation = mysqli_real_escape_string($db,$_POST['desi']);
			 $special = mysqli_real_escape_string($db,$_POST['speci']);
			 $expericace= mysqli_real_escape_string($db,$_POST['expe']);
			 // Query 
			 $sqlcheck = "SELECT Emp_id FROM employee WHERE Emp_id = '$emp_id'";
      
			
		// mysql result
	   $result = mysqli_query($db,$sqlcheck);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
		 if($count == 1) { // if the employ alread exist in the database or not.
			 $errorMsg = 'Seems employee are already exist!';
		echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
      }else {
		  // adding data to session array.
		$_SESSION['emp_id'] =  $emp_id;
		$_SESSION['Fname'] =  $Fname;
		$_SESSION['Lname'] =  $Lname;
		$_SESSION['Contact'] =  $Contact;
		$_SESSION['Email'] =  $Email;
		$_SESSION['designation'] =  $designation;
		$_SESSION['special'] =  $special;
		$_SESSION['expericace'] =  $expericace;
		 header("location: addSkill.php");

		$db->close();
      }


		
  
   }

	}
?>

<!DOCTYPE HTML>
<html>

<head>
 <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
  <style>
    
/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
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
      </div> <!--Navigation menu-->
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
    <div id="content" >
      <div class="news" style="background-color:white;">
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
       <!-- content will goes here-->

  <form action="" method = "post" >
  <div class="container">
    <h1>Add Employee's Data</h1>
    <p>Please fill the following details of the employee.</p>
    <hr>
    <label for="Firstname"><b>Employee's ID</b></label>
    <input type="text" placeholder="Enter Employee's ID..." name="Emp_ID" maxlength="12" required>
	
    <label for="Firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name..." name="fname" maxlength="30" required>
	
	<label for="Lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name..." name="ltname" maxlength="30" required>
	
	
	<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email..." name="email" maxlength="60" required>
	
	    <label for="contact"><b>Contact No:</b></label>
    <input type="text" placeholder="Enter Contact Number" name="contact" maxlength="10" required>
	
	    <label for="country"><b>Designation</b></label>
    <input type="text" placeholder="Enter Designation..." name="desi" maxlength="30" required>

    <label for="psw"><b>Specialization</b></label>
    <input type="text" placeholder="Enter Specialization..." name="speci" maxlength="10"id="password" onkeyup='check();' required>

    <label for="psw-repeat"><b>Experience</b></label>
    <input type="text" placeholder="Enter Work Experience in years (i.e. 2 for two years)" name="expe" maxlength="4" size="10" id="confirm_password"  onkeyup='check();' required>
<span id='message'></span>
    <hr>
    <button type="submit" name = "btnSubmit"  id="submitbn" class="registerbtn">Submit</button>
  </div>
  
</form>

      </div>
	</div>

    <div id="tail">
     <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
</body>
</html>
<!--EOF-->

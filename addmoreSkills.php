<?php
// config page.
   include("config.php");
   session_start();
   $error = false;
   if (isset($_POST['btnSubmit'])) {
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
			   // converting string to my sql page.
			  $skn= mysqli_real_escape_string($db,$_POST['SKname']);
			 $proffi = mysqli_real_escape_string($db,$_POST['proff']);
			 $rate= mysqli_real_escape_string($db,$_POST['Rating']);

			 // adding data to session to send to the next page.
			$emp_id = $_SESSION['Current_emp'] ;
		
			 // query to insert data in skill set.
			$sqlset = "INSERT INTO skillset (Emp_id,Skill_name,Level,Performance_rating )
			VALUES ('$emp_id','$skn', '$proffi','$rate')";
		
      
		if ($db->query($sqlset) === TRUE) {
		// successfully add in the database.
		$errorMsg = "New skill is successfully added";
					echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
			
		//header("location: add_employee.php");
		} else {
			echo "<h1>Error: " . $sql . "<br>" . $db->error."</h1>";
		}

		$db->close();
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
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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
    <h1>Add Employees Data</h1>
    <p>Please fill the following details of the employee.</p>
    <hr>
	 <!--Form to add skills.-->
    <label for="Firstname"><b>Skill Name</b></label>
    <input type="text" placeholder="Enter Skill..." name="SKname" maxlength = "30" required>
	
	<label for="Lastname"><b>Proficiency </b></label>
    <input type="text" placeholder="Enter Proficiency..." name="proff" maxlength = "15" required>

	<label for="email"><b>Performance Rating</b></label>
    <input type="text" placeholder="EnterRating (0 to 10)..." name="Rating" maxlength = "3" required>
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

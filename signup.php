<?php
// configuration file.
   include("config.php");
   session_start();
   $error = false;
   // checking if submit button is clicked or not.
   if (isset($_POST['btnSubmit'])) { 
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
			   // converting to mysql string
			 $Fname= mysqli_real_escape_string($db,$_POST['fname']);
			 $Lname= mysqli_real_escape_string($db,$_POST['ltname']);
			 $Email= mysqli_real_escape_string($db,$_POST['email']);
			 $Contact= mysqli_real_escape_string($db,$_POST['contact']);
			 $Country= mysqli_real_escape_string($db,$_POST['country']);
			 $Password= mysqli_real_escape_string($db,$_POST['psw']);
			 // query
			 $sqlcheck = "SELECT Fname FROM admin WHERE Email = '$Email'";
      
			
		// execute query
	   $result = mysqli_query($db,$sqlcheck);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      // mysql row
      $count = mysqli_num_rows($result);
		 if($count == 1) { // if the user is already registered 
			 $errorMsg = 'Seems you are already registered! Try Signing';
		echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
      }else { // insert data in the database otherwise.
         $sql = "INSERT INTO admin (Fname, Lname, Email, Contact, Country, Password)
		VALUES ('$Fname', '$Lname', '$Email','$Contact','$Country','$Password')";
		// show the message to the user.
		if ($db->query($sql) === TRUE) {
		$errorMsg = 'Your registration is done.';
		echo ' <script type="text/javascript">
             alert("'.$errorMsg.'");
			</script>
			';
		} else {
			echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1>";
		}

		$db->close();
      }


		
  
   }

	}
?>

<!DOCTYPE HTML>
<html>
<!--heads starts here-->
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
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
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
<!--heads ends here-->
<body>
<!--body ends here-->
  <div id="body">
    <div id="top">
      <div id="logoTitle" style="background-color:#379683; font-size: 24px; color: white; height: 170px; width: 900px;">
	  <!--login button-->
	  <a href="index.php" class="button">Log in</a>
        <div id="logoText">
          <h1 style = " color: white;"><a href="#">CMS</a></h1>
		  Competence Management System
        </div>
      </div>
	  <!--navigation bar-->
      <div id="navbar">
        <ul id="nav">
          <li class="selected"><a href="javascript:AlertIt();">Home</a></li>
          <li><a href="javascript:AlertIt();">Add Employee</a></li>
          <li><a href="javascript:AlertIt();">Delete Employee</a></li>
          		  		  <li><div class="dropdown">
			  <button class="dropbtn">STATISTICS</button>
			  <div class="dropdown-content">
				<a href="javascript:AlertIt();">Manpower in different fields</a>
				<a href="SkillProffi.php">Expertise level of employees in different fields</a>
				<a href="MultiAndSingle.php">Comparison B/W Multi and Single Skilled Employees</a>
				<a href="javascript:AlertIt();">Employees Based On Designations</a>
			  </div>
			</div></li>
          <li><a href="javascript:AlertIt();">Search</a></li>
        </ul>
      </div>
    </div>
    <div id="content" >
	<!--content of small panels-->
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
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name..." name="fname" maxlength = "30" required>
	
	<label for="Lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name..." name="ltname" maxlength = "30" required>
	
	
	<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email..." name="email" maxlength = "60" required>
	
	    <label for="contact"><b>Contact No:</b></label>
    <input type="text" placeholder="Enter Contact Number" name="contact" maxlength = "10" required>
	
	    <label for="country"><b>Country</b></label>
    <input type="text" placeholder="Enter Name Of your Country..." name="country" maxlength = "20" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password..." name="psw" id="password" onkeyup='check();' maxlength = "12" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password..." name="psw-repeat" id="confirm_password"  onkeyup='check();' maxlength = "12"required>
<span id='message'></span>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name = "btnSubmit"  id="submitbn" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>
<script content="text/javascript">
	var check = function() {
		// function to check if the password and repeat password matched or not.
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
	 document.getElementById("submitbn").disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
	document.getElementById("submitbn").disabled = true;
  }
}
</script>
      </div>
	</div>
<!--footer ends here-->
    <div id="tail">
     <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
  <!--java script function to how login msg.-->
    <script type="text/javascript">
		function AlertIt() {
			
		var answer = confirm ("Please Login or signup first! Press OK to continue.")
		if (answer)
		window.location="signup.php";
		}
		</script>
</body>
</html>
<!--EOF-->

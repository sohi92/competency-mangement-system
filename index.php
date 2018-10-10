<?php
// importing config files.
   include("config.php");
   session_start();
   $error = false;
   // checking if the button is pressed or not.
   if (isset($_POST['submitbtn'])) {
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      // Query.
      $sql = 'SELECT Fname FROM admin WHERE Email = "'.$myusername.'"'.' and Password = "'.$mypassword.'"';
	  //'SELECT * FROM COMMENTS WHERE Email = "'.$_POST['email'].'"';
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = true;
      }
   }

	}

?>
<!DOCTYPE HTML>
<html>

<head>
<!--Head data-->
 <title>CMS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <!--Importing style sheets-->
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
  <style>
 <!-- Local style sheet.-->   
 /* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
  

  </style>
</head>
<!--body starts here-->
<body>
  <div id="body">
    <div id="top">
       <div id="logoTitle" style="background-color:#379683; font-size: 24px; color: white; height: 170px; width: 900px;">
	  <a href="signup.php" class="button">Sign Up</a>
        <div id="logoText">
          <h1 style = " color: white;"><a href="#">CMS</a></h1>
		  Competence Management System
        </div>
      </div>
      <div id="navbar">
        <ul id="nav">
		<!--Navigation menu-->
          <li class="selected"><a href="javascript:AlertIt();">Home</a></li>
          <li><a href="javascript:AlertIt();">Add Employee</a></li>
          <li><a href="javascript:AlertIt();">Delete Employee</a></li>
          <li><a href="javascript:AlertIt();">Statistics</a></li>
          <li><a href="javascript:AlertIt();">Search</a></li>
        </ul>
      </div>
    </div>
    <div id="content" >
      <div class="news" style="background-color:white;">
        <h3>About Us</h3>
        <p style = "text-align : justify;">Description Traditional arrangements reflect a hierarchical structure where human resources management is centered on organizational structures and position descriptions with linked remuneration arrangements. As firms become more organized around networks and projects, a different set of arrangements center on generic competencies is required. Some employees have to be formally registered and certified to undertake particular tasks (e.g. medical practitioners or electricians) and may have a particular competency in a particular specialization. Individual employees will continue to enhance their skill sets as they learn new things, and it is intended this be captured using a set of smart forms, with the data to be added to personal files in a corporate database. </p>

      </div>
      <div id="text">
       <!-- content will goes here-->

  <form action="" method = "post">
    <div class="row">
	
	      <div class="col">
<h2 style="text-align:left">Sign in</h2>
<!--form elements-->
        <input type="text" name="username" placeholder="Username/email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit"  name="submitbtn" value="Login">
      </div>
	  <br />
	  <br />
	  
	  <br />
	  <br />
	  	  <br />
	  <br />
	  <br />
	  <br />
	  	  <br />
	  <br />
	  <br />
	  <br />
	  	  <br />
	  <br />
	  <br />
	  
	  <?php 
	  // invalid user name and password
	  if($error){
	  echo '<h2 style="text-align:left; color:red;">Invalid username or password! Try again</h2>';
	  }
	  ?>
	  <!--follow us-->
	  <br />
      <h2 style="text-align:left">Our Social Media Links</h2>
	  
      <div class="col">
        <a href="https://www.facebook.com/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Follow Us On Facebook
         </a>
        <a href="https://twitter.com" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Follow Us On Twitter
        </a>
        <a href="https://plus.google.com/" class="google btn"><i class="fa fa-google fa-fw">
          </i> Follow Us On Google+
        </a>
      </div> 
    </div>
  </form>

      </div>
	</div>
    <div id="tail">
     <p>Copyright &copy; www.cms.com</p>
    </div>
  </div>
  <!--function to show login message-->
  		  <script type="text/javascript">
		function AlertIt() {
		var answer = confirm ("Please Login or signup first! Press OK to continue.")
		if (answer)
		window.location="index.php";
		}
		</script>
</body>
</html>

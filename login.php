<?php
   include("config.php");
   session_start();
   $error = false;
   if (isset($_POST['submitbtn'])) {
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
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
         
         header("location: index.php");
      }else {
         $error = true;
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

<body>
  <div id="body">
    <div id="top">
      <div id="logoTitle">
	  <a href="signup.php" class="button">Sign Up</a>
        <div id="logoText">
          <h1><a href="signup.html">CMS</a></h1>
		  Lorem ipsum dolor sit amet, adipiscing elit.<br>
		  Etiam fermentum, lacus ac sapien.
        </div>
      </div>
      <div id="navbar">
        <ul id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="add_employee.php">Add Employee</a></li>
          <li><a href="delete_employee.php">Delete Employee</a></li>
          <li><a href="statistics.php">Statistics</a></li>
          <li><a href="search.php">Search</a></li>
        </ul>
      </div>
    </div>
    <div id="content" >
      <div class="news">
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>December 1st, 2013</h5>
        <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>December 1st, 2013</h5>
        <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="text">
       <!-- content will goes here-->

  <form action="" method = "post">
    <div class="row">
	
	      <div class="col">
<h2 style="text-align:left">Sign in</h2>

        <input type="text" name="username" placeholder="Username" required>
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
	  if($error){
	  echo '<h2 style="text-align:left; color:red;">Invalid username or password! Try again</h2>';
	  }
	  ?>
	  
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
</body>
</html>

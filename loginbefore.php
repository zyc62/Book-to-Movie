<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset="utf-8">
    <title> Log In </title>
    <link rel = "stylesheet" title = "basic style" type = "text/css" 
      href = "./login.css" media = "all" />
</head>

<body>

	<div class = "container">

		<div class = "header">

			<div class = "logo">
				<a href="./homepage.php"><img src = "./image/logo.png" alt = "logo"></a>
			</div>
            
            <div class ="nav">
            	<ul>
            		<li><a href = "./new.php" >WHAT'S NEW</a></li>
            		<li><a href = "./categories.php" >CATEGORIES</a></li>
            		<li><a href = "./forum.php" >FORUM</a></li>
            	</ul>

            </div>

            <form method = "post" action = "search.php" onsubmit = "return validation();">
            <div class="searchbox" id = "searchbox">
                <input type = "text" name = "searchbox" id = "searchtext">
            </div>

            <div class = "searchicon" onmouseover="showSearchbox();">
                <input type = "submit" name = "search"  value ="">
            </div>
            </form>
            <?php
               session_start();

               if(isset($_SESSION["username"])){
               $username = $_SESSION["username"];

                print<<<USER
                <div class = "username">
                $username
                </div>
                <div class = "logout">
                <form method = "post" action = "./logout.php">
                <input type = "submit" value ="LOGOUT" name = "logout">
                </form>
                </div>
USER;
            }
            if(!isset($_SESSION["username"])){

              print<<<login


                <div class = "login">
                <a href = "./loginbefore.php">LOGIN</a>
                </div>

                <div class = "signup">
                <a href ="./signupbefore.php">SIGN UP</a>
                </div>
login;

            }


            ?>


            
            </div>



		<div class = "formcontainer">
			<div class = "form">
				<div class = "formheader">
					<h3> Log In </h3>
				</div>
				<br>
			
				<form  id = "login" action = "loginafter.php" method = "post">
					<table id = "mytable">
						<tr>
							<td> User Name </td>
							<td><input type = "text" name = "userName" size = "20"></td>
						</tr>

						<tr>
							<td> Password </td>
							<td><input type = "password" name = "password" size = "20"></td>
						</tr>

						<tr>
							<td class = "alnleft"><input type = "submit" name = "login" value = "Log In"></td>
							<td class = "alnright"><input  type = "reset" value = "Clear"></td>
						</tr>
					</table>
				</form>
				<br>
				<p> <a href = "./signupbefore.php"> Create an account </a></p>
			</div>
			
		</div>
	


		




		<div class ="footer">
            
	          <div class = "copyright">
	                <p> © July 8 2018 Books To Movies.com. All rights reserved. </p>
	          </div>


	          <div class = "contact">

	                <p> <a href = "./sources.html">Picture Sources </a> &emsp; &emsp;<a href = "./contactus.php"> Contact Us </a> &emsp; <a href = "mailto:jiaweiwu@utexas.edu"> <u>Jiawei</u></a> &emsp; <a href = "mailto:yicheng_zhang@utexas.edu"> <u>Yicheng</u></a> </p>
	          </div>



         </div>




</div>



<script src = "./search.js"></script>
<script src = "searchvalidation.js"></script>
</body>
</html>

















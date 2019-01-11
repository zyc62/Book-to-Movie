<!DOCTYPE html>
<html lang = "en">

<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<link rel = "stylesheet" title = "basic style" type = "text/css" href = "./contactus.css" media = "all">
     
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
           
             <form method = "post" action = "./search.php" onsubmit = "return validation();">
            <div class="searchbox" id = "searchbox">
                <input type = "text" name = "searchbox" id = "searchtext">
            </div>

            <div class = "searchicon" onmouseover="showSearchbox()">
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

		<div class="intro">

            <p>Jiawei and Yicheng are from the School of Information at the Univeristy of Texas at Austin. Jiawei majors in User Exprience and Yicheng majors in Data Analysis. "Books to Movies" is a webiste for movies and tv shows adapted from books.</p>
        </div>

        <div class = "contactinfo"> 
            <h4>Contact Information</h4>

            <P>Jiawei: jiaweiwu@utexas.edu  512-653-1029</P>
            <P>Yicheng: yicheng_zhang@utexas.edu  512-614-6336</P>

        </div>

			<div class = "advertising">

				<h4> Advertising </h4>
				<p> To inquire about advertising about Books To Movies, please contact <a href = "mailto:jiaweiwu@utexas.edu"> <u>Jiawei Wu</u></a> or <a href = "mailto:yicheng_zhang@utexas.edu"> <u>Yicheng Zhang</u> </a>. </p>
			</div>

			<div class = "feedback">
				<h4> Feedback </h4>
				<p> Tell us about your issue or advice <a href = "mailto:jiawei.joyce@gmail.com"> <u>Submit My Feedback</u> </a>.</p>
			</div>


		

		<div class ="footer">
            
            <div class = "copyright">
                 <p> © July 8 2018 Books To Movies.com. All rights reserved. </p>
            </div>


            <div class = "contact">

             <p> <a href = "./sources.html">Picture Sources </a></p>
             </div>

   		 </div>

    </div>

<script src = "./search.js"></script>
<script src = "./searchvalidation.js"></script>
</body>
</html>

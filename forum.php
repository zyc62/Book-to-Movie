<!DOCTYPE html>

<html lang = "en">
<head>
	<meta charset="utf-8">
    <title> Forum </title>
    <link rel = "stylesheet" title = "basic style" type = "text/css" 
      href = "./forum.css" media = "all" />
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
			
	   	<div class ="post">

	    	<div class ="hotpost1">
                

	    		<button class = "uparrow" onclick="">
	    		&#9650;
	    	    </button>

	    	    <p id = "num1">3.5K</p>
	    	    <button class = "downarrow">
	    		&#9660;
	    	    </button>

	    	    <p class = "postinfo" >Posted by JoyceCookies 5 days ago</p>
	    	    <p class = "posttitle">Which version of the Count of Monte Cristo do you like the most?</p>

                <div class = "commenticon">
	    	        <a href = "blankpage.html"><img class src ="./image/commenticon.jpg"  alt="commenticon"></a>
	    	    </div>

	    	    <div class = "commentnum">
	    	    	<a href = "blankpage.html">2.2K Comments</a>
	    	    </div>

	    	    <div class = "curvedarrow">
	    	        <a href = "blankpage.html"><img src = "./image/curvedarrow.jpg" alt="curvedarrow"></a>
	    	    </div>

	    	    <div class = "share">
	    	    	<a href = "blankpage.html">Share</a>
	    	    </div>


	    	</div>

	    	<div class ="hotpost2">

	    		<button class = "uparrow">
	    		&#9650;
	    	    </button>
	    	    <p id = "num2">3.2K</p>
	    	    <button class = "downarrow">
	    		&#9660;
	    	    </button>

	    	    <p class = "postinfo" >Posted by Anna 10 hours ago</p>
	    	    <p class = "posttitle">What are the best and the worst moives adapted from books?</p>

                <div class = "commenticon">
		    	        <a href = "blankpage.html"><img class src ="./image/commenticon.jpg" alt="commenticon"></a>
		    	    </div>

		    	    <div class = "commentnum">
		    	    	<a href = "blankpage.html">1.9K Comments</a>
		    	    </div>

		    	    <div class = "curvedarrow">
		    	        <a href = "blankpage.html"><img src = "./image/curvedarrow.jpg"  alt="commenticon" ></a>
		    	    </div>

		    	    <div class = "share">
		    	    	<a href = "blankpage.html">Share</a>
		    	    </div>

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
<script src ="./search.js"></script>
<script src ="./searchvalidation.js"></script>
</body>
</html>


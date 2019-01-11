<!DOCTYPE html>
<html lang = "en">

<head>
	<title>What's New</title>
	<meta charset="utf-8">
	<link rel = "stylesheet" title = "basic style" type = "text/css" href = "./new.css" media = "all">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

		
	    <h3>What's New</h3>

			<div id = "b1">

            <img src = "./image/firstman.jpg" alt="firstman">
            <div class = "into">
            <p>
            <b>Introduction:</b> First Man is an upcoming American biographical drama film directed by Damien Chazelle, based on the book First Man: The Life of Neil A. Armstrong by James R. Hansen. It depicts the years leading up to the Apollo 11 mission in 1969.</p>

            <p><b>Cast:</b>Ryan Gosling as Neil Armstrong, alongside Claire Foy, Corey Stoll, Kyle Chandler, Jason Clarke, Shea Whigham, and Christopher Abbott.</p>

            <p><b>To be released:</b> October 12, 2018, by Universal Pictures.</p>
           </div>

			</div>

		

			<div id ="b2">

			<img src = "./image/All-the-Bright-Places-jkt.jpg" alt="all the bright places">

			<div class = "into">
            <p>
             	<b>Introduction:</b> All the Bright Places is a 2015 young adult novel about two young people -- Theodore Finch and Violet Markey. Theodore Finch is fascinated by death and he thinks of ways he might kill himself every day. Violet Markey lives for the future. As Violet’s world grows, Finch’s begins to shrink.</p>
              <p><b>Cast:</b> To be announced. </p>

            <p><b>To be released:</b> 2018/2019.</p>
            </div>
					
			</div>



		    <div id = "b3">
					<img src = "./image/where_d_you_go_bernadette.jpg" alt ="where'd your go">

					<div class = "into">
            <p>
             	<b>Introduction:</b> An American comedy-drama film, directed by Richard Linklater, screenplay by Linklater, Holly Gent, Vincent Palmo Jr., Michael H. Weber and Scott Neustadter. </p>
              <p><b> Cast: </b>Cate Blanchett, Billy Crudup, Emma Nelson, Kristen Wiig, Judy Greer, Laurence Fishburne, Troian Bellisario and James Urbaniak.</p>

              <p><b>To be released:</b> March 22, 2019, by Annapurna Pictures.</p>
        
            </div>
					
				</div>

				<div id ="b4">
				<img src = "./image/the_girl_in_the_spiders_web.jpg" alt="the girl in the spdier web">
  				<div class = "into">
                  <p>
               	<b>Introduction:</b> An crime thriller film directed by Fede Álvarez and written by Steven Knight, Álvarez and Jay Basu.</p>
               	
               	<p><b>Cast:</b>Lisbeth Salander stars Claire Foy; Sverrir Gudnason, LaKeith Stanfield, Sylvia Hoeks, and Stephen Merchant also appear in the film. </p>
               	<p><b>To be released:</b> United States: on November 9, 2018; Sweden: October 26, 2018; by Sony Pictures.</p>
                
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


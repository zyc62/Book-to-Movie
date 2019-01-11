<!DOCTYPE html>
<html lang = "en">

<head>
	<title>Books To Movies</title>
	<meta charset="utf-8">
	<link rel = "stylesheet" title = "basic style" type = "text/css" href = "./homepage.css" media = "all">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body onload = "showSlide();">

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

		<div class = "top">

			<p>A World For Fans of Books and Their Adapted Movies</p>

			<div class = "toprecom">
				<div class ="tleft"></div>
				<div class ="tmiddle1"></div>
				<div class ="tmiddle2"></div>
				<div class ="tright"></div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  			<a class="next" onclick="plusSlides(1)">&#10095;</a>
  			<div class = "dots_position">
				<div class = "dots">
					<span class="dot" onclick="currentSlide(0)"></span>
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
				</div>
			</div>

		</div>

		<div class = "feature">

			<h3>Featured Recommendations</h3>


				<div class ="fleft">
					<a href = "game-of-thrones.html">
					<img src ="./image/gonewiththewind.jpg" alt ="gone with the wind"></a>
					<p id = "title1"> Gone With the Wind</p>
					<p id = "intro1">A romance film adapted from Margaret Mitchell's 1936 novel of the same name. </p>

				</div>

				<div class ="fmiddle">
					<a href = "game-of-thrones.html">
					<img src ="./image/thegodfather.jpg" alt ="godfather"></a>
					<p id = "title2"> The Godfather</p>
					<p id = "intro2">The Godfather is a 1972 American crime film based on the novel of the same name.</p>				
                                </div>

				<div class ="fright">
					<a href = "game-of-thrones.html">
					<img src ="./image/schindlerslist.jpg" alt="schindlerslist"></a>
					<p id = "title3"> Schindler’s List </p>
					<p id = "intro3">A  1993 American historical period drama film based on the novel Schindler's Ark by Thomas Keneally.</p>
					
					
				</div>

           
		</div>

	<div class = "hotpostandtopuser">

		<div class = "hotpost">
			<h3>Hot Post</h3>
			
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

		</div>



		<div class = "topuser">

			    <h3>Top Users</h3>
			
			    <div id = "username">
			    <p><a href="blankpage.html">Banama Likes(2345)</a></p>
			    <p><a href="blankpage.html">Crystal Likes(2300)</a></p>
			    <p><a href="blankpage.html">Anna Likes(1500)</a></p>
			    <p><a href="blankpage.html">Josh Likes(1345)</a></p>
			    <p><a href="blankpage.html">Ben Likes(987)</a></p>
			    <p><a href="blankpage.html">Jennifer Likes(980)</a></p>
		        </div>

		       

		    	 <p class = "viewall"> <a   href="blankpage.html">View All</a></p>

		        
		</div>

	</div>



		<div class = "categories">
			 <h3> Categories</h3>
                        <div class = "tvshows">

                       
                        <h4> TV Shows</h4>

                        

                        <div class="tv">
                        <img id ="img1-11" class="tile1" src = "./tv/first_man_movie.jpg"  alt = "first_man_movie" >
                         <img id ="img1-12" class="tile1" src = "./tv/sherlock.jpg" alt = "sherlock">
                         <img id ="img1-13" class="tile1" src = "./tv/Handmaids_Tale.jpg" alt = "handmaid's tale">
                         <img id ="img1-14" class="tile1" src = "./tv/outlander.jpg" alt = "outlander" >
                        </div>

                        <div class="tv">

                        <img id ="img1-21" class="tile1" src = "./tv/biglittlelie.jpg" alt ="big little lie">
                        <img id ="img1-22" class="tile1" src = "./tv/gossip-girl.jpg" alt = "gossip girl">
                        <img id ="img1-23" class="tile1" src = "./tv/poldark.jpg" alt = "poldark">
                        <img id ="img1-24" class="tile1" src = "./tv/riverdale.png" alt = "riverdale">
                   
                        </div>

                        </div>
                        <a id = "prev1" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next1" class="next" onclick="plusSlide(event)">&#10095;</a>

                        <div class = "thriller">

                        <h4>Thrillers</h4>

                        <div class="th">
                        <img id ="img2-11" class="tile2" src = "./thriller/angels_and_demons.jpg"  alt = "angels_and_demons" >
                        <img id ="img2-12" class="tile2" src = "./thriller/davinci.jpg" alt = "davinci">
                        <img id ="img2-13" class="tile2" src = "./thriller/the-firm.jpg" alt = "the firm">
                        <img id ="img2-14"  class="tile2" src = "./thriller/ATimetoKillPoster.jpg" alt = "a time to kill" >
                        </div>

                        <div class="th">
                        <img id ="img2-21" class="tile2" src = "./thriller/fiercekingdom.jpg" alt ="fierce kingdom">
                        <img id ="img2-22" class="tile2" src = "./thriller/train.jpg" alt = "the gir on the train">
                        <img id ="img2-33" class="tile2" src = "./thriller/Orphan-X.jpg" alt = "orphan x">
                        <img id ="img2-44" class="tile2" src = "./thriller/behindclosedoors.jpg" alt = "behind closed doors">
                        </div>
                    
                        </div>

                        <a id = "prev2" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next2" class="next" onclick="plusSlide(event)">&#10095;</a>

                        <a  id = "exploremore" href = "./categories.php">Explore More</a>

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
<script src = "homepage.js"></script>
<script src = "homepage_categories.js"></script>
<script src = "search.js"></script>
<script src = "searchvalidation.js"></script>
</body>
</html>


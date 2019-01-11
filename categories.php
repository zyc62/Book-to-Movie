<!DOCTYPE html>
<html lang = "en">

<head>
	<title>Categories</title>
	<meta charset="utf-8">
	<link rel = "stylesheet" title = "basic style" type = "text/css" href = "./categories.css" media = "all">
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
                  		<li><a href = "new.php" >WHAT'S NEW</a></li>
                  		<li><a href = "categories.php" >CATEGORIES</a></li>
                  		<li><a href = "forum.php" >FORUM</a></li>
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
            <div class = "categories">
			 <h3> Categories</h3>
                   <div class = "categories_content">
                        <div class = "tvshows">
   
                        <h4> TV Shows</h4>

                              <div class="tv">
                               <a class = "catg"><img id ="img1-11" class="tile1" src = "./tv/first_man_movie.jpg"  alt = "game-of-thrones" ></a>
                                <a class = "catg" href = "detail.php?id=sherlock"><img id ="img1-12" class="tile1" src = "./tv/sherlock.jpg" alt = "sherlock"></a>
                                <a class = "catg"><img id ="img1-13" class="tile1" src = "./tv/Handmaids_Tale.jpg" alt = "handmaid's tale"></a>
                                <a class = "catg"><img id ="img1-14" class="tile1" src = "./tv/outlander.jpg" alt = "outlander" ></a>
                              </div>

                              <div class="tv">

                               <a class = "catg"><img id ="img1-21" class="tile1" src = "./tv/biglittlelie.jpg" alt ="big little lie"></a>
                               <a class = "catg"><img id ="img1-22" class="tile1" src = "./tv/gossip-girl.jpg" alt = "gossip girl"></a>
                               <a class = "catg"><img id ="img1-23" class="tile1" src = "./tv/poldark.jpg" alt = "poldark"></a>
                               <a class = "catg"><img id ="img1-24" class="tile1" src = "./tv/riverdale.png" alt = "riverdale"></a>
                         
                              </div>

                        </div>
                        <a id = "prev1" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next1" class="next" onclick="plusSlide(event)">&#10095;</a>

                        <div class = "thriller">

                              <h4>Thrillers</h4>

                              <div class="th">
                              <a class = "catg"> <img id ="img2-11" class="tile2" src = "./thriller/angels_and_demons.jpg"  alt = "angels_and_demons" ></a>
                              <a class = "catg"> <img id ="img2-12" class="tile2" src = "./thriller/davinci.jpg" alt = "davinci"></a>
                              <a class = "catg"> <img id ="img2-13" class="tile2" src = "./thriller/the-firm.jpg" alt = "the firm"></a>
                              <a class = "catg"> <img id ="img2-14"  class="tile2" src = "./thriller/ATimetoKillPoster.jpg" alt = "a time to kill" ></a>
                              </div>

                              <div class="th">
                               <a class = "catg"><img id ="img2-21" class="tile2" src = "./thriller/fiercekingdom.jpg" alt ="fierce kingdom"></a>
                               <a class = "catg"><img id ="img2-22" class="tile2" src = "./thriller/train.jpg" alt = "the gir on the train"></a>
                               <a class = "catg"><img id ="img2-33" class="tile2" src = "./thriller/Orphan-X.jpg" alt = "orphan x"></a>
                               <a class = "catg"><img id ="img2-44" class="tile2" src = "./thriller/behindclosedoors.jpg" alt = "behind closed doors"></a>
                              </div>
                    
                        </div>

                        <a id = "prev2" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next2" class="next" onclick="plusSlide(event)">&#10095;</a>
                        
                        <div class = "romance">

                              <h4>Romantic Films</h4>

                              <div class="ro">
                               <a class = "catg"><img id ="img3-11" class="tile3" src = "./romantic/anna-karenina.jpg"  alt = "anna-karenina" ></a>
                               <a class = "catg"><img id ="img3-12" class="tile3" src = "./romantic/brooklyn.jpg" alt = "brooklyn"></a>
                               <a class = "catg"><img id ="img3-13" class="tile3" src = "./romantic/atonement.jpg" alt = "atonement"></a>
                               <a class = "catg"><img id ="img3-14"  class="tile3" src = "./romantic/gone-with-the-wind.jpg" alt = "gone-with-the-wind" ></a>
                               </div>

                              <div class="ro">
                               <a class = "catg"><img id ="img3-21" class="tile3" src = "./romantic/one-day.jpg" alt ="one-day"></a>
                               <a class = "catg"><img id ="img3-22" class="tile3" src = "./romantic/pride-prejudice.jpg" alt = "pride-prejudice"></a>
                               <a class = "catg"><img id ="img3-33" class="tile3" src = "./romantic/the-english-patient.jpg" alt = "the-english-patient"></a>
                               <a class = "catg"><img id ="img3-44" class="tile3" src = "./romantic/the-time-travelers-wife.jpg" alt = "the-time-travelers-wife"></a>
                              </div>
                    
                        </div>

                        <a id = "prev3" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next3" class="next" onclick="plusSlide(event)">&#10095;</a>



                        <div class = "sifi">

                              <h4>Science Fiction Films</h4>

                              <div class="si">
                              <a class = "catg"><img id ="img4-11" class="tile4" src = "./sifi/a-wrinkle-in-time.jpeg"  alt = "a-wrinkle-in-time" ></a>
                              <a class = "catg"><img id ="img4-12" class="tile4" src = "./sifi/annihilation.png" alt = "annihilation"></a>
                              <a class = "catg"><img id ="img4-13" class="tile4" src = "./sifi/arrival.jpg" alt = "arrival"></a>
                              <a class = "catg"><img id ="img4-14" class="tile4" src = "./sifi/readyplayerone.jpg" alt = "readyplayerone" ></a>
                               </div>

                              <div class="si">
                               <a class = "catg"><img id ="img4-21" class="tile4" src = "./sifi/bladerunner.jpg" alt ="bladerunner"></a>
                               <a class = "catg"><img id ="img4-22" class="tile4" src = "./sifi/the-martian.jpg" alt = "the-martian"></a>
                               <a class = "catg"><img id ="img4-33" class="tile4" src = "./sifi/the-hunger-games.jpg" alt = "the-hunger-games"></a>
                               <a class = "catg"><img id ="img4-44" class="tile4" src = "./sifi/cloud-atlas.jpg" alt = "cloud-atlas"></a>
                              </div>
                    
                        </div>

                        <a id = "prev4" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next4" class="next" onclick="plusSlide(event)">&#10095;</a>


                        <div class = "history">

                              <h4>Historical Films</h4>

                              <div class="his">
                              <a class = "catg"><img id ="img5-11" class="tile5" src = "./history/DevilsArithmetic.jpg"  alt = "DevilsArithmetic"></a>
                              <a class = "catg"><img id ="img5-12" class="tile5" src = "./history/godfather.jpg" alt = "godfather"></a>
                              <a class = "catg"><img id ="img5-13" class="tile5" src = "./history/master.jpg" alt = "master and commander"></a>
                              <a class = "catg"><img id ="img5-14" class="tile5" src = "./history/king-arthur.jpg" alt = "king-arthur" ></a>
                               </div>

                              <div class="his">
                               <a class = "catg"><img id ="img5-21" class="tile5" src = "./history/Out-of-Africa.jpg" alt ="Out-of-Africa"></a>
                               <a class = "catg"><img id ="img5-22" class="tile5" src = "./history/schindler_s_list.jpg" alt = "schindler_s_list"></a>
                               <a class = "catg"><img id ="img5-33" class="tile5" src = "./history/Spartacus.jpg" alt = "Spartacus"></a>
                               <a class = "catg"><img id ="img5-44" class="tile5" src = "./history/The-Heart-is-a-Lonely-Hunter.jpg" alt = "The-Heart-is-a-Lonely-Hunter"></a>
                              </div>
                    
                        </div>

                        <a id = "prev5" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next5" class="next" onclick="plusSlide(event)">&#10095;</a>


                         <div class = "action">

                              <h4>Action-Adventure Films</h4>

                              <div class="act">
                              <a class = "catg"><img id ="img6-11" class="tile6" src = "./action/divergent.jpg"  alt = "divergent"></a>
                              <a class = "catg"><img id ="img6-12" class="tile6" src = "./action/hunger-games.jpg" alt = "hunger-games"></a>
                              <a class = "catg"><img id ="img6-13" class="tile6" src = "./action/lord-of-the-rings.jpg" alt = "lord-of-the-rings"></a>
                              <a class = "catg"><img id ="img6-14" class="tile6" src = "./action/Pirates-of-the-Caribbean-Tides-of-War-Artwork.jpg" alt = "Pirates-of-the-Caribbean-Tides-of-War-Artwork" ></a>
                               </div>

                              <div class="act">
                               <a class = "catg"><img id ="img6-21" class="tile6" src = "./action/Shutter-Island.jpg" alt ="Shutter-Island"></a>
                               <a class = "catg"><img id ="img6-22" class="tile6" src = "./action/The-hobbit.jpg" alt = "The-hobbit"></a>
                               <a class = "catg"><img id ="img6-33" class="tile6" src = "./action/the-lost-world.jpg" alt = "Sthe-lost-world"></a>
                               <a class = "catg"><img id ="img6-44" class="tile6" src = "./action/the-maze-runner.jpg" alt = "the-maze-runner"></a>
                              </div>
                    
                        </div>

                        <a id = "prev6" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next6" class="next" onclick="plusSlide(event)">&#10095;</a>


                        <div class = "anime">

                              <h4>Anime</h4>

                              <div class="an">
                              <a class = "catg"><img id ="img7-11" class="tile7" src = "./anime/Attack-on-Titan.jpg"  alt = "Attack-on-Titan"></a>
                              <a class = "catg"><img id ="img7-12" class="tile7" src = "./anime/brave_story.jpg" alt = "brave_story"></a>
                              <a class = "catg"><img id ="img7-13" class="tile7" src = "./anime/Howl's-Moving-Castle.jpg" alt = "Howl's Moving Castle"></a>
                              <a class = "catg"><img id ="img7-14" class="tile7" src = "./anime/kiki.jpg" alt = "kiki" ></a>
                               </div>

                              <div class="an">
                               <a class = "catg"><img id ="img7-21" class="tile7" src = "./anime/MeitanteiConan.jpg" alt ="MeitanteiConan"></a>
                               <a class = "catg"><img id ="img7-22" class="tile7" src = "./anime/Romeo-x-Juliet.jpg" alt = "Romeo x Juliet"></a>
                               <a class = "catg"><img id ="img7-33" class="tile7" src = "./anime/ShinSekaiYori.jpeg" alt = "ShinSekaiYori"></a>
                               <a class = "catg"><img id ="img7-44" class="tile7" src = "./anime/the-eccentric-family.jpeg" alt = "the-eccentric-family"></a>
                              </div>
                    
                        </div>

                        <a id = "prev7" class="prev" onclick="plusSlide(event)">&#10094;</a>
                        <a id = "next7" class="next" onclick="plusSlide(event)">&#10095;</a>




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
<script src ="./categories.js"></script>
<script src ="./search.js"></script>
<script src ="./searchvalidation.js"></script>

</body>
</html>


<!DOCTYPE html>
<html lang = "en">


<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>Game of Thrones</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" title = "basic style" type = "text/css" href = "./detail.css" media = "all">
</head>

<body>

<div class = "container">

                <div class = "header">

                        <div class = "logo">
                                <a href="./homepage.php"><img src = "./image/logo.png" alt = "logo"></a>
                        </div>

                        <div class ="nav">
                        <ul>
                        <li><a href = "./new.php">WHAT'S NEW</a></li>
                        <li><a href = "./categories.php">CATEGORIES</a></li>
                        <li><a href = "./forum.php">FORUM</a></li>
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
           <div class = "book">
            <?php
     $host = 'summer-2018.cs.utexas.edu';
     $user = 'jiawei15';
     $pwd = 'apple2Strata9Melon';
     $dbs = "cs329e_jiawei15";
     $port = "3306";
     $connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

     if (empty($connect))
     {
       die("mysqli_connect failed: " . mysqli_connect_error());
     }

     //print "Connected to ". mysqli_get_host_info($connect) . "<br /><br />\n";

     $moviename = $_GET["id"];
     $table = 'movieinfo';
     $sql = "SELECT image,video,introduction,book_link from $table WHERE name = \"$moviename\"";
     if(mysqli_query($connect,$sql)){
     $array=mysqli_query($connect, $sql);
     while($row=mysqli_fetch_array($array))
     {

      echo "<img src = '".$row[0]."' height = '300' width ='195' alt = '".$row[0]."'>";
      echo "<p class = 'book_introduction'>".$row[2]."</p>";
      echo "<div class = 'buy'><a href = '".$row[3]."' target='_blank'> Buy on Amazon</a></div>";
      echo "</div>";
      echo "<div class = 'movie_trailer'>";
      echo "<iframe width = '560' height='300' src = '".$row[1]."' allowfullscreen></iframe>";

     }
     }else {
          echo "Error: " . $sql . "<br>" . mysqli_error($connect);
     }






?>
          </div>
    </div>

<div class = "middle">
      <div class = "hotpost">
            <h3>Hot Post</h3>

            <div class ="post">

                <div class ="hotpost1">


                          <button class = "uparrow" onclick="">
                          &#9650;
                          </button>

                          <p id = "num1">4.7K</p>
                          <button class = "downarrow">
                          &#9660;
                          </button>

                    <p class = "postinfo" >Posted by LoveSeirin 5 hours ago</p>
                    <p class = "posttitle">Which character do you like the most in The Game of Thrones?</p>

                  <div class = "commenticon">
                      <a href = "blankpage.html"><img class src ="./image/commenticon.jpg"  alt="commenticon"></a>
                  </div>

                  <div class = "commentnum">
                    <a href = "blankpage.html">1.2K Comments</a>
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
                <p id = "num2">5.2K</p>
                <button class = "downarrow">
                  &#9660;
                </button>

                <p class = "postinfo" >Posted by IKnowEverything 10 hours ago</p>
                <p class = "posttitle">Which are the main characters will survive at the end of GOT?</p>

                <div class = "commenticon">
                    <a href = "blankpage.html"><img class src ="./image/commenticon.jpg" alt="commenticon"></a>
                </div>

                <div class = "commentnum">
                  <a href = "blankpage.html">2.9K Comments</a>
                </div>

                <div class = "curvedarrow">
                    <a href = "blankpage.html"><img src = "./image/curvedarrow.jpg"  alt="commenticon" ></a>
                </div>

                <div class = "share">
                  <a href = "blankpage.html">Share</a>
                </div>

            </div>

      </div>

      <div class = "review_board">

          <h3>Reviews</h3>

        <div class = "reviews">

         <div class = "leave_review">
            <form method = "post" action="<?php echo $_SERVER['PHP_SELF'].'?'.http_build_query($_GET);?>">
              <input type = "text" name = "reviews" placeholder= "Leave a review here.....">
              <input type = "submit" value = "Comment" name ="submit">
            </form>
          </div>

          <?php
         
          session_start();
          if(isset($_POST["submit"]) && !isset($_SESSION["username"])){
          
          print "<script>";
          print "alert(\"Please login frist.\");";        
          print "</script>";

          }        
         
          $moviename = $_GET["id"];
          $username = $_SESSION["username"];
          $reviews = $_POST["reviews"];
          
          $host = 'summer-2018.cs.utexas.edu';
          $user = 'jiawei15';
          $pwd = 'apple2Strata9Melon';
          $dbs = "cs329e_jiawei15";
          $port = "3306";


          $connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);
          $reviews = mysqli_real_escape_string($connect, $reviews);
          $moviename = mysqli_real_escape_string($connect, $moviename);
          $username = mysqli_real_escape_string($connect, $username);
          
          
          if(isset($_POST["submit"]) && isset($_SESSION["username"])){
          $table = "reviews";
          if($reviews ==""){
 
          print "<script>";
          print "alert(\"Comment can't be empty.\");";
          print "</script>";

          }
         
          if($reviews!=""){

          if (empty($connect))
          {
             die("mysqli_connect failed: " . mysqli_connect_error());
          }
          

          $sql = "INSERT INTO $table VALUES('$username','$reviews','$moviename',null)";
          if (mysqli_query($connect, $sql)) {
                echo "<div class ='commentreminder'>New record created successfully.</div>";
          }
          else {
                 echo "Error: " . $sql. "<br>" . mysqli_error($connect);
          }
          }
          }

          $sql_1 = "select username, comments from reviews where moviename = \"$moviename\"";
          if (mysqli_query($connect, $sql_1)){
              print "<div class = \"review\">";
              print "<ul>";  
              $array = mysqli_query($connect, $sql_1);
              while($row = mysqli_fetch_array($array)){
              print "<li>"."<span>".$row[0]." : "."</span>".$row[1]."</li><br>";
 
             }
             print "</ul>";
             print "</div>";
          }
          else{
            echo "Error: ".$sql_1."<br>".mysqli_error($connect);
            }

          
            
         
           mysqli_close($connect);
          ?>
       
     
        </div>

 </div> 
</div>

    <div class = "related">
      <h3> Related Recommendation</h3>
      <img src = "./bookcover/sherlock.jpg" alt = "sherlock" width = "256" height = "144"><br><br>
      <img src = "./bookcover/Handmaids_Tale.jpg" alt = "handmaid's tale"  width = "256" height = "144">
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
<script src="./search.js"></script>
<script src="./searchvalidation.js"></script>
</body>
</html>


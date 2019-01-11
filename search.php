<!DOCTYPE html>
<html lang = "en">

<head>
        <title>Books To Movies</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" title = "basic style" type = "text/css" href = "./homepage.css" media = "all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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

               if(isset($_session["username"])){
               $username = $_session["username"];

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
            if(!isset($_session["username"])){

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

        <div class = "searchresult">


<?php
$search = $_POST["searchbox"];
$search = trim($search);

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


$table = "movieinfo";


$result = mysqli_query($connect, "SELECT * from $table WHERE name LIKE \"%$search%\" or name = \"$search\"");

$rownum = mysqli_num_rows($result);
if($rownum == 0 || $search == " "|| $search ==""){
print "<p>No result found.</p>";
}

else{
while ($row = $result->fetch_row())
{
print "<div class = 'resultlist'>";
print "<a href = 'detail.php?id="."$row[0]"."'>";
print "<img src =\"".$row[5]."\"alt =\"".$row[0]."\">";
print "<div class ='caption'>".strtoupper($row[0])."</div>";
print "</a>";
print "</div>";

}
}

$result->free();
mysqli_close($connect);

?>

</div>
<div class ="footer">

                  <div class = "copyright">
                        <p> © July 8 2018 Books To Movies.com. All rights reserved. </p>
                  </div>


                  <div class = "contact">

                        <p> <a href = "./sources.html">Picture Sources </a> &emsp; &emsp;<a href = "./contactus.html"> Contact Us </a> &emsp; <a href = "mailto:jiaweiwu@utexas.edu"> <u>Jiawei</u></a> &emsp; <a href = "mailto:yicheng_zhang@utexas.edu"> <u>Yicheng</u></a> </p>
                  </div>



             </div>

        </div>

<script src = "search.js"></script>
<script src = "searchvalidation.js"></script>
</body>
</html>


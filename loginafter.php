<?php
$script = $_SERVER["PHP_SELF"];


$username = $_POST["userName"];
$password = $_POST["password"];

$host = 'summer-2018.cs.utexas.edu';
$user = 'zyc62';
$pwd = 'frozen$Acre4Other';
$dbs = "cs329e_zyc62";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

if (empty($connect))
{
die("mysqli_connect failed: " . mysqli_connect_error());
}


$username = mysqli_real_escape_string($connect, $username);
$password = mysqli_real_escape_string($connect, $password);

$table = "userinfo";

$flag = false;
$result = mysqli_query($connect,"SELECT username,password from $table");
while ($row = $result->fetch_row())
{

if($username == $row[0] && $password == $row[1]){
session_start();
$_SESSION["username"]=$username;

header("Location: homepage.php");
break;
}else{
  $flag = true;

}
}
$result->free();
if($flag==true){

echo "<script>window.alert('Invalid username or password.');</script>";
header( "refresh:0; url=login.php" );

}





?>

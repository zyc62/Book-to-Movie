<?php

$username = $_POST["username"];

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

$username = mysqli_real_escape_string($connect, $username);
$table = "userinfo";

$result = mysqli_query($connect,"SELECT username from $table");
while ($row = $result->fetch_row())
{

if($username == $row[0]){
  $response = "taken";

}else{
  $response = "untaken";
}
}
echo $response;

?>

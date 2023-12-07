
<?php


$host = "localhost";
$User = "root";
$pass =  "";
$db = "reservation";


//$con =mysqli_connect($host, $User, $pass, $db);

$conn = new mysqli($host, $User, $pass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

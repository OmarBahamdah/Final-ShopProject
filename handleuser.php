<?php
include 'DB-CONFIG.php';

$title = $_POST["title"];
$fname = $_POST["fname"];
$comments = $_POST["comments"];

$con= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if(mysqli_connect_errno()){
    die("Error while connecting");
}
$query = "INSERT INTO dbuser (title,fname,comments)VALUES('$title','$fname','$comments')";
mysqli_query($con, $query);

mysqli_close($con);

header("location:index.php");
exit();
?>

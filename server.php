<?php
$userid=$_POST['uid'];
$password=$_POST['pass'];


$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";

session_start();
// In the login page.

// Do the login stuff..

$conn=new mysqli($host,$dbUsername,$dbPassword, $dbname) or die("unable to connect");
$sql="SELECT quota FROM signup_info WHERE uid='all'";
     $result=mysqli_query($conn,$sql);
    $r = mysqli_fetch_array($result);
    echo $r['quota'];
?>






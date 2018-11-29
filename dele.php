<?php
$del=$_POST['del'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
$conn=new mysqli($host,$dbUsername,$dbPassword, $dbname);
$sql="DELETE FROM comp_tab WHERE userid='$del'";
$res=mysqli_query($conn,$sql);
header('location:complain2.php');
?>
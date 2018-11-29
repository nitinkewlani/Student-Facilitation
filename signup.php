<?php

$uid=$_POST['uid'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$password=sha1($_POST['password']);
$email=$_POST['email'];
$quota=$_POST['quota'];
$ut=$_POST['ut'];
$pphone=$_POST['pphone'];
$pname=$_POST['pname'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
    
if($conn=new mysqli($host,$dbUsername,$dbPassword, $dbname))
{
    echo "<script>alert('user reday to login')</script>";
    if(!empty($uid) ||!empty($username) ||!empty($phone)||!empty($dob)||!empty($password) ||!empty($email) ||!empty($quota)||!empty($type)||!empty($pphone)||!empty($pname))
    {
        $stmt=$conn->prepare("INSERT INTO signup_info (uid,username,phone,dob,password,email,quota,ut,pphone,pname) VALUES (?,?,?,?,?,?,?,?,?,?)");
        if($stmt)
        {
            $stmt->bind_param("ssssssssss",$uid,$username,$phone,$dob,$password,$email,$quota,$ut,$pphone,$pname);
            $stmt->execute();
            echo "<script> alert('record entered successfully')</script>";
            $stmt->close();
            $conn->close();  
    }
    else
    {
        echo "<script> alert('User Info already exists!')</script>";
    }
}
}
else
{
    echo "all fields are required";
    die();
}
header("location:hms2.php");
?>
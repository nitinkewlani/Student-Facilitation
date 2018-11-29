<?php
include('login.php');
$uid=$_SESSION['userid'];
$complain=$_POST['complain'];
$subject=$_POST['subject'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
if($conn=new mysqli( $host,$dbUsername,$dbPassword, $dbname))
{
    echo "<script>alert('Your complain has been submitted!')</script>";
    if(!empty($uid) ||!empty($complain)||!empty($subject))
    {
       //$sql="SELECT userid FROM signup_info WHERE 
        $stmt=$conn->prepare("INSERT INTO comp_tab (userid,ctype,description) values (?,?,?)");
        if($stmt)
        {
            $stmt->bind_param("sss",$uid,$complain,$subject);
            $stmt->execute();
            echo "<script> alert('We will get back to you soon!')</script>";
            $stmt->close();
            $conn->close();
        }
      }
    }
else
{
    echo "<script> alert('all fields are required')</script>";
}
 header("location:complain.php");
?>
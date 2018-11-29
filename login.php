<?php

session_start();

if(isset($_POST['login']))
{
$userid=$_POST['uid'];
$password=sha1($_POST['pass']);
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
if($conn=new mysqli($host,$dbUsername,$dbPassword, $dbname))
{
 $check = mysqli_query($conn, "SELECT * FROM signup_info where uid = '$userid' and password='$password' ");
 if(mysqli_num_rows($check) == 1)
 { 
     //$p=mysqli_fetch_array($check);
    // $sql="SELECT quota FROM signup_info WHERE uid='$userid'";
     //$result=mysqli_query($conn,$sql);
     $r = mysqli_fetch_array($check); 
   $_SESSION['userid']=$userid;
   $_SESSION['quota']=$r['quota']; $_SESSION['username']=$r['username'];
  
//THE FOLLOWING FUNCTION CAN ALSO BE USED FOR COMPARISON BUT FIRSTLY WE NEED TO FETCH QUOTA AND STORE IT INTO $r using mysqli_fetch_array//
     
//    if(strcmp($r['quota'],'na') == 0)       
//    {
//        header('location:homeaftersignup2.php');
//    }
//     else
//     {
//         header('location:homeaftersignup.php');
//     }
     
     if($r['quota']=='na')       
     {
        header('location:homeaftersignup2.php');
     }
     else
     {
         header('location:homeaftersignup.php');
     }
 }
else
{
    echo "<script>alert('Wrong Credentials!')</script>";
    header('location:hms2.php');
}
}
else
{
  echo "<script>alert('connection failed')</script>";  
}
}
?>
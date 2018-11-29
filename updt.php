<?php 
include('login.php');
$pwd=sha1($_POST['pwd']);
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$sec=$_POST['sec'];
$roomno=$_POST['roomno'];
$phone=$_POST['phone'];
$pphone=$_POST['pphone'];
$lgphone=$_POST['lgphone'];
$lgname=$_POST['lgname'];
$lgaddr=$_POST['lgaddr'];
$paddr=$_POST['paddr'];
$uid=$_SESSION['userid'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
$conn=new mysqli($host,$dbUsername,$dbPassword, $dbname);
if($conn)
{
    $sql="UPDATE signup_info set password='$pwd',sem='$sem',dept='$dept',sec='$sec',roomno='$roomno',phone='$phone',pphone='$pphone',lgphone='$lgphone',lgname='$lgname',lgaddr='$lgaddr',paddr='$lgaddr' WHERE uid='$uid' ";
    $new=mysqli_query($conn,$sql);   
    if($new)
    {
        if($_SESSION['quota']=='na')
        {
    
        header('location:profile2.php');
        } 
        else
        {
            header('location:profile.php');
        }
    }
}
?>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cont=$_POST['cont'];
$subject=$_POST['subject'];

    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="newhms";
     
    if($conn=new mysqli( $host,$dbUsername,$dbPassword, $dbname))
    {
        echo "<script>alert('thanks for contacting')</script>";
    
if(!empty($fname) ||!empty($lname)||!empty($cont)||!empty($subject))
{
        $stmt=$conn->prepare("INSERT INTO contact_info (fname,lname,cont,subject) values (?,?,?,?)");
    if($stmt)
    {
        $stmt->bind_param("ssss",$fname,$lname,$cont,$subject);
        $stmt->execute();
        echo "<script> alert('meet you soon')</script>";
         $stmt->close();
         $conn->close();  
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
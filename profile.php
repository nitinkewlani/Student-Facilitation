<?php 
include('login.php'); 
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
$conn=new mysqli($host,$dbUsername,$dbPassword, $dbname);
if($conn)
{
    $user = $_SESSION['userid'];
    $query = "SELECT * FROM signup_info where uid = '$user'";
    $check = mysqli_query($conn, $query);
    $arr = mysqli_fetch_array($check);
}
?>
<!Doctype html>
<html>
    <head>
        <title>HMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <style>
        </style>
    </head>
    <body>
   

    
    <!-- NAVBAR-->      
        <div>
<div class="w3-deep-orange w3-bar w3-card-4 navb">
            <a href="homeaftersignup.php" class=" w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange "><i class="fa fa-home"></i></a> 
            <a href="homeaftersignup.php" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange">About</a> 
            <a href="homeaftersignup.php" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange ">Contact</a> 
            <a href="complain.php" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange " >ComplainBox</a>
     <a href="profile.php" class="w3-large w3-bar-item w3-btn w3-hover-text-orange w3-hover-text-orange w3-teal ">Profile</a>
            
<!-- NAVBAR LOGOUT-->
<a  href="hms2.php" class="w3-large w3-bar-item w3-right w3-btn w3-green"><i class="fa fa-user-circle"></i>LogOut</a>        
</div>  
            </div>
        
          <!--PROFILE-->
      <div class="w3-container w3-padding-large " >
                <h2>Enter your complete details here:</h2>
                <div class="container" style="background-image: url('formbg.png');font-weight: 150;" >
                    
 <div style="text-align:center">
     <p style="font-variant: small-caps"></p>
</div>
                    <div class="row">
                        <div class="column">
                            <form action="signup.php" method="post">
        
        <label for="fname">UserId</label>
        <input class="tt not-allowed" value="<?php echo $arr['uid']; ?>" type="text" id="uid"  name="uid" disabled>
          
        <label for="fname">UserName</label>
        <input class="tt not-allowed " value="<?php echo $arr['username']; ?>" type="text" id="username" name="username" placeholder="Enter User ID.." disabled>
  
         <label for="country">User Type</label>
         <input class="tt not-allowed " value="<?php echo $arr['ut']; ?>" type="text" id="ut" name="ut" placeholder="User Type.." disabled>
       
        <label for="fname">D.O.B</label>
        <input class="tt not-allowed " type="text"  value="<?php echo $arr['dob']; ?>" id="dob" value="" name="dob" placeholder="Enter your D.O.B.." disabled>
          
         <label for="quota">Quota</label>
         <input class="tt not-allowed " value="<?php echo $arr['quota']; ?>" type="text" id="quota" name="quota" placeholder="Enter Quota.." disabled>
      
        <label for="fname">Parent Name</label>
        <input class="tt not-allowed" type="text" id="pname" name="pname" value="<?php echo $arr['pname']; ?>" placeholder="Enter your Parent Name.." disabled>
          
        </form>
    </div>
      <div class="column">
      <img class="w3-circle w3-hover-sepia w3-hover-normal" src="av1.png" style="width:100%;height:470px">
    </div>
  </div>
                    
</div>     
  </div>   
        
        
        <div class="w3-container w3-padding-large " >
                <h2>Enter Additional Information:</h2>
                <div class="container" style="background-image: url('formbg.png');font-weight: 150;" >
                    
  <div style="text-align:center">
    <p style="font-variant: small-caps"></p>
  </div>
  <div class="row">
    
    <div class="column">
      <form action="updt.php" method="post">
        
        <label for="fname">Password</label>
        <input class="tt" type="password" id="pwd" name="pwd" placeholder="Enter your password..">
        
        <label for="fname">Semester</label>
        <input class="tt" type="text" id="sem" value="<?php echo $arr['sem']; ?>" name="sem" placeholder="Enter your sem..">
        
        <label for="fname">Department</label>
        <input class="tt" type="text" id="dept" name="dept" value="<?php echo $arr['dept']; ?>" placeholder="Enter your department..">
    
        <label for="fname">Section</label>
        <input class="tt" type="text" id="sec" name="sec"  value="<?php echo $arr['sec']; ?>" placeholder="Enter your section..">
        
        <label for="fname">Room No.</label>
        <input class="tt" type="text" id="roomno" value="<?php echo $arr['roomno']; ?>" name="roomno"  placeholder="Enter your room no.">
        
        <label for="fname">Phone</label>
        <input class="tt" type="number" id="phone"  name="phone" value="<?php echo $arr['phone']; ?>" placeholder="Enter your phone number.." >
        
        <label for="fname">Parent Phone</label>
        <input class="tt" type="number" id="pphone" value="<?php echo $arr['pphone']; ?>" name="pphone" placeholder="Enter your Parent Phone Number..">
        
        <label for="fname">Parent Address</label>
        <input class="tt" type="text" id="paddr" value="<?php echo $arr['paddr']; ?>" name="paddr" placeholder="Enter Parent's address ..">
        
        <label for="fname">Local Guardian Name</label>
        <input class="tt" type="text" id="lgname" value="<?php echo $arr['lgname']; ?>" name="lgname" placeholder="Enter your Local Guardian Name..">
        
        <label for="fname">Local Guardian Phone</label>
        <input class="tt" type="number" id="lgphone" name="lgphone" value="<?php echo $arr['lgphone']; ?>" placeholder="Enter your Local Guardian Name..">
          
        <label for="fname">Local Guardian Address</label>
        <input class="tt" type="text" id="lgaddr" value="<?php echo $arr['lgaddr']; ?>" name="lgaddr" placeholder="Enter your Local Guardian Address..">
          
        <input class="sb w3-button w3-hover-teal w3-deep-orange" type="submit" value="Submit" onclick="window.location.href='homeaftersignup.php';">
      </form>
    </div>
      <div class="column">
    </div>
  </div>
</div>     
  </div> 
    </body>
</html>
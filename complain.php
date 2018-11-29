<!doctype html>
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
            <a href="homeaftersignup.php#about" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange">About</a> 
            <a href="homeaftersignup.php#contact" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange ">Contact</a> 
            <a href="complain.php" class="w3-large w3-bar-item w3-btn w3-hover-text-orange w3-hover-text-orange w3-teal " >ComplainBox</a>
     <a href="profile.php" class=" w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange">Profile</a>        
<!-- NAVBAR LOGOUT-->
<a  href="hms2.php#home" class="w3-large w3-bar-item w3-right w3-btn w3-green"><i class="fa fa-user-circle"></i>LogOut</a>        
</div>  
    </div>
        <!--COMPLAIN FORM-->
      <div class="w3-container  w3-padding-large ">
                <h2>Enter your complain here:</h2>
                <div class="container frb">
  <div style="text-align:center">
    <p style="font-variant: small-caps">Any incovenience caused can be solved through this platform</p>
  </div>
  <div class="row">
    <div class="column">
      <form action="comp.php" method="post">
        <label> </label>
         
        <label for="country">Complain Type</label>
        <select class="tt" id="complain" name="complain" required>
          <option value="electricity">Electricity</option>
            <option value="plumbing">Plumbing</option>
          <option value="carpentry">Carpentry</option>
          <option value="mess">Mess</option>
            <option value="personal">Personal</option>
        </select>
        <label for="description">Description</label>
        <textarea class="tt" id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <input class="sb w3-teal w3-hover-deep-orange" type="submit" value="Submit">
      </form>
    </div>
      <div class="column">
      <img src="compimg.png" style="width:100%;height:470px">
    </div>
  </div>             
</div>     
  </div>   
    </body>
</html>
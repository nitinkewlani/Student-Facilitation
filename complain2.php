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
            
            form label {
                display: inline-block;
                width: 100px;
                font-weight: bold;
            }
        
        </style>
    </head>
    <body>
    <!-- NAVBAR-->      
        <div>
<div class="w3-deep-orange w3-bar w3-card-4 navb">
            <a href="homeaftersignup2.php" class=" w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange "><i class="fa fa-home"></i></a> 
            <a href="homeaftersignup2.php#about" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange">About</a> 
            <a href="homeaftersignup2.php#contact" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange ">Contact</a> 
            <a href="complain2.php" class="w3-large w3-bar-item w3-btn w3-hover-text-orange w3-hover-text-orange w3-teal " >ComplainBox</a>
     <a href="profile2.php" class=" w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange">Profile</a>        
<!-- NAVBAR LOGOUT-->
<a  href="hms2.php" class="w3-large w3-bar-item w3-right w3-btn w3-green"><i class="fa fa-user-circle"></i>LogOut</a>        
</div>  
    </div>
        <!--COMPLAIN FORM-->
<div class="w3-container">
                <h2>Complains to be Solved:</h2>
    <div class="w3-container" >
        <form action="dele.php" method="post">
            <label> </label>
            <input type="text" name="del" placeholder="Enter value to be deleted">
            <input type="submit" class="w3-btn w3-hover-light-red w3-red" value="Delete">
        </form>
    </div>
          
        
<?php    
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="newhms";
$conn=new mysqli($host,$dbUsername,$dbPassword, $dbname);
$sql="SELECT * FROM comp_tab";
$result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)
          {
              echo "<table class='w3-table-all w3-hoverable '><tr><th>S.No.</th><th>UserId</th><th>ComplainType</th><th>Description</th></tr>";
              while($row=mysqli_fetch_array($result))
              {
                  echo "<tr><td>".$row['id']."</td><td>".$row['userid']."</td><td>".$row['ctype']."</td><td>".$row['description']."</td></tr>";
              }
              echo "</table>";          
          }
          else
          {
              echo "<h1>NO PENDING COMPLAINS!</h1>";
          }
          ?>

          
          
  </div>   
    </body>
</html>
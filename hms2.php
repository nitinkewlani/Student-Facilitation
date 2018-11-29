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
        <div   class="w3-container w3-text-deep-orange" style="height:100px;">
              <h1 id="headd" class="w3-lato w3-xxxlarge  w3-section">STUDENT &nbsp;&nbsp;FACILITATION &nbsp;<i class="fa fa-hotel"></i></h1>
        </div>
<!-- NAVBAR-->        
<div class="w3-deep-orange w3-bar w3-card-4 navb">
            <a href="hms2.php#headd" class=" w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange "><i class="fa fa-home"></i></a> 
            <a href="#about" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange">About</a> 
            <a href="#contact" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange ">Contact</a> 
            <a href="#complain" title="Once you Login you can access!" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange ">ComplainBox</a>
             <a href="#profile" title="Once you Login you can access!" class="w3-large w3-bar-item w3-button w3-hover-teal w3-hover-text-orange ">Profile</a>
<!-- NAVBAR LOGIN-->
<button onclick="document.getElementById('id01').style.display='block'" class="w3-large w3-  bar-item w3-right w3-btn w3-green"><i class="fa fa-user-circle"></i>LogIn</button>
            
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-text-black w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="av1.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="login.php"  method="post">
        <div class="w3-section">
            
        <label><b>UserId</b></label>
          <input class="w3-input w3-border-bottom w3-border-teal w3-margin-bottom" type="text" placeholder="Enter UserId" name="uid" required autofocus>
          
        <label><b>Password</b></label>
          <input class="w3-input w3-border-bottom w3-border-teal" type="password" placeholder="Enter Password" name="pass" required>
        
        <button name="login" class="w3-btn  w3-section w3-block  w3-right w3-deep-orange w3-hover-teal w3-ripple" type="submit">Login</button>
        
        <p class="w3-text-black"> <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> RememberMe</p>
        
          </div>
        </form>
      
        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>
    </div>
  </div>
    
<!--NAVBAR SIGNUP PAGE1-->        
<button onclick="document.getElementById('id02').style.display='block'" class="w3-large w3-bar-item w3-right w3-btn w3-black">
    <i class="fa fa-user-plus"></i>SignUp</button>
    <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-text-black w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
           </div>
<form target="_self" action="signup.php" method="POST" class="w3-container   w3-text-deep-orange w3-margin">
    <h2 class="w3-center w3-text-teal"><b>SIGN UP</b></h2><hr>
   
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border-bottom w3-border-teal" name="uid" type="text" placeholder="Enter your ID" >
    </div>
</div>
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border-bottom w3-border-teal" name="username" type="text" placeholder="Full Name" >
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border-bottom w3-border-teal" name="phone" type="number" placeholder="Phone"  required>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border-bottom w3-border-teal" name="dob" type="date"  required> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border-bottom w3-border-teal" name="password" type="password" placeholder="Password"  required>
    </div>
    </div>
<div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border-bottom w3-border-teal" name="email" type="email" placeholder="Email"  required>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-circle"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border-bottom w3-border-teal"  name="pname" type="text" placeholder="Parent Name"  required>
    </div>
</div>
    
<div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border-bottom w3-border-teal"  name="pphone" type="number" placeholder="Parent Phone Number"  required>
    </div>
</div>
<div>
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <select class="tt w3-border-bottom w3-border-teal" id="ut" name="ut">
          <option value="wb">Warden-Boys</option>
          <option value="wg">Warden-Girls</option>
          <option value="sb">Student-Boys</option>
          <option value="sg">Student-Girls</option>
        </select>
    </div>
</div>
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <select class="tt w3-border-bottom w3-border-teal" id="quota" name="quota">
          <option value="na" name="na">NotApplicable</option>
          <option value="cet" name="cet">CET</option>
            <option value="mgmt" name="mgmt">Management</option>
          <option value="pio" name="pio">PIO</option>
          <option value="nri" name="nri">NRI</option>
            <option value="comedk" name="comedk">COMEDK</option>
        </select>
    </div>
</div>

<input type="submit"  value="Submit" class="w3-btn   w3-section  w3-right w3-teal w3-hover-deep-orange w3-ripple" >
    </div>
    </div>
        </form>
        </div>
    </div>
        </div> 
        <br/>
        
        

<!--Carousel-->        
        <div class="w3-content w3-display-container " style="max-width:1300px;">
            <img class="mySlides" src="car2.jpg" style="width:100% ; height:500px">
            <img class="mySlides" src="car1.jpg"   style="width:100%; height:500px">
  <img class="mySlides" src="car3.jpg" style="width:100%; height:500px">
  <div class="w3-center w3-xxlarge w3-container  w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-deep-orange" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-deep-orange" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge  demo w3-border w3-transparent w3-hover-orange" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-orange" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-orange" onclick="currentDiv(3)"></span>
  </div>
</div>
        <!--About-->  
        <div id="about" class="w3-container w3-padding-large" style="font-family:cursive">
            <h2 >About</h2><hr>
            <p>The hostel life in BMSIT&M offers many fun filled activities. An annual fest "Kalarava" is a colorful event filled with cultural and sports activities. From singing, dancing, fashion show to cricket, football, badminton, table tennis, chess, volleyball and fun filled activities like tug of war, dumb charades and many more, Kalarava has it all. These events are presided over by the Principal, faculty members and wardens.<br> There are several sports tournaments in hostel like HPL for cricket and FPL for football. All these events and activities are for the merriment and relaxation of the students residing in hostels. To ensure they are in their comfort zone. All the festivals like Ganesh Chaturthi, Diwali, Holi and many more are celebrated by the hostel inmates with a lot of enthusiasm as one would, back at home. The environment provided ensures such an innervation..<br>
 We provide systematic dining facilities in the hostel. There are separate dining halls for international and Indian students. The dining halls are hygienic with vegetarian and non-vegetarian food served separately by the mess staff. The kitchen is well-equipped with convenient cookware in the control of skilled cooks.

The menu of the hostel food is prepared by the student committee in hostel meetings.
            </p>   
        </div>
        <!--Staff Details-->
        <div class="w3-container w3-padding-large">
        <h2>Staff</h2>
        </div>
          <hr>
        <div class="w3-container w3-deep-orange w3-padding-large">
            <div class="w3-row-padding" style="padding:10px 50px">
                <div class="w3-quarter flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="av1.png" alt="Avatar"
                                 style="width:100%;height:300px;">
                        </div>
                        <div style="font-variant: small-caps"class="flip-card-back w3-teal">
                            <h1>Mrs PQR</h1> 
                            <p>Chief Warden</p> 
                            <p>Girls Hostel</p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="av2.png" alt="Avatar"
                                 style="width:100%;height:300px;">
                        </div>
                        <div style="font-variant: small-caps" class="flip-card-back w3-teal">
                            <h1>Mr ABC</h1> 
                            <p>Warden</p> 
                            <p>Girls Hostel</p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="av3.jpg" alt="Avatar"
                                 style="width:100%;height:300px;">
                        </div>
                        <div style="font-variant: small-caps" class="flip-card-back w3-teal">
                            <h1>Mr XYZ</h1> 
                            <p>Cheif Warden</p> 
                            <p>Boys Hostel</p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="av4.png" alt="Avatar"
                                 style="width:100%;height:300px;">
                        </div>
                        <div style="font-variant: small-caps" class="flip-card-back w3-teal">
                            <h1>Mrs abc</h1> 
                            <p>Warden</p> 
                            <p>Boys Hostel</p>
                        </div>
                    </div>
                </div>
            </div></div>
            
            <div class="w3-container w3-padding-large ">
                <h2 id="contact">Contact Us</h2>
                <div class="container frb">
  <div style="text-align:center" >
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="contactimg.jpg" style="width:100%;height:470px;">
    </div>
    <div class="column">
      <form action="contact.php" method="post" action="_self">
        <label for="fname">First Name</label>
        <input class="tt" type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input class="tt" type="text" id="lname" name="lname" placeholder="Your last name..">
          <label for="contact">Contact</label>
        <input class="tt" type="number" id="cont" name="cont" placeholder="Enter your phone no.">
        <label for="subject">Subject</label>
        <textarea class="tt" id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input class="sb" target="_self"  type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>     
  </div>
            
        <div class="w3-topbar">
              <div  id="googleMap" style="width:100%;height:400px;">
        </div>
        </div>        
<div class="w3-center w3-black w3-padding-32" >
 BMSIT&M, Doddaballapur Main Road, Avalahalli, Yelahanka, Bengaluru 64 | 080-28561576 | principal@bmsit.in
</div>
<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTndBcAAEmzO_SzgaLxOs9-CRp8-2dsLk&callback=myMap"></script>     
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function currentDiv(n) {
  showDivs(slideIndex = n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>           
    </body>   
</html>
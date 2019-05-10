<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <title>Sign up|3DUCAT</title>
    <head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
<style>
body {
     background:url(richard-bagan-364052-unsplash.jpg);
    background-size: 1500px 1100px;
    background-repeat: no-repeat;
    
    
    
    font-family: Arial, Helvetica, sans-serif;
    color:white;
    }
* {box-sizing: border-box}


input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;

}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.box{
        position: absolute;
        top:20%;
        left:10%;
        transform: translate(.50%,.50%);
        width:400px;
        
        padding: 40px;
        background: rgba(0,0,0,0.8);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
        border-radius: 10px;
        
    }      

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #33ccff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #33ccff;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn
    {
       width: 100%;
    }
}
</style>
    <link rel="stylesheet" type="text/css" href="ppt.css">
<body >
    <table style="text-align:left;">
        <tr><th><i class=""></i><h2 style="color:white;font-size: 50px;text-align:left;margin-left: 60px;"><span style="color:#3e8e41;">3D</span>UCAT</h2></th></tr></table>
    <div id="myNav" class="overlay">
            
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   
        <a href="edu.html">Home</a>
      <a href="About.html">About</a>
     <a href="Biology.html">Biology</a>
    <a href="Electrical.html">Electrical</a>
  </div>
</div>

             <span style="font-size:30px;cursor:pointer;margin-left: 70px;" onclick="openNav()">&#9776;Menu</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
    
    
    
    
    
    
<form class="box" style="margin-left: 22.5%;">
<form method="post" action="sign.php" style="border:1px solid #ccc">
    <?php include('errors.php');?>
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
      
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter name" name="name" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <a href="loginedu.html"><button type="button" class="cancelbtn">Login</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
      </div>
  </div>
</form>
    </form>
</body>
</html>

<?php
    $username="";
    $email="";
    $errors=array();

    $db = mysqli_connect('localhost','root','','new');
    if(isset($_POST['sign'])){
    $username=mysql_real_escape_string($_POST['name']);
    $email=mysql_real_escape_string($_POST['email']);
    $psw=mysql_real_escape_string($_POST['psw']);
    $psw-repeat=mysql_real_escape_string($_POST['psw-repeat']);
    
    if($psw!=$psw-repeat)
    {
        array_push($errors,"Password do not match");
    }
    
    if(count($errors)==0)
    {
        $password =md5($psw);
        $sql="INSERT INTO users(Username,E-mail,Password) VALUES('$username','$email','$psw')";
        
        mysqli_query($db ,$sql);
    }
    
}


?>
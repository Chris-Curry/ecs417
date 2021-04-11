<?php 

require("conn.php");
session_start();

function function_alert($message) {
      
    echo "<script>alert('$message');</script>";
}
  

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST ['password'];
    $query = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password'";
    echo $query;
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0){
        echo("Login Successful");
        header("location:blog.html");
        $_SESSION["loggedin"] = "true";
    }
    else{
        
        header("location:login.html");
        function_alert("Login failed, try again.");
    }
}

?>
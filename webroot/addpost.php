<?php
require("conn.php");
session_start();

if (isset($_POST['submit'])){
    $title = $_POST['blogTitle'];
    $text = $_POST['blogText'];
    $date = date("d-m-y");

    $sql = "INSERT INTO BLOGS (title, text, time)
    VALUES ('$title', '$text', '$date')";
    mysqli_query($conn,$sql);

    echo("Blog posted Successful");
    header("location:viewblog.html");
}
else{
    echo("Blog post failed");
    header("location:blog.html");
}

?>
<?php
require("conn.php");
session_start();

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");

if (isset($_POST['submit'])){
    $title = $_POST['blogTitle'];
    $text = $_POST['blogText'];
    $date = date("d-m-y");

    $sql = "INSERT INTO BLOGS (title, text, time)
    VALUES ('$title', '$text', '$date')";
    mysqli_query($conn,$sql);

    echo($sql);
    echo("Blog posted Successful");
    header("location:viewblog.php");
}
else{
    echo("Blog post failed");
    header("location:blog.html");
}


?>
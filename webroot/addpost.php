<?php
require("conn.php");
session_start();

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['blogTitle'];
    $text = $_POST['blogText'];
    $date = date("l jS \of F Y h:i:s A");

    $sql = "INSERT INTO BLOGS (title, text, time)
    VALUES ('$title', '$text', '$date')";
    mysqli_query($conn,$sql);

    echo($sql);
    header("location:viewblog.php");
    echo("Blog posted Successful");
}
else{
    echo("Blog post failed");
    header("location:blog.html");
}


?>
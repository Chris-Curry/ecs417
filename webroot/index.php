<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/scripts.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Portfolio | Home</title>
</head>

<nav>
    <ul>
        <li><a href="index.html" class="class1">Home</a></li>
        <li><a href="about.html" class="class1">About Me</a></li>
        <li><a href="experience.html" class="class1">Experience</a></li>
        <li><a href="skills.html" class="class1">Skills</a></li>
        <li><a href="education.html" class="class1">Education</a></li>
        <li><a href="blog.html" class="class1">Blog</a></li>
    </ul>
</nav>

<body class="home">
    <div id="container">

        <img id="bg" src="site-background.jpg" height="99.99%" width="99.99%">

        <div class="midtext">
            <h1 class="blocktexthome">Chris Curry</h1>

        <?php
            if (isset($_SESSION['loggedin'])){
                echo('<a href="logout.php"> Logout</a>');
            }
            else{
                echo('<a href = "login.php"> Login</a>');
            }            
        ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2021 Chris Curry.
            <script type="text/javascript">
                var currentTime = new Date();
                document.write(currentTime);
            </script>
        </p>
    </footer>
</body>


</html>

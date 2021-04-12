<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/scripts.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Portfolio | Blog</title>
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

        <!-- BLOG POSTS HERE -->
        <?php 
        require("conn.php");
        session_start();

        $dbhost = getenv("MYSQL_SERVICE_HOST");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME"); 
        
        $sql = 'SELECT * from BLOGS';

        $title[] = array();
        $text[] = array();
        $time[] = time();
        $id[] = array();

        if ($result = mysqli_query($conn,$sql)){

            while($row = mysqli_fetch_array($result)){
            function cmp($id, $b)
            {
                if ($id == $b) {
                    return 0;
                }
                return ($id < $b) ? -1 : 1;
            }
                usort($id, "cmp");
            echo $row['title'] . '<br>' . $row['text'] .'<br>'. $row['time'] . '<br>' . '<br>' . '<br>';
            }

            
        }   

        ?>

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
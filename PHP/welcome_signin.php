<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$userName=$_SESSION['User'];
$sql = "SELECT name, plan FROM myDB WHERE email = '$userName'";
$result= $conn->query($sql);
$row = $result->fetch_assoc();
setcookie('Name', $row['name'], time()+(86400*30));
setcookie('Plan', $row['plan'], time()+(86400*30));

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Welcome</title>
        <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="welcome_signin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="header">
        <a href=HomePage.php><img src="static/images/project logo_.png" alt="PowerHouse logo" id="logo"></a>
            <ul>
        <a href="login.php"><li>Sign In</li></a>
        <a href=register.php><li>Join</li></a>
        <a href="plans.php"><li>Plans</li> </a>
        <a href="courses_page.php"><li>Courses</li></a>
        <a href="HomePage.php"><li>Home</li></a>
    </ul>
        </div>
        <div id="main">
            <h1>WELCOME <?php echo $_COOKIE['Name']."!";
            ?></h1>
            <div id=x2><span id=plan>Your plan is:
            <?php echo $_COOKIE['Plan'];
            ?>
            </span></div>
            <br> <br><br>
            <div id=x1><button class=button><a href="HomePage.php" id=home>Home</a></button></div>
            <br> <br><br>
            </div>
        </div>
    
    <br>
<br>
<div id="footer">
    <br><br>
    <h4>Address</h4>
    <h6> <span id="address">Abdoun, 5th Circle, Al-Farabi St., Building 29, Floor 3</span>
    </h6>
    <h4>Contact us</h4>
    <h6 id="phone">
        Phone: 0612345678
    </h6>
    <h6>Email: <a href="mailto:support@powerhouse.com">support@powerhouse.com</a></h6>
    <div id="socials">
        <a href="" class="fa-brands fa-facebook"></a>
        <a href="" class="fa-brands fa-instagram"></a>
        <a href="" class="fa-brands fa-twitter"></a>
    </div>
</div>
</body>
</html>

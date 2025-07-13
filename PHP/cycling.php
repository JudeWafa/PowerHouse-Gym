<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="static/CSS/cycling.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycling</title>
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
        <h1>CYCLING</h1>
        <h4 id="instructor">WITH LIAM PASCAL</h4>
        <h5 id="learn-more">About Liam Pascal</h5>
        <div id="about-coach-div">
    
            <img id="liam" src="static/images/liam cycling.jpeg"><h3 id="coachinfo">
            Liam Pascal, the indoor cyclist extraordinaire, is a dynamic force in the world of fitness. With an unwavering passion for cycling, Liam has become a sought-after instructor, inspiring countless individuals to push their limits and achieve their fitness goals. His charismatic energy and expert guidance make each class an exhilarating experience.</h3></div>
        <p>Join our cycling course at Powerhouse and take your fitness to the next level! Led by Liam Pascal, 
            our classes offer hill climbs, sprints, 
            and endurance rides that will help you burn calories, 
            build strength, and improve your cardiovascular health. 
            Our state-of-the-art cycling studio is equipped with cutting-edge 
            technology to track your progress and push you to new heights. 
            Whether you're a seasoned cyclist or just starting out, our classes 
            are tailored to all levels of experience and ability. 
            Don't miss out on the chance to challenge yourself and achieve your
            fitness goals.
        </p>
         <div id="x"><a href="register.php"><input type="button" value="JOIN NOW"></a></div>
    </div>

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
<script>
   $(document).ready(function(){
    $("#learn-more").mouseover(function(){
        $("#about-coach-div").fadeIn("fast");
    });
    $("#learn-more").mouseout(function(){
        $("#about-coach-div").fadeOut("slow");
    });
   });
</script>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="static/CSS/pilates.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilates</title>
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
    <h1>PILATES</h1>
    <h4 id="instructor">WITH LILY BUTTON</h4>
    <h5 id="learn-more">About Liam Pascal</h5>
        <div id="about-coach-div">
    
            <img id="lily" src="static/images/lilybutton.png"><h3 id="coachinfo">
                Lily Button, an experienced Pilates coach, combines expertise and enthusiasm to deliver invigorating and transformative sessions. With a focus on proper form and alignment, Lily empowers clients to enhance strength, flexibility, and overall well-being. Her warm and supportive approach fosters a positive environment, making each session a rewarding experience. Join Lily Button for a journey towards improved physical fitness and inner harmony through the power of Pilates.</h3></div>
    <p>Welcome to our Pilates course! Pilates is a unique exercise method that focuses on developing strength, flexibility, and control of the body. This course is designed to provide you with a challenging and effective workout that will improve your overall physical fitness and well-being. Whether you are a beginner or an experienced practitioner, our Pilates course will help you achieve your fitness goals and enhance your mind-body connection. Our certified Pilates instructors will guide you through a series of exercises that target the core muscles of the body, including the abs, back, and hips, to build strength and improve posture. We offer a variety of classes, including mat Pilates and equipment-based Pilates, to cater to all levels of experience and fitness goals. Join us today and discover the many benefits of Pilates for your body and mind.</p>
    <br>
    <div id="x"><a href="register.php"><input type="button" value="JOIN NOW"></a></div>
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
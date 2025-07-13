<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="static/CSS/kickboxing.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kickboxing</title>
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
    <h1>KICKBOXING</h1>
    <h4 id="instructor">WITH MOHAMMAD ALI</h4>
    <h5 id="learn-more">About Mohammed Ali</h5>
    <div id="about-coach-div">
        
        <img id="mohammed-ali" src="static/images/mohammed-ali.jpg"><h3 id="coachinfo">
            Mohammed Ali, the talented and resilient kickboxer, bears the same name as the legendary heavyweight champion but boasts his own unique style and skill set. With lightning-fast footwork and precision strikes, Mohammed delivers electrifying performances in the ring. Despite not being the real Mohammed Ali, he has carved out his own path, captivating audiences with his sheer determination and unwavering dedication to his craft. Prepare to witness a boxing prodigy redefine the sport as you experience the raw power of Mohammed Ali.</h3></div>
    <p>Looking to take your fitness and fighting skills to the next level? Join our kickboxing course today! Our experienced instructors will guide you through a challenging and rewarding workout, focusing on technique, endurance, and strength training. Whether you're a beginner or an experienced fighter, our classes are designed to cater to all skill levels. With a supportive and motivating community, you'll be pushed to reach your goals and achieve your best performance. Don't wait, sign up now and unleash your inner warrior!</p>
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
        <a href="" class="fa-brands fa-facebook" target="_blank"></a>
        <a href="" class="fa-brands fa-instagram" target="_blank"></a>
        <a href="" class="fa-brands fa-twitter" target="_blank"></a>
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
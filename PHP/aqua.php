<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="static/CSS/aqua.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua</title>
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
    <h1>AQUA</h1>
    <h4 id="instructor">WITH AHMAD ALI</h4>
    <h5 id="learn-more">About Ahmad Ali</h5>
        <div id="about-coach-div">
    
            <img id="ahmad-ali" src="static/images/ahmad-ali.jpg"><h3 id="coachinfo">
                Meet Ahmad Ali, the dynamic aquatics coach who dives into the world of swimming with unmatched passion and expertise. With a profound understanding of water dynamics and a keen eye for technique, Ahmad empowers his students to unlock their full potential in the pool. Through personalized guidance and a supportive approach, he cultivates a nurturing environment where swimmers of all levels can flourish.</h3></div>
    <p>Are you looking for a fun and effective way to stay fit and healthy? Look no further than our aqua course! Our course combines the low-impact, joint-friendly benefits of water exercise with a variety of movements and routines designed to target all major muscle groups. Whether you're a seasoned athlete or new to fitness, our experienced instructors will guide you through a challenging yet enjoyable workout that will leave you feeling refreshed and energized. Plus, the unique properties of water provide natural resistance, helping you build strength and endurance without putting excess strain on your body. So why wait? Join us for our aqua course today and experience the benefits for yourself! </p>

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
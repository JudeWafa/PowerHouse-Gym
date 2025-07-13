<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="static/CSS/login.css">
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
            <h1>WELCOME BACK!</h1>
            <div id="form">
                <form action="singin.php" method="post">
                    <br>
                    <label for=user>Username: </label>
                    <input type=text name=user id=user>
                     
                    <br>
                   
                    <label for=pass>Password: </label>
                    <input type=password name=password id=pass>

                    <br><br><br>
                    <div class=x>
                        <button type=submit class=button>Sign in</button>
                    <button type=reset class=button>Reset</button>
                   
                    </div>
                    <br>
            </form>
           
            </div>
            <br><br><br>
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
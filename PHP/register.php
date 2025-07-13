<!DOCTYPE html>
<html>
    <head>
        <title>Join</title>
        <script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="static/CSS/register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>>
    <body>
        <div id="header">
        <a href=HomePage.php><img src="static/images/project logo_.png" alt="PowerHouse logo" id="logo"></a>
        <ul class=other>
            <a href="login.php"><li>Sign In</li></a>
             <a href=register.php><li>Join</li></a>
        <a href="plans.php"><li>Plans</li> </a>
        <a href="courses_page.php"><li>Courses</li></a>
        <a href="HomePage.php"><li>Home</li></a>
        </ul>
            <ul class="desktop">
                <a href="login.php"><li>Sign In</li></a>
                <a href="register.php"><li>Join</li></a>
                <a href="plans.php"><li>Plans</li></a>
                <a href=courses_page.php><li>Courses</li></a>
                <a href="HomePage.php"><li>Home</li> </a>
            </ul>
        </div>
        <div id="main">
            <h1>JOIN US</h1>
            <div id="form">
                <form action="welcome.php" method="post" onsubmit="return validate()">
                    <label for="fName">Full Name: </label>
                    <input type="text" name="fName" id="fName" pattern="[a-zA-Z ]+" title="Only letters and spaces permitted">
                    <br>
                    <label for="gender">Gender: </label>
                    <select name="gender" id="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                    <br class="break">
                    <label for="dob">Date of Birth: </label>
                    <input type="date" name="dob" id="dob" >
                    <hr>
                    <label for="email"  class="top">Email: </label>
                    <input type="email" id="email" name="email" class="top">
                    <br class="break">
                    <label for="phoneNum"  class="top">Phone Number: </label>
                    <input type="tel" id="number" name="phone"  class="top">
                    <br>
                    <label for="pass">Password:</label>
                    <input type="password" name="password" id="pass" pattern="^[a-zA-Z0-9!@#$%^&*]{8,16}$" title="Use letters, symbols and numbers. Minimum length of 8 up to 16.">
                    <hr>
                    <label for="city" class="top">City: </label>
                    <input type="text" id="city" name="city" class="top" >
                    <br class="break">
                    <label for="street" class="top">Street Name: </label>
                    <input type="text" id="street" class="top">
                    <br>
                    <label for="more">More Info: </label>
                    <textarea id="more" name="more"></textarea>
                    <hr>
                    <label for="plan"  class="top">Plan: </label>
                    <select id="plan" name="plan"  class="top">
                        <option value="monthly">Monthly Membership</option>
                        <option value="annual">Annual Membership</option>
                        <option value="payVisit">Pay Per Visit</option>
                        <option value="family">Family</option>
                        <option value="personalTraining">Personal Training Package</option>
                        <option value="offPeak">Off-Peak</option>
                    </select>
                    <br>
                    <p>Courses: </p>
                    <input type="checkbox" name="courses[]" id="cycling" class="courses">
                    <label for="cycling" class="courses">Cycling</label>
                    <br>
                    <input type="checkbox" name="courses[]" id="kickboxing" class="courses">
                    <label for="kickboxing" class="courses">Kickboxing</label>
                    <br>
                    <input type="checkbox" name="courses[]" id="pilates" class="courses">
                    <label for="pilates" class="courses">Pilates</label>
                    <br>
                    <input type="checkbox" name="courses[]" id="aqua" class="courses">
                    <label for="aqua" class="courses">Aqua</label>
                    <br>
                    <br><br>
                    <label for="courseTime">Preferred Course Time: </label>
                    <select id="courseTime" name="courseTime">
                        <option value="morning">Mornings</option>
                        <option value="afternoon">Afternoons</option>
                        <option value="evening">Evenings</option>
                    </select>
                    <br>
                    <div id="buttons">
                        <input type="submit" id="submit">
                        <input type="reset" id="reset">
                    </div>
            </form>
            <div id="message"></div>
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

<script src="js/scripts.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function validate () {

        var sub;
        var check = $("#fName");
        if(check.val()==null || check.val()=="") {
            var message = "Full Name field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }

        check = $("#dob");
        if(check.val()==null || check.val()=="") {
            var message = "Date of Birth field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }

        check = $("#email");
        if(check.val()==null || check.val()=="") {
            var message = "Email field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }

        check = $("#number");
        if(check.val()==null || check.val()=="") {
            var message = "Phone Number field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }

        check = $("#pass");
        if(check.val()==null || check.val()=="") {
            var message = "Password field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }

        check = $("#city");
        if(check.val()==null || check.val()=="") {
            var message = "City field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }
        
        check = $("#street");
        if(check.val()==null || check.val()=="") {
            var message = "Street Name field is empty!<br>";
            $("#message").append(message);
            check.addClass("error");
            sub = false;
        }
        return sub;
    };

    $("#reset").click(function() {
        var check = $("#fName");
        check.removeClass("error");
        check = $("#dob");
        check.removeClass("error");
        check = $("#email");
        check.removeClass("error");
        check = $("#number");
        check.removeClass("error");
        check = $("#pass");
        check.removeClass("error");
        check = $("#city");
        check.removeClass("error");
        check = $("#street");
        check.removeClass("error");

        $("#message").html("");
    })

</script>
</body>
</html>
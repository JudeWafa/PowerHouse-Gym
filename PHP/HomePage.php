<!DOCTYPE html>
<html>
<head>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/dec0c27bbb.js" crossorigin="anonymous"></script>
<link rel=stylesheet href="static/CSS/HomePage.css">
<title>PowerHouse Gym</title>
<!--<script src="HomePage.js"></script>-->
<script>
    window.addEventListener("scroll", function () {
        var header = document.getElementById("header");
        if (window.scrollY > 0) {
          header.classList.add("scrolled");
        } else {
          header.classList.remove("scrolled");
        }
      });
</script>
</head>
<body>
<div id=bg>
<div id="header">
    <a href=HomaPage.php><img src="logo.png" alt="PowerHouse logo" id="logo1" ></a>
    <ul>
        <a href="login.php"><li>Sign In</li></a>
        <a href=register.php><li>Join</li></a>
        <a href="plans.php"><li>Plans</li> </a>
        <a href="courses_page.php"><li>Courses</li></a>
        <a href="HomePage.php"><li>Home</li></a>
    </ul>
</div>

<h1>UNLEASH YOUR <br>POWER</h1>
<br>
<br><br><br><br><br><br><br><br>
<div id=center><img src="static/images/logo2.png" alt="PowerHouse logo" id="logo2"></div>
<div id="motto">We Take <span id=colorText1>Action</span>. We Choose <span id=colorText2>Power</span>.</div>
<br>
<br>
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
<script>
    window.addEventListener("DOMContentLoaded", function() {
  var textElement1 = document.getElementById("colorText1");
  var textElement2 = document.getElementById("colorText2");
  const duration = 3000; 

  // Calculate the time interval for each color transition
  const interval = duration ;

  
  function changeColor() {
   // textElement.style.color = colors[currentColorIndex];
    //currentColorIndex = (currentColorIndex + 1) % colors.length;
    textElement1.classList.toggle("changeColor");
    textElement2.classList.toggle("changeColor");
    //setTimeout(changeColor, 4000); // Change color every 1 second
  }
  
  setInterval(changeColor, interval);
});

  </script>

</body>
</html>
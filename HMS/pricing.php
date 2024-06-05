<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images/sinhgad_logo.jpg" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>
      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header">A block</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="images/1.png" alt="">
    </div>

    <li class="grey">1Lakh/ year</li>
    <li>2 seaters rooms are available</li>
    <li>24/7 Wifi</li>
    <li>Central AC block</li>
    <li>Best Mess food available</li>
    <li>GYM</li>
    <li>Indoor games</li>
    <li>Swimming pool</li>
    <li>Reading room </li>
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">B block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/2.png" alt="">
</div>

<li class="grey">85 Thousand/ year</li>
<li>3 Seater rooms are available</li>
<li>24/7 Wifi </li>
<li>AC block</li>
<li>Best Mess food available</li>
<li>Common reading room</li>
<li>Indoor games</li>
<li>GYM</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">G block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/3.png" alt="">
</div>

<li class="grey">70 Thousand/ year</li>
<li>3 seater rooms are available</li>
<li>24/7 Wifi</li>
<li>Non Ac block</li>
<li>Gym</li>
<li>Common reading hall</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">Q block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/4.png" alt="">
</div>

<li class="grey">1.5 Lakh/year</li>
<li>2 seater rooms are available</li>
<li>24/7 Wifi</li>
<li> Ac block</li>
<li>Gym</li>
<li>Common reading hall</li>
<li>Swimming pool</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>




      </div>
    </div>

  </body>
</html>

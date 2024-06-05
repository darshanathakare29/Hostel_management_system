
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="..\css\mhreg.css">
	<style>
	body {
   width: 100vw;
   background-color: #D2DBDD;
   margin: 0;
   font-family: helvetica;
}

.wrapper {
   width: 100vw;
   margin: 0 auto;
   height: 400px;
   background-color: #161616;
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
   transition: all 0.3s ease;
}

@media screen and (max-width: 767px) {
   .wrapper {
      height: 700px;
   }
}

.content {
   max-width: 1024px;
   display:grid;
     grid-template-columns: auto auto auto auto;
   width: 100%;
   padding: 0 4%;
   padding-top: 250px;
   margin: 0 auto;
   display: flex;
   justify-content: center;
   align-items: center;
}

@media screen and (max-width: 767px) {
   .content {
      padding-top: 300px;
      flex-direction: column;
   }
}

.card {
   width: 100%;
   max-width: 300px;
   min-width: 200px;
   height: 250px;
   background-color: #292929;
   margin: 10px;
   border-radius: 10px;
   box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
   border: 2px solid rgba(7, 7, 7, 0.12);
   font-size: 16px;
   transition: all 0.3s ease;
   position: relative;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   cursor: pointer;
   transition: all 0.3s ease;
}

.icon {
   margin: 0 auto;
   width: 100%;
   height: 80px;
   max-width:80px;
   background: linear-gradient(90deg, #FF7E7E 0%, #FF4848 40%, rgba(0, 0, 0, 0.28) 60%);
   border-radius: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   color: white;
   transition: all 0.8s ease;
   background-position: 0px;
   background-size: 200px;
}

.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }

.card .title {
   width: 100%;
   margin: 0;
   text-align: center;
   margin-top: 30px;
   color: white;
   font-weight: 600;
   text-transform: uppercase;
   letter-spacing: 4px;
}

.card .text {
   width: 80%;
   margin: 0 auto;
   font-size: 13px;
   text-align: center;
   margin-top: 20px;
   color: white;
   font-weight: 200;
   letter-spacing: 2px;
   opacity: 0;
   max-height:0;
   transition: all 0.3s ease;
}

.card:hover {
   height: 270px;
}

.card:hover .info {
   height: 90%;
}

.card:hover .text {
   transition: all 0.3s ease;
   opacity: 1;
   max-height:40px;
}

.card:hover .icon {
   background-position: -120px;
   transition: all 0.3s ease;
}

.card:hover .icon i {
   background: linear-gradient(90deg, #FF7E7E, #FF4848);
   -webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
   opacity: 1;
   transition: all 0.3s ease;
}
</style>

<script type="text/javascript">
function studentsearch(){
  window.location.href ="studentsearch.php";
}
function requests(){
  window.location.href ="leaverequests.php";
}
function roomdetails(){
  window.location.href ="roomdetails.php";
}
</script>
  </head>
  <body>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- about -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
       font-family: helvetica;
    }


    .Nav{
    background: black;
      height: 80px;
    margin-top: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: sticky;
    top: 0;
    z-index:10;

    }

    @media screen and (max-width: 960px) {
      .Nav{
        transition: 0.8s all ease;
      }
    }
    .NavbarContainer{
      display: flex;
    justify-content: space-between;
    height: 80px;
    z-index: 1;
    width: 100%;
    padding: 0 24px;
    max-width: 1100px;

    }
    @media screen and (max-width: 768px){
      .NavbarContainer{
        padding: 0 60px;
      }
    }

    .NavLogo{
      color:red;
    justify-self: flex-start;
    cursor: pointer;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    margin-left: 24px;
    font-weight: bold;
    text-decoration: none;
    }

    .MobileIcon{
      display: none;
    }
    @media screen and (max-width: 768px){
      .MobileIcon{
       display: block;
       position: absolute;
       top:0;
       right: 0;
       transform: translate(-100%,60%);
       font-size: 1.8rem;
       cursor: pointer;
       color: #fff;
     }

    }

    .NavMenu{
      display: flex;
    align-items: center;
    list-style:none;
    text-align:center;
    margin-right: -22px;

    }
    @media screen and (max-width: 768px){
      .NavMenu{
        display:none;
      }
    }
    .NavItem{
      height: 80px;
    }

    .NavLinks{
      color: #fff;
    display: flex;
    align-items:center;
    text-decoration: none;
    padding: 0 1rem;
    height: 100%;
    cursor: pointer;
    }
    .NavLinks.active{
        border-bottom: 3px solid #01bf71;

    }
    .NavBtn{
      display: flex;
      align-items: center;

    }

      @media screen and (max-width: 768px){
        .NavBtn{
        display: none;
    }
    }

    .NavBtnLink{
      border-radius: 50px;
      background: #01bf71;
      whitespace: nowrap;
      padding: 10px 22px;
      color: #010606;
      font-size: 16px;
      outline: none;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
      text-decoration: none;

    }

    .NavBtnLink:hover{

        transition: all 0.2s ease-in-out;
        background: #fff;
        color: #010606;

    }
    </style>
    <script type="text/javascript">
      function rtohome(){
window.location.href ="admindashboard.php";

      }
      function logout(){
        window.location.href ="../index.php";
      }
    </script>

  </head>
  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="sinhgad_logo.jpg" alt="assam" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li style="color:white;padding-top:30px; margin-left:250px;" class="NavItem">Welcome 54678</li>
        </ul>
        <!-- <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.html">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.html">Sign in</a></li>
        </ul> -->
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="logout()" >Logout</button>
        </div>

      </div>
    </div>

  </body>
</html>

<!-- end about -->
<div class="wrapper">

   <div class="content">
      <!-- card -->
      <div class="card" onclick="roomdetails()">

            <div class="icon"><i class="material-icons md-36" >search</i></div>
            <p class="title">Room details</p>
            <p class="text">Check all student room details.</p>

      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card" onclick="studentsearch()">

            <div class="icon"><i class="material-icons md-36">add</i></div>
            <p class="title">Student Search</p>
            <p class="text">Search for a student .</p>

      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card" onclick="requests()">

            <div class="icon"><i class="material-icons md-36">description</i></div>
            <p class="title">Leave Requests</p>
            <p class="text">Approve or reject leave requests.</p>

      </div>
      <!-- end card -->

      <!-- card -->

      <!-- end card -->




   </div>

</div>



  </body>
</html>

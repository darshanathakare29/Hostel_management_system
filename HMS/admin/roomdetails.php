
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
	<style>
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
   font-family: helvetica;
  }
table {
	width: 750px;
	border-collapse: collapse;
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) {
	background: #eee;
	}

th {
	background: #3498db;
	color: white;
	font-weight: bold;
	}

td, th {
	padding: 10px;
	border: 1px solid #ccc;
	text-align: left;
	font-size: 18px;
	}
  .approvebtn{
    border-radius: 50px;
    background: #01bf71;
    whitespace: nowrap;
    padding: 10px 22px;
    color: #010606;
    font-size: 16px; */
     outline: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    text-decoration: none;

  }
/*
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table {
	  	width: 100%;
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr {
		display: block;
	}

	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr {
		position: absolute;
		top: -9999px;
		left: -9999px;
	}

	tr { border: 1px solid #ccc; }

	td {
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee;
		position: relative;
		padding-left: 50%;
	}

	td:before {
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%;
		padding-right: 10px;
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}


}
</style>
</head>
  <body>
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
    <h3 style='text-align: center;'>No Male Students Registered</h3><table>
<thead>
  <tr>
    <th style="text-align: center;" colspan="6">female</th>
  </tr>
  <tr>
    <th>Reg No</th>
    <th>Name</th>
    <th>Phone no</th>
    <th>Email</th>
    <th>Block</th>
    <th>Room no</th>
  </tr>
</thead>
<tbody>


                <tr> <td>19MIS0244</td>
        <td>Purvaja Malamkar</td>
        <td>9876543211</td>
        <td>purvajamalamkar2112@gmail.com</td>
          <td>Ablock</td>
            <td>1</td>
        </tr>
              <tr> <td>19MIS0245</td>
        <td>Darshana Thakare</td>
        <td>1234567890</td>
        <td>darshana2@gmail.com</td>
          <td>Qblock</td>
            <td>1</td>
        </tr>
              <tr> <td>19MIS0243</td>
        <td>Sakshi Gaikwad</td>
        <td>7685422198</td>
        <td>sakshigaikwad2508@gmail.com</td>
          <td>Bblock</td>
            <td>1</td>
        </tr>
              <tr> <td>19MIS0246</td>
        <td>Utkarsha Thadwe</td>
        <td>7685432191</td>
        <td>utkarsha@gmail.com</td>
          <td>Gblock</td>
            <td>1</td>
        </tr>
              <tr> <td>19MIS0247</td>
        <td>Sanika Shetwe</td>
        <td>9786264512</td>
        <td>sanika@gmail.com</td>
          <td>NULL</td>
            <td>0</td>
        </tr>
              <tr> <td>19MIS0241</td>
        <td>Pragati kasar</td>
        <td>7879184195</td>
        <td>pragati@gmail.com</td>
          <td>Bblock</td>
            <td>1</td>
        </tr>
      

</tbody>
</table>


  </body>
</html>

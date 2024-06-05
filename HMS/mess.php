<!DOCTYPE html>
<html lang="en" dir="ltr"> 
 <head>
    <meta charset="utf-8">
    <title>Mess&Meal</title>
    

    <style>
      body {
        font-family: 'Arial', sans-serif;
        background-image: url('https://st4.depositphotos.com/19960896/27842/i/1600/depositphotos_278425782-stock-photo-indian-food-platter-hindu-veg.jpg'); /* Replace with your actual image URL */
        background-size: cover;
        background-position: center;
        color: #333;
        margin: 0;
        padding: 20px;
        
      }
      h1{
        background-color:White;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Soft shadow for depth */
      }
      th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
      }
      th {
        background-color: #4CAF50;
        color: white;
        text-shadow: 1px 1px 2px black; /* Text shadow for better readability */
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 20px 0;
        cursor: pointer;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Shadow for button */
        transition: background-color 0.3s, box-shadow 0.3s;
      }
      button:hover {
        background-color: #367c39; /* Darker shade on hover */
        box-shadow: 0 6px 12px rgba(0,0,0,0.3); /* Larger shadow on hover */
      }
    </style>

    <script type="text/javascript">
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
 
   
 </head>
 <body>
  <br>
  <center><h1> Mess Menu(Present)</h1> </center>
  <table border="1">
    <tr>
      <th>Days</th>
      <th>Breakfast</th>
      <th>Lunch</th>
      <th>Tea, Snacks</th>
      <th>Dinner</th>
    </tr>
    <tr>
      <td>Monday</td>
      <td>Sambhar Vada, Idli, Upma, Omelet, Butter Toast, Bread Jam, Boiled Egg, Tea, Milk</td>
      <td>Rajma, Alu Fry, Raita, Rice, Roti, Salad</td>
      <td>Bread Cutlet, Tea</td>
      <td>Mix Veg, Dal Makhani, Rice, Roti, Salad</td>
    </tr>
    <tr>
      <td>Tuesday</td>
      <td>Parantha, Dahi, Butter Toast, Bread Jam,Boild,Eggs Tea, Milk</td>
      <td>Kadi Pakoda, Patta Gobhi, Rice, Roti</td>
      <td>Macaroni, Tea</td>
      <td>Chicken, Rice, Roti, Salad</td>
    </tr>
    <tr>
        <td>Wednesday</td>
        <td>Pav Bhaji, omlet, Butter Toast, Bread Jam,Boild Eggs, Tea, Milk</td>
        <td>Chana Dal, Shimla Mirchi, Alu, Raita, Rice, Roti, Salad</td>
        <td>Pastry, Coffee</td>
        <td>Matar Paneer, Lal Masor, Rice, Roti, Salad, Halwa(Gajar/Mung Dal/Suji)</td>
    </tr>
    <td>Thrusday</td>
        <td>Chole Bhatore, omlet, Butter Toast, Bread Jam,Boild Eggs, Tea, Milk</td>
        <td>Kale Chole, Phool Gobhi, Raita, Rice, Roti, Salad</td>
        <td>Burger, Tea</td>
        <td>Mix Veg, Dal Makhani, kheer, Rice, Roti,Salad</td>
    </tr>
    <td>Friday</td>
        <td>Poori Sabji, omlet, Butter Toast, Bread Jam,Boild Eggs, Tea, Milk</td>
        <td>Rajma, Alu Fry, Raita, Rice, Roti, Salad</td>
        <td>Samosa, Tea</td>
        <td>Chicken,Alu matar,Dal, Rice, Roti, Salad</td>
    </tr>
    <td>Saturday</td>
        <td>Dosa Sambhar, omlet, Butter Toast, Bread Jam,Boild Eggs, Tea, Milk</td>
        <td>Mix Veg, Kali Masur, Raita, Rice, Roti, Salad/Khichdi, Papad</td>
        <td>Bread Sandwich, Tea</td>
        <td>Alu Soyabean, Dal Makhani,Gulab Jamun, Rice, Roti, Salad</td>
    </tr>
    <td>Sunday</td>
        <td>Pav Bhaji, omlet, Butter Toast, Bread Jam,Boild Eggs, Tea, Milk</td>
        <td>Chana Dal, Shimla Mirchi, Alu, Raita, Rice, Roti, Salad</td>
        <td>OFF</td>
        <td>OFF</td>
    </tr>
    
  </table>
  <button onclick="rtohome()">Go Back</button>
 </body>
</html>

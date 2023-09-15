<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">

</head>
<body>
    
    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>BLOOD DONOR MANAGEMENT</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="register.php" class="w3-bar-item w3-button">Register a donor</a>
      <a href="donor.php" class="w3-bar-item w3-button">Search a donor</a>
      <a href="social.php" class="w3-bar-item w3-button">Content for SM</a>
    </div>
  </div>
</div>    
</body>
</head>
<body>
  
  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Why Donating?</h3>
    <p>
 Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:
</p>
<p>
    You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
    A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
    </p>
    Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
    </p>
<p>
    If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
    Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
        </p>
<p>
    Blood will be separated into components within eight hours of donation
    The blood will then be taken to the laboratory for testing.
    Once found safe, it will be kept in special storage and released when required.
    The blood is now ready to be taken to the hospital, to save lives.

    </p>
  </div>
</body>

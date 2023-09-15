<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <!-- Heading -->
    <h3> CONTENT FOR SOCIAL MEDIA </h3>
    <!-- HTML form  -->
    <form method="POST">
        <h4>Name : </h4>
        <input type="text" name="name">
        <h4>Units of Blood: </h4>
        <input type="text" name="unit">
        <h4>Type of Blood: </h4>
        <input type="text" name="type">
        <h4>Purpose :</h4>
        <input type="text" name="purpose">
        <h4>Contact Number:: </h4>
        <input type="text" name="phone"><br><br>
        <input type="submit" value="Display" name="submit">
    </form>
</body>
</html>
<?php
    // When the submit button is clicked
    if (isset($_POST['submit'])) {
        // Creating variables and 
        // storing values in it
        $name = $_POST['name'];
        $unit = $_POST['unit'];
        $type = $_POST['type'];
        $purpose = $_POST['purpose'];
        $phone = $_POST['phone'];
        echo "<h1><i> Whatsapp</i></h1><br>
        Needed $unit units of $type blood  <br> for $purpose <br>
        Patient Name : $name <br>
        Contact Number : $phone <br>
        Hospital Name : XYZ Hospital,Sathy
        ";
        echo "<h1><i> Instagram</i></h1><br>
        #blood #givebloodsavelives #blooddrive<br>
        Urgent Need $unit units of $type blood for $purpose.
        <br>Patient Name : $name <br>
        Contact Number : $phone <br>
        Hospital Name : XYZ Hospital,Sathy
        ";
        echo "<h1><i> Twitter</i></h1><br>
        Hospital Name : XYZ Hospital,Sathy<br>
        Blood Type : $type<br>
        Patient Name : $name <br>
        Contact Number : $phone <br>
        #BloodMatters
        ";
    }
?>
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "blood1");
         
        // Check connection
        if($conn == false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $name =  $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $blood_group =  $_REQUEST['blood_group'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $weight = $_REQUEST['weight'];
        $height = $_REQUEST['height'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO donor VALUES ('$name','$age','$blood_group','$phone','$address','$email','$weight','$height')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                ;
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
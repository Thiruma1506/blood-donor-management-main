<?php

$mysqli = new mysqli("localhost", "root", "", "login_db");
if($mysqli->connect_errno){
            die("ERROR: Could not connect. "
                .$mysqli->connect_error);
        }
         
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
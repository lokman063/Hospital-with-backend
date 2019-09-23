<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dhaka_hospital";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
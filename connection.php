<?php
//THIS FILE IS FOR PART-I:- https://youtu.be/3MotOERTW7I

//Your server name, it will be same for all 000webhost accounts
$servername = "localhost";

//Your DB username
$username = "id21627718_thueta";

//Your DB password
$password = "169593Aa@";

//Your DB name, required if you have two DB and want to connect to a specific one
$dbname = "id21627718_thueta";

//Connect to MySQL
$mysql = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if($mysql->connect_error){
echo "Connection failed: ". $mysql->connect_error;
} else {
echo "Connected successfully";
}

?>

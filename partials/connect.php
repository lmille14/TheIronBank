<?php
//This file creates a $link variable containing connection information
//Use $link to interact with the database



//error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//connecting safely

$host = 'localhost';
$username = 'sli8';
$password = 'fmdbMysql';
$database = 'sli8';

$link = new mysqli($host, $username, $password, $database);
if($link->connect_errno) {
	echo "failed connection".$link->connect_errno.":".$link->connect_error;
}

//prepare statement
// $stmt = $link->prepare("insert into FM_Person (age) values (?);");

// //bind parameters
// $stmt->bind_param("i", $_GET['age']);

// $stmt->execute();

// //query
// $query = 'SELECT * from user_age;';
// $result = $link->query($query) or die("Query Failed");

// echo '<table border="1">';
// while($tuple = mysqli_fetch_array($result, MYSQL_ASSOC)) {
//         echo '<tr>';
//         foreach($tuple as $colval) {
//                 echo '<td>'.$colval.'</td>';
//         }
//         echo '</tr>';
// }
// echo '</table>';

// mysqli_close($link);

?>
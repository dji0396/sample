<?php
$host = "localhost";
$dbname = "test_mag";
$username = "root";
$dbpass = "";


<<<<<<< HEAD






=======
>>>>>>> 97f9ea5... Test
$conn = mysqli_connect($host,$username,$dbpass, $dbname);


// Set autocommit to off
//mysqli_autocommit($conn,FALSE);

// performs the insert query

$query = "SELECT * from test2";

mysqli_query($conn,$query);
$total_columns = mysqli_fetch_all($conn);
echo $total_columns;
<<<<<<< HEAD
mysqli_close($conn);
=======
mysqli_close($conn);
>>>>>>> 97f9ea5... Test

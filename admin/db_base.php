<?php
$con=mysqli_connect("localhost","root","root");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"Show databases");

while($row = mysqli_fetch_array($result)) {
  echo $row['Database'];
  echo "<br>";
}

echo "<br><br>Connect to db fine, executing clear slate:";

$db_setup_SQL = "CREATE DATABASE IF NOT EXISTS `voyagur`;";
$result = mysqli_query($con,$db_setup_SQL);
print_r( $result);
$db_setup_SQL = "DROP TABLE IF EXISTS `voyagur`.`users`;";
$result = mysqli_query($con,$db_setup_SQL);
print_r( $result);
$db_setup_SQL = "CREATE TABLE `voyagur`.`users` (`id` int(11) NOT NULL AUTO_INCREMENT,`username` varchar(100) NOT NULL,`location` varchar(100) NOT NULL,PRIMARY KEY (`id`),UNIQUE KEY `id` (`id`)) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$result = mysqli_query($con,$db_setup_SQL);
print_r( $result);
$db_setup_SQL = "INSERT INTO `voyagur`.`users` (`id`, `username`, `location`) VALUES
(1, 'kevin', 'In Santa Barbara'),
(2, 'mitch', 'In austin'),
(3, 'user1', 'I am here');";
$result = mysqli_query($con,$db_setup_SQL);
print_r( $result);

$db_setup_SQL = "CREATE USER 'code_db_user'@'localhost' IDENTIFIED BY 'I3xI7PGo*Z';";
$result = mysqli_query($con,$db_setup_SQL);
print_r( $result);
$db_setup_SQL = "GRANT ALL PRIVILEGES ON *.* TO 'code_db_user'@'localhost' WITH GRANT OPTION;";
$result = mysqli_query($con,$db_setup_SQL);
print_r( $result);







mysqli_close($con);
?>

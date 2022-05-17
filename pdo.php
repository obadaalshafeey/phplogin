<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=sunday", $username, $password);

//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO product_info (id, name, catagory_id) VALUES ('6',
'obafa','dd')";

        

$sql2="DELETE FROM product_info WHERE id='2'";

$sql3="UPDATE product_info SET salary ='1000' WHERE id='1';";

$sql4="CREATE TABLE new_table (
    id INT(14) NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    salary FLOAT(14,10) NOT NULL
);";

$sql8="";


$conn->exec($sql2);
$conn->exec($sql6);
$conn->exec($sql4);
$conn->exec($sql3);
$conn->exec($sql1);

?>
<?php
include './index2.php';
include './form.php';

$sql = 'SELECT * FROM regster';
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="firstName">

    <input type="text" name="lastName" id="lastName" placeholder="lastName">

    <input type="text" name="email" id="email" placeholder="email">

<input type="submit" name="submit"  value="send">
</form>
</body>
</html>
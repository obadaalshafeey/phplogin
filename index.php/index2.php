<?php
$conn =mysqli_connect('localhost','root','','phplogin');
if (!$conn){
    echo 'fail' . mysqli_connect_error();

}
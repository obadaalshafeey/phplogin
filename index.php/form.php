<?php

$firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO regster (firstName,lastName,email) 
           VALUES ('$firstName','$lastName','$email' )";


if(empty($firstName)){
echo ' empty firstName) ';

}elseif(empty($lastName)){
    echo ' empty lastName ';

    }elseif(empty($email)){
        echo ' empty email) ';


        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

            echo 'erorr email';
        }
        
else{
      if(mysqli_query($conn,$sql)){  

                 header('Location: index1.php');

           }else{
              echo 'error' . mysqli_error($conn);
           } 

}
         
}
?>
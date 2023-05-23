<?php

$connection = mysqli_connect('localhost','root','','book_dv');

if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $hour = $_POST['hour'];
   $message = $_POST['message'];

   $request = " INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, hour, message) 
                VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals', '$hour','$message') ";
   mysqli_query($connection, $request);

   header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>

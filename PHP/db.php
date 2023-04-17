<?php

   $connection = mysqli_connect('localhost','root','','travel_book');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      $request = "insert into signup(name, email, phone, address) values('$name','$email','$phone','$address')";
      mysqli_query($connection, $request);

      header('location:signup.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
<?php

   $connection = mysqli_connect('localhost','root','','travel_book');

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guest = $_POST['guest'];
   $arrival = $_POST['arrival'];
   $leaving = $_POST['leaving'];

   if(isset($_POST['send'])){
      $request = " insert into book_form(name, email, phone, address, location, guest, arrival, leaving) values('$name','$email','$phone','$address','$location','$guest','$arrival','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

   if(isset($_POST['send']))
      {
          
          $SearchQuery = "select * from book_form where name = '$name'";
          $SearchResult = mysqli_query($connection, $SearchQuery);

          header('location:receipt.php');
          if ($SearchResult)
          {
              if(mysqli_num_rows($SearchResult))
              {
                  while ($row = mysqli_fetch_array($SearchResult))
                  {
                      $name = $row['name'];
                      $email = $row['email'];
                      $phone = $row['phone'];
                      $address = $row['address'];
                      $location = $row['location'];
                      $guest = $row['guest'];
                      $arrival = $row['arrival'];
                      $leaving = $row['leaving'];
                  }
              }
              else{
                  echo "No data is in Table for this ID";
              }
          }
          else{
              echo "Result Error!!!";
          }
      }

?>


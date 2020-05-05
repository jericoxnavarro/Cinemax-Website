<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "cinemax";
  $conn = mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn, $db_name);
      $ticketnum = $_GET["decline"];
      $updatebooking = mysqli_query($conn, "UPDATE bookings SET seat = 'none', booking_status = 'Declined' WHERE ticket_number = '$ticketnum'");
      header("Location: bookings.php?Status='Success'&$ticketnum='Declined'");
?>
<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "cinemax";
  $conn = mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn, $db_name);
      $ticketnum = $_GET["accept"];
      $updatebooking = mysqli_query($conn, "UPDATE bookings SET booking_status = 'Approved' WHERE ticket_number = '$ticketnum'");
      header("Location: bookings.php?Status='Success'&$ticketnum='Approved'");
?>
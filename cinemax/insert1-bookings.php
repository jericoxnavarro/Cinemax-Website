<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "cinemax";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn, $db_name);

    $ticketid = $_POST["ticket"];
    $name = $_POST["fullname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $seat = $_POST["seat"];
    $title = $_POST["title"];
    $date_book = date("Y/m/d");

    $sql = "INSERT INTO bookings (title,ticket_number,name,seat,email,number,date,time,date_book) VALUES 
    ('$title','$ticketid','$name','$seat','$email','$number','$date','$time','$date_book')";
    mysqli_query($conn,$sql);
    header("Location: movie1-book.php?Name=$name&Number=$number&Email=$email&Ticket=$ticketid&SUCCESS");
?>

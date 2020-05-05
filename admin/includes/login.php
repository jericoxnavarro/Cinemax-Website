<?php

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
    if(empty($_POST['Username']) || empty($_POST['Password'])){
    $error = "Username or Password is Invalid";
    header("Location: ../index.php?INVALID");
}else{
    //Define $user and $pass
    $user=$_POST['Username'];
    $pass=$_POST['Password'];
    //Establishing Connection with server by passing server_name, user_id and pass as a patameter
    $conn = mysqli_connect("localhost", "root", "");
    //Selecting Database
    $db = mysqli_select_db($conn, "cinemax");
    //sql query to fetch information of registerd user and finds user match.
    $query = mysqli_query($conn, "SELECT * FROM admin_accounts WHERE password='$pass' AND username='$user'");
 
    $rows = mysqli_num_rows($query);
    if($rows == 1){
        header("Location: ../dashboard.php"); // Redirecting to other page
    }else{
        $status = "False";
        header("Location: ../index.php?Status=$status");
    }
    mysqli_close($conn); // Closing connection
}
}

?>
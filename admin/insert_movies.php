<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "cinemax";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn, $db_name);

    $title = $_POST["title"];
    $Genre1 = $_POST["Genre1"];
    $Genre2 = $_POST["Genre2"];
    $Genre3 = $_POST["Genre3"];
    $description = $_POST["description"];
    $ratings = $_POST["ratings"];
    $trailer = $_POST["trailer"];
    $thumbnail = $_POST["thumbnail"];
    $bgimage = $_POST["bgimage"];
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];
    $date3 = $_POST["date3"];
    $change = $_POST["change"];
    $selectedtable = $_POST["selectedtable"];

    if ($selectedtable=="movies"){
        $sql = "UPDATE $selectedtable SET Title='$title', Genre1='$Genre1', Genre2='$Genre2', Genre3='$Genre3', Description='$description', Ratings='$ratings'
        , Trailer='$trailer', Thumbnail='$thumbnail', BG_image='$bgimage', Date1='$date1', Date2='$date2', Date3='$date3' WHERE Movie_ID = '$change'";
        mysqli_query($conn,$sql);
        header("Location: movies.php?Status='Success'&Movie$change='New'");
    } else {
        $sql = "UPDATE $selectedtable SET title='$title', genre1='$Genre1', genre2='$Genre2', genre3='$Genre3', description='$description', ratings='$ratings'
        , trailer='$trailer', thumbnail='$thumbnail', bg_image='$bgimage' WHERE movie_id = '$change'";
        mysqli_query($conn,$sql);
        header("Location: movies.php?Status='Success'&Movie$change='New'");
    }
?>
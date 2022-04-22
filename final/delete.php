<?php 
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    $sql = "DELETE FROM final WHERE id='$id'";

    if(mysqli_query($conn, $sql)){
        header("Location: showMarks.php");
    }
?>
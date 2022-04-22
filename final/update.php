<?php 
    $id = $_GET['id'];

    $web = $_POST['web'];
    $Architecture = $_POST['Architecture'];
    $BigData = $_POST['BigData'];

    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    $sql = "UPDATE final SET id='$id', web='$web', Architecture='$Architecture', BigData='$BigData' WHERE id=$id;";

    if(mysqli_query($conn, $sql)){
        header("Location: showMarks.php");
    }

?>
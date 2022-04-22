<?php 
    $web = $_POST['web'];
    $Architecture = $_POST['Architecture'];
    $BigData = $_POST['BigData'];

    // echo $web."<br>".$Architecture."<br>".$BigData;

    $conn = mysqli_connect('localhost', 'root', '', 'exam');

    $sql = "INSERT INTO final VALUES(null, '$web', '$Architecture', '$BigData');";

    if(mysqli_query($conn, $sql)){
        header("Location: showMarks.php");
    };
?>
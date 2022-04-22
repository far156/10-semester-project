<?php 
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email, $password;

    $conn = mysqli_connect('localhost', 'root', '', 'exam');

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password';";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount == 1){
        $_SESSION['register'] = 'successfully  registered';
        header("Location:showMarks.php");
    }
    else{
        $_SESSION['loginError'] ="Login Error";
        // header("")
    }
?>
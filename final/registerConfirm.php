<?php 
    session_start();
    
    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users VALUES(null, '$email', '$password');";
    if(mysqli_query($conn, $sql)){
        $_SESSION['register'] = 'successfully  registered';
        header("Location: login.php");
    }
?>

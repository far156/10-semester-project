<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .register-container{
            width: 100%;
            height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <form action="loginConfirm.php" method="post">
            <?php 
                if(isset($_SESSION['register'])){ ?>
                    <p><?php echo $_SESSION['register'] ?></p>
                    <?php
                }
            ?>
            <?php 
                if(isset($_SESSION['loginError'])){ ?>
                    <p><?php echo $_SESSION['loginError'] ?></p>
                    <?php
                }
            ?>
            <h2>Login in Here</h2>
            <input type="text" name="email"  placeholder="email">
            <br> <br>
            <input type="password" name="password" id="" placeholder="password"> <br> <br>
            <p>Click to <a href="./register.php">Register</a></p>
            <input type="submit" value="Log in">

        </form>
    </div>
</body>
</html>

<?php 
    unset($_SESSION['register']);
    unset($_SESSION['loginError']);
?>
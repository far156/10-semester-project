
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
        <form action="./registerConfirm.php" method="post">
            <h2>Register Here</h2>
            <input type="text" name="email" placeholder="email">
            <br> <br>
            <input type="password" name="password" id="" placeholder="password"> <br> <br>
            <p>Click to <a href="./login.php">login</a></p>
            <input type="submit" value="register">
        </form>
    </div>
</body>
</html>
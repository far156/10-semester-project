<?php 
    $id = $_GET['id'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    $sql = "SELECT * FROM final WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    $sql = "SELECT * FROM final WHERE id=$id";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
        <form action="update.php?id=<?php echo $row['id']; ?>" method="POST" style="border:1px solid; padding:10px">
            <input type="text" name="web" id="" value="<?php echo $row['web'] ?>" placeholder="Web marks"> <br><br>
            <input type="text" name="Architecture" value="<?php echo $row['Architecture'] ?>" id="" placeholder="Architecture marks"><br><br>
            <input type="text" name="BigData" value="<?php echo $row['BigData'] ?>" id="" placeholder="BigData marks"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
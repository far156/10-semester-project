<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'exam');

    if(isset($_POST['searchInput'])){
        $searchInput = $_POST['searchInput'];
        $sql = "SELECT * FROM final WHERE id=$searchInput";
        $result = mysqli_query($conn, $sql);
    }
    else{
        $sql = "SELECT * FROM final";
    }
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="table-container">

    <div>
        <form action="" method="post">
            <input type="text" name="searchInput" placeholder="Search by Id">
            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
    <table border="1">
        <thead>
            <td>ID</td>
            <td>Web</td>
            <td>Architecture</td>
            <td>BigData</td>
            <td>Action</td>
        </thead>
        <tbody>
            <?php 
                while($marks=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $marks['id']; ?></td>
                        <td><?php echo $marks['web']; ?></td>
                        <td><?php echo $marks['Architecture']; ?></td>
                        <td><?php echo $marks['BigData']; ?></td>
                        <td>
                            <a href="editMarks.php?id=<?php echo $marks['id']; ?>">
                                <button>Edit</button>
                            </a>
                            <a href="delete.php?id=<?php echo $marks['id']; ?>">
                                <button>Delete</button>
                            </a>
                            
                        </td>
                    </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</body>
</html>
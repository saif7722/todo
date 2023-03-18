<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <form action="insert.php" method="GET">
    <div class="container">

        <div class="row justify-content-center bg-white m-auto shoadow mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">Todo</h3>
            <div class="col-8">
                <input type="text" class="form-control" name="list">
            </div>
            <div class="col-2">
                <button class="btn btn-primary">ADD</button>

                
            </div>
        </div>

    </div>
    </form>

    <?php
        include "config.php";
        $rawData = mysqli_query($con , "select * from tbltodo")
    ?>

    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">

        
    <table class="table">
        <tbody>
            <?php
                while($row = mysqli_fetch_array($rawData)){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['list'] ?></td>
                <td style="width:10%"><a href="delete.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
                <td style="width:10%"><a href="update.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-success">Update</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        
    </table>
    </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
    include "config.php";

     $id = $_GET['ID'];

    $Rdata = mysqli_query($con , "select *  FROM `tbltodo` WHERE Id = $id");
    $data = mysqli_fetch_array($Rdata);
?>
<body class="bg-warning">

<form action="update1.php" method="POST">
    <div class="container">

        <div class="row justify-content-center bg-white m-auto shoadow mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">Update</h3>
            <div class="col-10">
                <input type="text" value="<?php echo $data['list']?>" class="form-control" name="list">
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Update</button>

                <input type="hidden" name="id" value="<?php echo $data['id']?>">
            </div>
        </div>

    </div>
    </form>

    
</body>
</html>
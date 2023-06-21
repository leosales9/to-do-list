<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php
    $id = $_GET['ID'];
    echo $id;
    include "config.php";
    $rData = mysqli_query($con, "SELECT * FROM tbltodo WHERE id = ".$id);
    $data = mysqli_fetch_array($rData);
    ?>

<body class="bg-info">

    <form action="update_query.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
                <h3 class="text-center text-primary">Nova tarefa</h3>
                <div class="col-10">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">Atualizar</button>
                    <input type="hidden" value="<?php echo $data['id'] ?>" name="ID">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
                <h3 class="text-center text-primary">Lista de Tarefas</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">adicionar</button>
                </div>
            </div>
        </div>
    </form>

    <!-- getdata -->
    <?php
    include "config.php";
    $rawData = mysqli_query($con, "SELECT * FROM tbltodo");
    
    ?>

    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table">
                <tbody>
                    <?php
                    while($row = mysqli_fetch_array($rawData)){

                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['list']?></td>
                        <td style="width: 10%;"> <a href="delete.php?ID=<?php echo $row['id']?>" class="btn btn-outline-danger">remover</a> </td>
                        <td style="width: 10%;"> <a href="update.php?list=<?php echo $row['list']?>&ID=<?php echo $row['id']?>" class="btn btn-outline-success">editar</a></td>
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
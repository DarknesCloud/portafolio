<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <br>
    <br>

    <div class="table-responsive"> 

    <?php ?>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title_experience</th>
                <th>Time_experience</th>
                <th>Description_work1_experience</th>
                <th>Description_work2_experience</th>
                <th>Description_work3_experience</th>
                <th>Description_work4_experience</th>
                <th>Eliminar</th>
                <th>Actualizar</th>
            </tr>
        </thead>

        <?php foreach($busquedas as $crear){ ?>

        <tbody>
            <tr>
                <td scope="row"><?php echo $crear->id; ?></td>
                <td><?php echo $crear->title_experience; ?></td>
                <td><?php echo $crear->time_experience; ?></td>
                <td><?php echo $crear->description_work1_experience; ?></td>
                <td><?php echo $crear->description_work2_experience; ?></td>
                <td><?php echo $crear->description_work3_experience; ?></td>
                <td><?php echo $crear->description_work4_experience; ?></td>
                <td><a href="?controlador=admin&accion=borrarExperience&id=<?php echo $crear->id; ?>" class="btn btn-danger">Borrar</a></td>
                <td><a href="?controlador=admin&accion=editarExperience&id=<?php echo $crear->id; ?>" class="btn btn-info">Editar</a></td>
            </tr>
        </tbody>

            <?php } ?>            

    </table>

    <a href="?controlador=admin&accion=crearExperience" class="btn btn-success">Agregar registro</a><br><br>

    </div>

</body>
</html>
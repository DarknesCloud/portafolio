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
<?php ?>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Desc_port</th>
                <th>Montajes</th>
                <th>Marketing</th>
                <th>Fantasia</th>
                <th>Borrar</th>
                <th>Actualizar</th>
            </tr>
        </thead>

        <?php foreach($busquedas as $busca){ ?>

        <tbody>
            <tr>
                <td scope="row"><?php echo $busca->id; ?></td>
                <td><?php echo $busca->desc_port; ?></td>
                <td><img src="assets/img/portfolio/montajes/<?php echo $busca->montajes; ?>" width="100"></td>
                <td><img src="assets/img/portfolio/marketing/<?php echo $busca->marketing; ?>" width="100"></td>
                <td><img src="assets/img/portfolio/fantasia/<?php echo $busca->fantasia; ?>" width="100"></td>
                <td><a href="?controlador=admin&accion=borrarPortfolio&id=<?php echo $busca->id; ?>" class="btn btn-danger">Borrar</a></td>
                <td><a href="?controlador=admin&accion=editarPortfolio&id=<?php echo $busca->id; ?>" class="btn btn-info">Editar</a></td>
            </tr>
        </tbody>

            <?php } ?>            

    </table>

    <a href="?controlador=admin&accion=crearPortfolio" class="btn btn-success">Agregar registro</a>

</body>
</html>
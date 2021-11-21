<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<div class="table-responsive">

<table class="table table-bordered border-primary">
        <thead class="thead-inverse|thead-default">
            <tr>
                <th>ID</th>
                <th>Description_resume</th>
                <th>Name_references</th>
                <th>Description_references</th>
                <th>Address_references</th>
                <th>Phone_references</th>
                <th>Email_references</th>
                <th>Eliminar</th>
                <th>Actualizar</th>
            </tr>
            </thead>
            <?php  foreach ($resumes as $resume) { ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $resume->id; ?></td>
                    <td><?php echo $resume->description_resume; ?></td>
                    <td><?php echo $resume->name_references; ?></td>
                    <td><?php echo $resume->description_references; ?></td>
                    <td><?php echo $resume->address_references; ?></td>
                    <td><?php echo $resume->phone_references; ?></td>
                    <td><?php echo $resume->email_references; ?></td>
                    <td><a href="?controlador=admin&accion=borrarResume&id=<?php echo $resume->id; ?>" type="a" class="btn btn-danger">Eliminar</a></td>
                    <td><a href="?controlador=admin&accion=editarResume&id=<?php echo $resume->id; ?>" type="a" class="btn btn-info">Actualizar</a></td>
                </tr>
            </tbody>
            <?php }  ?>
    </table>
    <a href="?controlador=admin&accion=crearResume" class="btn btn-success" >Agregar Resume</a>
</div>

</body>
</html>
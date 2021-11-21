<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h3>About</h3>
    <h4>Tabla de consulta de About</h4>
    <div class="table-responsive">
    <?php foreach ($abouts as $about) { ?>

    <table class="table table-bordered border-primary">
      <thead class="thead-inverse|thead-default">
        <tr class="align-bottom">
          <th>Id</th>
          <th>Title</th>
          <th>Birthday</th>
          <th>Phone</th>
          <th>City</th>
          <th>Age</th>
          <th>Degree</th>
          <th>Email</th>
          <th>Description</th>
          <th>Description_Skills</th>
          <th>Description_Facts</th>
          <th>Borrar</th>
          <th>Actualizar</th>
        </tr>
        </thead>

        

        <tbody>
          <tr class="align-bottom">
            <td scope="row"><?php echo $about->id ?></td>
            <td><?php echo $about->titulo; ?></td>
            <td><?php echo $about->birthday; ?></td>
            <td><?php echo $about->phone; ?></td>
            <td><?php echo $about->city; ?></td>
            <td><?php echo $about->age; ?></td>
            <td><?php echo $about->degree; ?></td>
            <td><?php echo $about->email; ?></td>
            <td><?php echo $about->descripcion; ?></td>
            <td><?php echo $about->descripcion_skills; ?></td>
            <td><?php echo $about->descripcion_facts; ?></td>
            <td><a href="?controlador=admin&accion=borrarAbout&id=<?php echo $about->id; ?>" type="a" class="btn btn-danger">Eliminar</a></td>
            <td><a href="?controlador=admin&accion=editarAbout&id=<?php echo $about->id; ?>" type="a" class="btn btn-info">Actualizar</a></td>
          </tr>          
        </tbody>
    </table>
    
<?php } ?>
<br>
<a href="?controlador=admin&accion=crearAbout" class="btn btn-success">Agregar registro</a>

<a href="?controlador=admin&accion=about" class="btn btn-success">Pagina principal</a>
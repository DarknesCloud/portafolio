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
    
<form action="" method="post" class="">

<div class="mb-3">
  <label for="" class="form-label">ID: </label>
  <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId" required readonly value="<?php echo $busca->id; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Description_services: </label>
  <input type="text" name="description_services" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->description_services; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Name_services: </label>
  <input type="text" name="name_services" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->name_services ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Resume_services: </label>
  <input type="text" name="resume_services" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->resume_services; ?>">  
</div>

<input type="submit" name="editar_services" value="Actualizar Services" class="btn btn-success">

</form>

</body>
</html>
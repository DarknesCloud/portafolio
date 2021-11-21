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
  <label for="" class="form-label">Title_education: </label>
  <input type="text" name="title_education" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->title_education; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Time_education: </label>
  <input type="text" name="time_education" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->time_education ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">School_education: </label>
  <input type="text" name="school_education" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->school_education; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Description_education: </label>
  <input type="text" name="description_education" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $busca->description_education ?>">  
</div>

<input type="submit" name="editar_education" value="Actualizar Education" class="btn btn-success">

</form>

</body>
</html>
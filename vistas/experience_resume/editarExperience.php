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
  <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId" required readonly value="<?php echo $crear->id; ?>">   
</div>

<div class="mb-3">
  <label for="" class="form-label">Title_experience: </label>
  <input type="text" name="title_experience" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $crear->title_experience; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Time_experience: </label>
  <input type="text" name="time_experience" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $crear->time_experience; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Description_work1_experience: </label>
  <input type="text" name="description_work1_experience" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $crear->description_work1_experience; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Description_work2_experience: </label>
  <input type="text" name="description_work2_experience" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $crear->description_work2_experience; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Description_work3_experience: </label>
  <input type="text" name="description_work3_experience" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $crear->description_work3_experience; ?>">  
</div>

<div class="mb-3">
  <label for="" class="form-label">Description_work4_experience: </label>
  <input type="text" name="description_work4_experience" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo $crear->description_work4_experience; ?>">  
</div>

<input type="submit" name="editar_experience" value="Actualizar registro" class="btn btn-success">

</form>

</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<h4>Formulario editar about</h4>
<form action="" class="form-control form-control-l" method="post">

<div class="mb-3">
      <label for="" class="form-label">ID: </label>
      <input type="text" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->id; ?>" readonly>
      
    </div>

<div class="mb-3">
      <label for="" class="form-label">Title: </label>
      <input type="text" name="titulo" id="titulo" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->titulo; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Birthday: </label>
      <input type="text" name="birthday" id="birthday" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->birthday; ?>"> 
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Phone: </label>
      <input type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->phone; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">City: </label>
      <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->city; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Age: </label>
      <input type="text" name="age" id="age" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->age; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Degree: </label>
      <input type="text" name="degree" id="degree" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->degree; ?>">
     
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Email: </label>
      <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->email; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Description: </label>
      <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->descripcion; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Description_skills: </label>
      <input type="text" name="descripcion_skills" id="descripcion_skills" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->descripcion_skills; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Description_facts: </label>
      <input type="text" name="descripcion_facts" id="descripcion_facts" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $buscar->descripcion_facts; ?>">
      
    </div>

    <input name="editar" id="editar" class="btn btn-success" type="submit" value="Actualizar">

    <a href="?controlador=admin&accion=inicioAbout" class="btn btn-info">Cancelar</a>

</form>
  

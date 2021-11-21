<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<h4>Formulario editar about</h4>
<form action="" class="form-control form-control-l" method="post" enctype="multipart/form-data">

<div class="mb-3">
      <label for="" class="form-label">ID: </label>
      <input type="text" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $busca->id; ?>" readonly>
      
    </div>

<div class="mb-3">
      <label for="" class="form-label">Desc_port: </label>
      <input type="text-area" name="desc_port" id="titulo" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $busca->desc_port; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Montajes: </label>
      <input type="input" name="montajes" id="birthday" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $busca->montajes; ?>"> 
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Marketing: </label>
      <input type="input" name="marketing" id="marketing" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $busca->marketing; ?>">
      
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Fantasia: </label>
      <input type="input" name="fantasia" id="city" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $busca->fantasia; ?>">
      
    </div>

    <input name="editar_portfolio" id="editar" class="btn btn-success" type="submit" value="Actualizar">

    <a href="?controlador=admin&accion=inicioPortfolio" class="btn btn-info">Cancelar</a>

</form>
  

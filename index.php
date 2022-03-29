<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sistema midland</title>
</head>
<body style="background-color:gray">
<!--navbar-->
<?php include("./components/navbar.php")?>
<!--navbar-->

<!--botones-->
<br><br><br>
<div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
   <div class="row">
    <div class="col-sm-5 ">
    <div class="card text-white bg-primary mb-3 " style="max-width: 18rem;" onclick="window.location.replace('./pages/socios.php')" >
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title  fuente">Socios</h3>
            <p class="card-text" ></p>
        </div>
        </div>
    </div>
    
    <div class="col-sm-5">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;  " onclick="window.location.replace('./pages/actividades.php')"  >
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Actividades</h3>
        </div>
        </div>
    </div>
    <!--<div class="col-sm-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;  ">
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Editar alumnos</h3>
        </div>
        </div>
            </div>
            <div class="col-sm-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;  ">
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Eliminar alumnos</h3>
        </div>
        </div>
            </div>
   </div>-->
</div></div></div></div>
<!--botones-->
</body>
</html>
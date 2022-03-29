
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color:gray">
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Midland</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">volver</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            agregar socio
        </button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form id="form1">  
  <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Agregar socio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="form-group">
       <input type="text" placeholder="Nombre/s" name="firstname" id="firstname">
       </div>
        <br><br>
        <div class="form-group">
           <input type="text" placeholder="Apellido/s" name="lastname" id="lastname">
        </div>
      </div>
      <div class="container" id="message">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
</form>
  </div>
</div>

      <br><br>
      <br><br>
    


<div class="container" style="background-color:rgba(49, 68, 85, 0.600);padding:10px 10px 10px 10px;">
<p style="color: white;">Buscar socios</p>  
<div class="row">
  <div class="col-sm-3">
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-arrow-down-short-wide"></i>

Filtrar por
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" value="2" onclick="changeFilter(1)">N° de socio</a></li>
      <li><a class="dropdown-item disabled" value="1" onclick="changeFilter(2)" >N* de documento (proximamente)</a></li>
      <li><a class="dropdown-item disabled" value="3" onclick="changeFilter(3)">Fecha de alta (proximamente)</a></li>

    </ul>
  </div>
</div>
        
        
      <!--<select name="filter" class="form-control" id="filter">
        <option value="1" onclick="changeFilter(1)" disabled>Curso (proximamente)</option>
        <option value="2" onclick="changeFilter(2)">N° de documento</option>
        <option value="3" onclick="changeFilter(3)" disabled>Fecha de alta (proximamente)</option>
      </select>-->
  
  </div>
 
  <div class="col-sm-3" id="filter_response">
   
  </div>
    <div class="col-sm-3" id="submit" hidden>
      <button type="button" class="btn btn-primary mb-3" onclick="findPartners()">Buscar</button>
    </div>
      
  </div>
</div>











<div class="container" id="response">


 


</div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>



<script src="../js/findPartnerFilter.js"></script>
<script src="../js//validationAddPartnerForm.js"></script>

</body>
</html>
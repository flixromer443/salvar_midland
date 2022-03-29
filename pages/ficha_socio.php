<?php
    include("../config/conexion.php");
    $id=$_GET['id'];
    $query="select * from partners where id='$id'";
    $res=mysqli_query($link,$query);
    $row=mysqli_fetch_array($res);
    $query="select * from partners_activities  where pid='$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
          <a class="nav-link active" aria-current="page" href="./socios.php">volver</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->


    <br><br>
    <div class="container">
    <table class="table table-primary table-striped table-hover">
        <thead>
        <tr>
          <th scope="col">N° de socio</th>
          <th scope="col">Nombre y apellido</th>
          <th scope="col">Acciones</th>
  
        </tr>
        </thead>
  
  
  
  
  
        <tbody>                   
            <tr>
            <th scope="row"><?php echo $row[0] ;?></th>
            <td><?php echo $row[1] ;?></td>
            <td>
            <!-- Button trigger modal -->
            <a href="../components/factura.php?pid=<?php echo $id;?>" target="_blank">
            <button type="button" class="btn btn-primary" >
            <i class="fa fa-download"></i> Generar couta social
            </button>
            </a>
            
          
           
            
            




            
            
            
            
            
            
            
            </td>
        </tr>
      





        
          </tbody>
              </table>
    </div>



    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
   <?php
    include("../components/ficha2.php");
    ficha($id);
   ?>
</div>
</div>
</div>
</div>






















<script src="../js/checkboxesPartnerValidation.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>


            </body>
</html>
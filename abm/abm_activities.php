<?php
 include("../config/conexion.php");
 switch($_POST['verbo']){
     case 'create':
         echo json_encode(1);
     break;
     case 'delete':
         $uid=trim($_POST['uid']);
         $stmt=mysqli_prepare($link,"DELETE FROM activities WHERE id=?");
         mysqli_stmt_bind_param($stmt,'i',$uid);
         mysqli_stmt_execute($stmt); 
         header("Location:../pages/actividades.php");
     break;
     
     
 }
?>

?>
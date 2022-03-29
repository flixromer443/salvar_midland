<?php
    include("../config/conexion.php");
    switch($_POST['verbo']){
        case 'create':
            $firstname=trim($_POST['firstname']);
            $lastname=trim($_POST['lastname']);
            if(!empty($firstname)&&!empty($lastname)){
                $complete_name=trim(strtoupper($firstname))." ".trim(strtoupper($lastname));
                $query="select * from partners where partner='$complete_name'";
                $res=mysqli_query($link,$query);
                if(mysqli_num_rows($res)>0){
                    echo json_encode(1);
                }else{
                    $stmt=mysqli_prepare($link,"INSERT INTO partners(partner) values(?)");
                    mysqli_stmt_bind_param($stmt,'s',$complete_name);
                    mysqli_stmt_execute($stmt); 
                    echo json_encode(0);
                }
            }
        break;
        case 'delete':
            $uid=trim($_POST['uid']);
            $stmt=mysqli_prepare($link,"DELETE FROM partners WHERE id=?");
            mysqli_stmt_bind_param($stmt,'i',$uid);
            mysqli_stmt_execute($stmt); 
            header("Location:../pages/socios.php");
        break;
        case 'my_courses':
            $cid=$_POST['cid'];
            $pid=$_POST['pid'];
            $action=$_POST['action'];
            switch($action){
                case 0:
                    $stmt=mysqli_prepare($link,"DELETE FROM partners_activities WHERE pid=? AND aid=?");
                    mysqli_stmt_bind_param($stmt,'ii',$pid,$cid);
                    mysqli_stmt_execute($stmt); 
                    echo json_encode("eliminado con exito");
                break;
                case 1:
                  
                    $stmt=mysqli_prepare($link,"INSERT INTO partners_activities(pid,aid) values(?,?)");
                    mysqli_stmt_bind_param($stmt,'ii',$pid,$cid);
                    mysqli_stmt_execute($stmt); 
                    echo json_encode("ingresado con exito");
                break;
            }
        break;
        
    }
?>
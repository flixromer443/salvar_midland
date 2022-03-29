<?php
    $filter=$_POST['filter'];
    switch($filter){
        case 1:
            $res.='<input type="text" class="form-control" id="search"  placeholder="N° de socio">';
            echo json_encode($res);
        break;
    }

?>
<?php
    //$archivo=fopen("./CUOTAS_2020.csv","r");
    //$archivo=fopen("./socios_2022.csv","r");
    $archivo=fopen("./archivos/bd.csv","r");
    
    $archivo2=fopen("./archivos/FUTBOL_INFERIORES.csv","w");

    while(!feof($archivo)){
        $linea=fgets($archivo);
        $row=explode(",",$linea);
        if(!empty($row[0])&&!empty($row[0])){
            
            //$nombre=str_replace(',',' ',strtoupper($nom));
            //$cadena=$row[0].','.$nombre;
            //str_replace('','"',$cadena);*/
            //FULANITO DE TAL
            $nombre=str_replace('"','',$row[1]); 
            $nomape=explode(',',$nombre);
            $nombre=trim(strtoupper($nomape[1])).' '.trim($nomape[0]);

            $row[0]=str_replace('"','',$row[0]); 
            $row[1]=str_replace('"','',$row[1]); 
            $row[2]=str_replace('"','',$row[2]); 

            //$row[27]=str_replace('"','',$row[27]); 
            //Futbol Inferiores INFERIORES FUTBON INFERIORES
            $cadena=$row[0].','.$row[1].',1';
            //fputs($archivo2,trim($cadena)."\n");
            if(trim($row[2])!=trim("VITALICIO") && strlen($row[1])>0){
                //if(!empty($cadena)){
                   fputs($archivo2,trim($cadena)."\n");
                //}
            }
        }
    }
    fclose($archivo2);

    fclose($archivo);

  

?>
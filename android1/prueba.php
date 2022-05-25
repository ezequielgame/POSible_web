<?php
    $respuesta = array("datos"=>"ok");
    if(isset($respuesta)){
        $datares = array("status"=>200,"registros"=>$respuesta);
    }else{
        $datares = array("startus"=>500);
    }
    echo(json_encode($datares));
?>
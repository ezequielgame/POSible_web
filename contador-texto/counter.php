<?php
    if(isset($_GET["action"])){

        $texto = $_GET["txt"];

        $no_palabras = str_word_count($texto,0);
        $no_caracteres = strlen($texto);

        $datos[0] = array("palabras"=>$no_palabras);
        


        $cont_v = 0;
        $cont_c = 0;
        $spaces = 0;
        for($i = 0; $i < $no_caracteres; $i++){

            if(ctype_alpha($texto[$i])){
                if(in_array(strtolower($texto[$i]),["a","e","i","o","u"])){
                    $cont_v++;
                }else{
                    $cont_c++;
                }                
            }else if(ctype_space($texto[$i])){
                $spaces++;
            }
        }

        $datos[1] = array("caracteres"=>$no_caracteres);
        $datos[2] = array("vocales"=>$cont_v);
        $datos[3] = array("consonantes"=>$cont_c);


    }

    if(isset($datos)){

        $response = array("status"=>0,"contadores"=>$datos);

    }else{
        $response = array("status"=>500,"contadores"=>NULL);
    }

    echo(json_encode($response))

?>
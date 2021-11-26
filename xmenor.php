<?php

$xmenor = $_POST["lista_de_x0"];
$xmayor = $_POST["lista_de_x1"];
$r3menor = $_POST["lista_de_r3"];
$r1mayor = $_POST["lista_de_r1"];

//$xmenor = array ($xmenor);
//$xmayor = array ($xmayor);
$xmenor = array ("x1"=>array("xm"=>"$xmenor"));
                            //"xm"=>"$xmenor"));
$xmayor = array ("x2"=>array("xmy"=>"$xmayor"));
                            //"xmy"=>"$xmayor"));
//$resultado = ($xmenor-$xmayor);
 
$r3menor = array ("r3"=>array("rmy"=>"$r3menor"));
                            //"xm"=>"$xmenor"));
$r1mayor = array ("r1"=>array("rm"=>"$r1mayor"));
                            //"xmy"=>"$xmayor"));


                                                //$xmenor["x1"]["xm"] ."\n" . $xmayor["x2"]["xmy"]
        echo "El intervalo seleccionado es (x): " .$xmayor["x2"]["xmy"] ."\n" . $xmenor["x1"]["xm"]."\n"; 
        echo "El residuo es: " .($xmayor["x2"]["xmy"]-$xmenor["x1"]["xm"])."\n"; 
    echo "\n";
        echo "El intervalo seleccionado es gr(3,1): " .$r3menor["r3"]["rmy"] ."\n" . $r1mayor["r1"]["rm"]."\n"; 
        echo "El residuo es: " .($r3menor["r3"]["rmy"]-$r1mayor["r1"]["rm"]); 
    echo "\n";
        echo "El cosiente es:" ."\n".($xmenor["x1"]["xm"]-$xmayor["x2"]["xmy"])/
        ($r3menor["r3"]["rmy"]-$r1mayor["r1"]["rm"])."\n"; 

        
        
        /*sort($xmenor,$xmayor);
    
        for ($i=0;$i<count($xmenor); $i++){
            echo "El valor de -X es: $xmenor[$i] . <br>";
                foreach($xmenor as $clave=>$valor) {
                    echo "A $clave le corresponde $valor <br><br>";
            }   
        }
        
        for ($i=0;$i<count($xmayor); $i++){
            echo "El valor de +X es: $xmayor[$i] . <br>";   
                foreach($xmayor as $clave=>$valor) {
                    echo "A $clave le corresponde $valor <br><br>";
            }
        }*/
 
       
?>

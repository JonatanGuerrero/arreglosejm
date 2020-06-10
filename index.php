<?php

//declaracion de variables
//las comas separan datos esa es su función, para definir decimales con puntos

// arreglos indexados
$arreglo= array("Juliana", "Jessica", "Fabian", "Valentina", "Juanjo","Deiver");
print_r($arreglo);
echo("<br><br>");

//arreglos asociatvos con "claves"
$arreglo2= array("instrumento1"=>"Guitarra","instrumento2"=>"bajo","instrumento3"=>"Bateria",
                 "instrumento4"=>"Flauta","instrumento5"=>"Guitarra","instrumento6"=>"Piano",);
print_r($arreglo2);

// mostrar una sola posición
echo("<br><br>");
echo($arreglo[0]);
echo("<br><br>");
echo($arreglo2["instrumento6"]);
echo("<br><br>");
echo("-----------------------------------------");
echo("<br><br>");
// foreach arreglos indexados

foreach($arreglo as $elemento){
    echo($elemento);
    echo("<br><br>");

}

echo("<br><br>");
echo("-----------------------------------------");
echo("<br><br>");
// foreach arreglos asociativos

$instrumentosBanda=array("Guitarra electrica","guitarra acustica","bajo","Piano","violin","Flauta");
print_r($instrumentosBanda);
echo("<br>");
foreach($instrumentosBanda as $instrumento){
echo($instrumento);
echo("<br><br>");
}
echo("<br><br>");
echo("-----------------------------------------");
echo("<br><br>");
//matrices

$tienda=array(
"producto1"=>array("papa",1500,3),
"producto2"=>array("pastas",1500,3),
"producto3"=>array("maiz",3000,1),

);
print_r($tienda);


?> 
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

// foreach y clases POO

?>
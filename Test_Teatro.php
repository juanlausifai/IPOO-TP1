<?php

include 'Teatro.php';

$funciones = array();
$funciones[0]= array("nombre"=> "Hamlet" , "precio" => 100);
$funciones[1]= array("nombre"=> "Romeo y Julieta" , "precio" => 200);
$funciones[2]= array("nombre"=> "El Fantasma de la Opera" , "precio" => 300);
$funciones[3]= array("nombre"=> "La Celestina" , "precio" => 400);
  
$t = new Teatro("Teatro Colon","Cerrito 628");
 
$t->setFunciones($funciones);


function seleccionarOpcion(){
    
    $opcion = 0; 
    $opcionValida = false;
 
    echo "--------------------------------------------------------------\n";
    echo "\n ( 1 ) Cambiar nombre del teatro";
    echo "\n ( 2 ) Cambiar direccion del teatro"; 
    echo "\n ( 3 ) Cambiar nombre de la funcion";
    echo "\n ( 4 ) Cambiar precio de la funcion";
    echo "\n ( 5 ) Ver funciones del teatro";
    echo "\n ( 6 ) Salir";
    echo "\n--------------------------------------------------------------\n";  
 
    while ($opcionValida == false) {
       
     echo "Indique una opcion valida: ";
     $opcion = trim(fgets(STDIN));
 
     $opcionValida = $opcion == '1' || $opcion == '2' || $opcion == '3' || $opcion == '4' || $opcion == '5' || $opcion == '6';
 
    }
      
     return $opcion;
 }



do{ 
    $opcion = seleccionarOpcion();
    switch ($opcion) {
        case 1: //Cambiar nombre del teatro
            echo "Ingrese el nuevo nombre del teatro";
            $nuevoNombre = trim(fgets(STDIN));
            $t->cambiarNombreTeatro($nuevoNombre);
            break;
        case 2: //Cambiar dirección del teatro
            echo "Ingrese la nueva direccion del teatro";
            $nuevaDireccion = trim(fgets(STDIN));
            $t->cambiarDireccion($nuevaDireccion);
            break;
        case 3: //Cambiar nombre de la función
            echo $t."\n";
            echo "Ingrese el nombre de la funcion que quiere cambiar \n";
            $busca = trim(fgets(STDIN));
            echo "Ingrese el nuevo nombre de la función \n";
            $nuevoNombre = trim(fgets(STDIN));
            $seCambio = $t->cambiarNombreFuncion($busca, $nuevoNombre);

            if (!$seCambio) {
                echo "No se pudo cambiar el nombre de la funcion!!!!!!!!!!!!!!!!!!!!!!!\n";
            }

            break;
        case 4: //Mostrar la información completa de un número de juego
            echo $t."\n";
            echo "Ingrese el nombre de la funcion que quiere cambiar \n";
            $busca = trim(fgets(STDIN));
            echo "Ingrese el nuevo precio de la funcion \n";
            $nuevoPrecio = trim(fgets(STDIN));
            $seCambio = $t->cambiarPrecioFuncion($busca, $nuevoPrecio);
            if (!$seCambio) {
                echo "No se pudo cambiar el precio de la funcion!!!!!!!!!!!!!!!!!!!!!!!\n";
            }
            break;
        case 5: //Mostrar la información completa del primer juego con más puntaje
            echo $t;
            break;
    }
}while($opcion != 6);
<?php 

if(isset($_POST["calcular"])){

    $taller1 = $_POST["txttaller1"];
    $taller2 = $_POST["txttaller2"];
    $cuestionario1 = $_POST["txtcuestionario1"];
    $cuestionario2 = $_POST["txtcuestionario2"];
    $proyectofinal = $_POST["txtproyectofinal"];

    $valortaller1 = $taller1 * 0.20;
    $valortaller2 = $taller2 * 0.15;
    $valorcuestionario1 = $cuestionario1 * 0.22;
    $valorcuestionario2 = $cuestionario2 * 0.10;
    $valorproyectofinal = $proyectofinal * 0.33;

    $definitiva = $valortaller1 + 
                  $valortaller2 + 
                  $valorcuestionario1 + 
                  $valorcuestionario2 + 
                  $valorproyectofinal;
    
    echo "La nota final de estudiante es " . $definitiva;

}else{

    echo "Realiza el cálculo correspondiente.";

}

?>
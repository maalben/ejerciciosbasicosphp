<?php 

if(isset($_POST["evaluar"])){

$edad = $_POST["txtedad"];

if($edad >= 0 && $edad <= 10){
    echo "Niño";
}elseif($edad >= 11 && $edad <= 14){
    echo "Pre adolescente";
}elseif($edad >= 15 && $edad <= 18){
    echo "Adolescente";
}elseif($edad >= 19 && $edad <= 25){
    echo "Jóven";
}elseif($edad >= 26 && $edad <= 65){
    echo "Adulto";
}elseif($edad > 65){
    echo "Anciano";
}else{
    echo "Valor incorrecto";
}

}else{
    echo "No has presionado el botón.";
}

?>
<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type', 'application/json; charset=UTF-8');


header('Access-Control-Allow-Methods: POST ');
/* $pregunta->respuestas = array("respuesta1"=>8850,"respuesta2"=>8900,"respuesta3"=>8875); */

$array[] = array(
        "id"=>"1",
        "nombre"=>"Juan",
        "telefono"=>"1234567",
        "profesion"=> "Arquitecto",
        "ciudad"=>"Talcahuano");
$array[] = array(
        "id"=>"2",
        "nombre"=>"Pedro",
        "telefono"=>"1234569",
        "profesion"=> "Profesor",
        "ciudad"=>"Talcahuano");
$array[] = array(
        "id"=>"3",
        "nombre"=>"PedroPablo",
        "telefono"=>"1234561",
        "profesion"=> "Arquitecto",
        "ciudad"=>"Talcahuano");
$array[] = array(
        "id"=>"4",
        "nombre"=>"PabloMarmol",
        "telefono"=>"1234562",
        "profesion"=> "Ingeniero",
        "ciudad"=>"Concepcion");
$array[] = array(
        "id"=>"5",
        "nombre"=>"EduardoSalinas",
        "telefono"=>"1234563",
        "profesion"=> "Arquitecto",
        "ciudad"=>"Concepcion");
             



$json = json_encode($array);
print_r($json)


?>
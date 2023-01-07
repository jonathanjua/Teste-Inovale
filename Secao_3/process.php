<?php

//valor de peso em hexadecimal
$weight_values = array();

//Informações se o peso esta em quilogramas ou gramas
$weight_unit = array();

//microcontrolador com informações das pesagens 
$microcontroller = array();

//coletar as informações das pesagens 
foreach($microcontroller  as $weighing) {

    //coleta o valor do peso em hexadecimal e informações sobre a unidade de peso
    $weight_values = getWeightValue($weighing->pppp);
    $weight_unit = getWeightUnit($weighing->k);

     //verifica estabilidade da pesagem
     $stability = getStability($weighing->e);

    //Envia as informações de peso para o microcontrolador principal 
    if ($stability) {
        sendWeightData($weightValues, $weightUnit);
    }

    // espera o caractere 'C' ser recebido via interface serial
    while (getSerialInput() != 'C') {
        
    }
}

//microcontrolador principal recebe e processa dados de peso
$processedData = processWeightData();

// microcontrolador principal envia os dados processados ​​para o computador via USB
sendDataToComputer($processedData);

//Receber o valor do peso em hexadecimal
function getWeightValue($pppp)
{
    return hexdec($pppp);
}

//se o peso está em quilogramas ou gramas
function getWeightUnit($k)
{
    if($k == 1){
        return 'quilograma';
    }

    if($k == 0){
        return 'grama';
    }
}

//receber entrada via interface serial
function getSerialInput()
{
}

//verificar a estabilidade da pesagem
function getStability($e)
{
    if($e == 1){
        return true;
    }

    if($e == 0){
        return false;
    }
}

//Enviar o valor de peso e unidade para o microcontrolador principal 
function sendWeightData($weightValue, $weightUnit)
{
}

//processar dados de peso
function processWeightData()
{
}

//enviar dados ao computador via USB
function sendDataToComputer($data)
{
}

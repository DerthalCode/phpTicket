<?php


$bilietas = $_POST;

if(isset($_POST)) {
    $file = 'savedTicket.txt';
    $current = file_get_contents($file);
    $data = implode(', ', $_POST);
    $current .= $data."\n";
    file_put_contents($file, $current);
}
// $readyTickets = "savedTicket.txt";
// $lines = file($readyTickets);//file in to an array
// var_dump($lines);
function getData(){
    $savedT = file_get_contents('savedTicket.txt');
    //$savedT = explode('/n', $savedT); //konvertuojam i masyva is stringo
    $array = preg_split("/\r\n|\n|\r/", $savedT);
    return $array;
}


if($bilietas['bagazas'] > 20)
{
    $bilietas['kaina'] +=30;
}

if($_POST['iskur'] == $_POST['ikur'])
{
    return header("location:javascript://history.go(-1)");
}

echo "<pre>"; print_r($bilietas); echo "</pre>";

/* if(isset($_POST))
{
    echo "<pre>"; print_r($_POST); echo "</pre>";
} */

include_once '../view/ticket.view.php';

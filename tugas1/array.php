<?php
$jsonobj = '{"Strawberry":100,"Sawo":80,"Manggis":60}';

$arrBuah = json_decode($jsonobj, true);

echo $arrBuah["Strawberry"] ;
echo $arrBuah["Sawo"] ;
echo $arrBuah["Manggis"] ;
?>
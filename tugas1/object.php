<?php
$jsonobj = '{"Starwberry":100,"Sawo":80,"Manggis":60}';

$buah = json_decode($jsonobj);

echo $buah->Starwberry;
echo $buah->Sawo;
echo $buah->Manggis;
?>
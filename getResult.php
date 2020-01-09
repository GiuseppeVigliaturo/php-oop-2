<?php
include "configurazione.php";
$persona1 = new Persona(Giuseppe,Vigliaturo);
echo $persona1. "<br>";

$ospite1 = new Ospite(Mario,Rossi,28021994);
echo $ospite1. "<br>";

$pagante1 = new Pagante(Max,Pezzali,NordSudOvestEst);
echo $pagante1. "<br>";

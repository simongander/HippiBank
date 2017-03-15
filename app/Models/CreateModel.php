<?php

$pdo = connectToDatabase();


$hypoPackets = GetHypoPackets();

$Risk = $pdo->prepare('SELECT * FROM risikostufe');
$Risk->execute();
$riskSteps = $Risk->fetchAll();

?>

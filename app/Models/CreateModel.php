<?php

$pdo = connectToDatabase();


$Hypo = $pdo->prepare('SELECT * FROM mortgages');
$Hypo->execute();
$hypoPackets = $Hypo->fetchAll();

$Risk = $pdo->prepare('SELECT * FROM Risikostufe');
$Risk->execute();
$riskSteps = $Risk->fetchAll();
?>

<?php

$pdo = connectToDatabase();


$hypoPackets = GetHypoPackets();

$Risk = $pdo->prepare('SELECT * FROM risikostufe');
$Risk->execute();
$riskSteps = $Risk->fetchAll();

function SaveToDatabase($name, $email, $phone, $riskStep, $hypoPacket, $payback)
{
$Save = $pdo->prepare('INSERT INTO verleihe VALUES (:name, :email, :phone, :riskStep, :hypoPacket, :payback)');

$Save->BindParam(':name', $name);
$Save->BindParam(':email', $email);
$Save->BindParam(':phone', $phone);
$Save->BindParam(':riskStep', $riskStep);
$Save->BindParam(':hypoPacket', $hypoPacket);
$Save->BindParam(':payback', $payback);

$Save->execute();
}

?>

<?php
function SaveToDatabase($name, $email, $phone, $createDate, $paybackDate, $riskStep, $hypoPacket)
{
$pdo = connectToDatabase();
$Save = $pdo->prepare('INSERT INTO verleihe(name, email, telefon, erstelldatum, rückzahldatum, fk_risikostufe, fk_hypopaket) VALUES (:name, :email, :phone, :createDate, :paybackDate, :riskStep, :hypoPacket)');
$Save->BindParam(':name', $name);
$Save->BindParam(':email', $email);
$Save->BindParam(':phone', $phone);
$Save->BindParam(':riskStep', $riskStep);
$Save->BindParam(':createDate', $createDate);
$Save->BindParam(':paybackDate', $paybackDate);
$Save->BindParam(':hypoPacket', $hypoPacket);


$Save->execute();
}
?>

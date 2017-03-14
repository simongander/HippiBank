<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=HippiBank', root, '');
} catch (PDOException $e) {
 die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
}


$Hypo = $pdo->prepare('SELECT package FROM mortgages');
$Hypo->execute();
$hypoPacket = $HypoPaket->fetchAll();

$Risk = $pdo->prepare('SELECT Risikostufe FROM Risikostufe');
$Risk->execute();
$riskSteps = $Risk->fetchAll();
?>

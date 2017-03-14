<?php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=kurseictbz_30707', 'kurseictbz_30707', 'db_307_pw_07');
} catch (PDOException $e) {
 die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
}


$Hypo = $pdo->prepare('SELECT * FROM mortgages');
$Hypo->execute();
$hypoPackets = $Hypo->fetchAll();

$Risk = $pdo->prepare('SELECT * FROM Risikostufe');
$Risk->execute();
$riskSteps = $Risk->fetchAll();
?>

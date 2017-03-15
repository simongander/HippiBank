<?php
$hypoPackets = GetHypoPackets();
$pdo = connectToDatabase();

$id = $_POST['value'];
$statement = $pdo->prepare('SELECT * FROM verleihe where VerleihID="'.$id.'"');
$statement->execute();
$Borrowing = $statement ->fetchAll()[0];
$currentHypoPacket = $hypoPackets[0];

require('app/Views/ManipulateFormView.php');
?>

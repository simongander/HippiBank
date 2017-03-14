<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=HippiBank', 'root', '');
} catch (PDOException $e) {
 die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
}


$Borrowing = $pdo->prepare('SELECT * FROM verleihe');
$Borrowing->execute();
$Borrowings = $Borrowing->fetchAll();
?>

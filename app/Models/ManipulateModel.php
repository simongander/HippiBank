<?php
  $hypoPackets = GetHypoPackets();
  $pdo = connectToDatabase();

  $Borrowing = $pdo->prepare('SELECT * FROM verleihe');
  $Borrowing->execute();
  $Borrowings = $Borrowing->fetchAll();
?>

<?php

$pdo = connectToDatabase();

$Borrowing = $pdo->prepare('SELECT * FROM verleihe where Rückzahlungsstatus = 0 order by Erstelldatum desc' );
$Borrowing->execute();
$Borrowings = $Borrowing->fetchAll();

function getHypoPacket($id, $pdo)
{
  $Packets = $pdo->prepare('SELECT * FROM mortgages where id = '.$id );
  $Packets->execute();
  return $Packets->fetchAll()[0]['package'];
}
?>

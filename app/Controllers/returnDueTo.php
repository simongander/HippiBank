<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=HippiBank', 'root', '');
} catch (PDOException $e) {
 die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
}

$id = $_POST['value'];
$dueto = Date('d.m.Y', strtotime('+'.$id.' days'));

if ($id == 'Risiko-Stufe') {
  echo '<div class="form-group" id="duetoOutput"></div>';
} else {
  echo <<<END
        <div class="form-group" id="duetoOutput">
          <label for="duetoField">Zahlbar Bis</label>
          <input class="form-control" id="duetoField" placeholder="$dueto" disabled>
        </div>
END;
};
$statement = $pdo->prepare('SELECT * FROM morages where id="'.$id.'"');
$statement->execute();
$result = $statement ->fetchAll();
?>

<?php
$pdo = connectToDatabase();

$id = $_POST['value'];
$statement = $pdo->prepare('SELECT Verleihdauer, RisikoID FROM risikostufe where RisikoID="'.$id.'"');
$statement->execute();
$result = $statement ->fetchAll();

$dueto = Date('d.m.Y', strtotime('+'.$result[0][Verleihdauer].' days'));


if ($id == 'null') {
  echo '<div class="form-group" id="duetoOutput"></div>';
}
else {
  echo <<<END
        <div class="form-group" id="duetoOutput">
          <label for="duetoField">Zahlbar Bis</label>
          <input class="form-control" id="duetoField" placeholder="$dueto" disabled>
        </div>
END;
};
?>

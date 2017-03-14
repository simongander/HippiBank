<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bearbeitung</title>
</head>
<body>
  <form>
    <br>
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="phone">Telefonnummer</label>
      <input class="form-control" id="phone" placeholder="Telefonnummer">
    </div>

    <div class="row">
      <div class="col-md-6">
        <label for="hypoPacketDropdown">Hypo-Packet</label>
        <select class="btn" style="display: block; width: 100%;" id="hypoPacketDropdown">
          <option value="Risiko-Stufe">Hypo-Packet</option>
          <?php
            foreach($hypoPackets as $hypoPacketId=>$hypoPacket){
              echo '<option value="'.$hypoPacketId.'">'.$hypoPacket.'</option>';
            };
            ?>
        </select>
      </div>
      <div class="col-md-6">
        <label for="isPaidback">Zurückzahlungsstatus</label>
        <select id="isPaidback" class="btn" style="display: block; width: 100%;">
          <option value="0">Ausstehend</option>
          <option value="1">Zurückgezahlt</option>
        </select>
      </div>
    </div>
    <br>
    <div class="form-group">
      <input type="submit" value="Ändern" class="btn btn-primary col-sm-12">
    </div>
    <br>
    <br>
    <br>
  </form>
</body>
</html>

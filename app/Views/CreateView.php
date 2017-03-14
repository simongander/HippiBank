<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Erfassung</title>
</head>
<body>
  <br>
  <form>
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
        <label for="riskStepDropdown">Risiko-Stufe</label>
        <select class="btn" style="display: block; width: 100%;" id="riskStepDropdown">
          <option value="Risiko-Stufe">Risiko-Stufe</option>
          <?php
            foreach($riskSteps as $riskStep){
              echo '<option value="'.$riskStep[Id].'">'.$riskStep[Risikostufe].'</option>';
            };
          ?>
        </select>
      </div>
      <div class="col-md-6">
        <label for="hypoPacketDropdown">Hypo-Paket</label>
        <select class="btn" style="display: block; width: 100%;" id="hypoPacketDropdown">
          <option value="Risiko-Stufe">Hypo-Pakket</option>
          <?php
            foreach($hypoPackets as $hypoPacket){
              echo '<option value="'.$hypoPacket[id].'">'.$hypoPacket[package].'</option>';
            };
            ?>
        </select>
      </div>
    </div>
    <br>
    <div class="form-group">
      <input type="submit" value="Eintragen" class="btn btn-primary col-sm-12">
    </div>
    <br>
    <br>
    <br>
  </form>
</body>
</html>

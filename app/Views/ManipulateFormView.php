<form>
  <hr>
  <br>
  <div class="form-group">
    <label for="name">Name</label>
    <?= '<input class="form-control" id="name" placeholder="'.$Borrowing['Name'].'">'; ?>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <?= '<input class="form-control" id="email" placeholder="'.$Borrowing['Email'].'">'; ?>
  </div>
  <div class="form-group">
    <label for="phone">Telefonnummer</label>
    <?= '<input class="form-control" id="phone" placeholder="'.$Borrowing['Telefon'].'">'; ?>
  </div>

  <div class="row">
    <div class="col-md-6">
      <label for="hypoPacketDropdown">Hypo-Paket</label>
      <select class="btn" style="display: block; width: 100%;" id="hypoPacketDropdown">
        <option value="null">Hypo-Paket</option>
        <?php
        foreach($hypoPackets as $hypoPacket){
          if ($hypoPacket['id'] == $Borrowing['fk_HypoPaket']) {
            echo '<option value="'.$hypoPacket['id'].'">'.$hypoPacket['package'].'</option>';
          } else {
            echo '<option selected="selected" value="'.$hypoPacket['id'].'">'.$hypoPacket['package'].'</option>';
          }
          };
          ?>
      </select>
    </div>
    <div class="col-md-6">
      <label for="isPaidback">Zurückzahlungsstatus</label>
      <select id="isPaidback" class="btn" style="display: block; width: 100%;">
        <?php
           if($Borrowing['Rückzahlungsstatus'] == 1) {
             echo '<option value="0">Ausstehend</option>';
             echo '<option selected="selected" value="1">Zurückgezahlt</option>';
           } else {
             echo '<option selected="selected" value="0">Ausstehend</option>';
             echo '<option value="1">Zurückgezahlt</option>';
           }
         ?>

      </select>
    </div>
  </div>
  <br>
  <div class="form-group">
    <input type="submit" value="Ändern" class="btn btn-warning col-sm-12">
  </div>
  <br>
  <br>
  <br>
</form>

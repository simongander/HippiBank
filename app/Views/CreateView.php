<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Erfassung</title>
   </head>
   <body>
      <br>
      <form action="app/Controllers/ValidateController.php" method="post">
         <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" placeholder="Name" required></input>
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required></input>
         </div>
         <div class="form-group">
            <label for="phone">Telefonnummer</label>
            <input class="form-control" id="phone" name="phone" placeholder="Telefonnummer" required></input>
         </div>
         <div class="row">
            <div class="col-md-6">
               <label for="riskStepDropdown">Risiko-Stufe</label>
               <select class="btn" style="display: block; width: 100%;" id="riskStepDropdown" name="riskStepDropdown">
                  <option value="null">Risiko-Stufe</option>
                  <?php
                     foreach($riskSteps as $riskStep){
                       echo '<option value="'.$riskStep[RisikoID].'">'.$riskStep[Risikostufe].'</option>';
                     };
                     ?>
               </select>
            </div>
            <div class="col-md-6">
               <label for="hypoPacketDropdown">Hypo-Paket</label>
               <select class="btn" style="display: block; width: 100%;" id="hypoPacketDropdown" name="hypoPacketDropdown">
                  <option value="null">Hypo-Paket</option>
                  <?php
                     foreach($hypoPackets as $hypoPacket){
                       echo '<option value="'.$hypoPacket[id].'">'.$hypoPacket[package].'</option>';
                     };
                     ?>
               </select>
            </div>
         </div>
         <br>
         <div class="form-group" id="duetoOutput">
         </div>
         <br>
         <div class="form-group">
            <input type="submit" value="Eintragen" class="btn btn-primary col-sm-12" />
         </div>
         <br>
         <br>
         <br>
      </form>
      <script>
         $('#riskStepDropdown').on("change", function(){
                       value = $(this).val();
                       $.ajax({
                           type: "POST",
                           url: "riskStepSelected",
                           data:{ value: value },
                       }).done(function (data) {
                         console.log(data);
                         var $htmlStr = $(data);
                         $('#duetoOutput').replaceWith($htmlStr.find('#duetoOutput'));
                       });
                   });
      </script>
   </body>
</html>

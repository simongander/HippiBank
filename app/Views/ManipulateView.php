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
            <label for="borrowingSelection">Verleihe</label>
            <select class="btn" style="display: block; width: 100%;" id="borrowingSelection">
               <option value="null">Verleihe</option>
               <?php
                  foreach($Borrowings as $Borrowing){
                    echo '<option value="'.$Borrowing['VerleihID'].'">'.$Borrowing['VerleihID'].', von '.$Borrowing['Name'].'</option>';
                    };
                    ?>
            </select>
         </div>
         <br>
      </form>
      <output></output>
      <script>
         $('#borrowingSelection').on("change", function(){
                       value = $(this).val();
                       if (value == 'null') return;
                       $.ajax({
                           type: "POST",
                           url: "borrowingSelected",
                           data:{ value: value },
                       }).done(function (data) {
                         console.log(data);
                         var $htmlStr = $(data);
                         $('output').replaceWith($htmlStr.find('form'));
                       });
                   });
      </script>
   </body>
</html>

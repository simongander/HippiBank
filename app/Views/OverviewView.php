<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
   </head>
   <body>
      <table class="table">
         <thead>
            <tr>
               <th>#</th>
               <th>Name</th>
               <th>Hypo-Paket</th>
               <th>Zahlbar bis</th>
               <th>In Frist</th>
            </tr>
         </thead>
         <tbody>
            <?php
               foreach($Borrowings as $Borrowing){
                 $borrowingIcon= Date('Y, M, d',strtotime($Borrowing['Rückzahldatum'])) > Date('Y, M, d') ? '💸' : '🚨';
                 $packet = getHypoPacket($Borrowing['fk_HypoPaket'], $pdo);
                echo <<<END
                <tr>
                   <th scope="row">$Borrowing[VerleihID]</th>
                   <td>$Borrowing[Name]</td>
                   <td>$packet</td>
                   <td>$Borrowing[Rückzahldatum]</td>
                   <td>$borrowingIcon</td>
                </tr>
               END;
               }          
                ?>
         </tbody>
      </table>
   </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Übersicht</title>
</head>
<body>
  <?php
    foreach($Borrowings as $Borrowing) {
      echo print_r($Borrowing).'<br>';
    };
   ?>
</body>
</html>

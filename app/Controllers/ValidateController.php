<?php
require 'app\Models\ValidateModel.php';
  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $riskstep = $_POST['riskStepDropdown'] ?? '';
    $hypopacket = $_POST['hypoPacketDropdown'] ?? '';
    $payback = $_POST['duetoOutput'] ?? '';
	  if (!preg_match( '/[0-9][+][-][ ]/', $phone )) die( 'Der eingegebene Telefonnummer enthält nicht erlaubte Zeichen!' );
    if (!preg_match( '/[@]/', $email )) die( 'Die eingegebene Email enthält kein @!' );

    SaveToDatabase($name, $email, $phone, $riskstep, $hypopacket, $payback);
  }
?>

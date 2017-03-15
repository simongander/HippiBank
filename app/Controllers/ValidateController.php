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

    SaveToDatabase($name, $email, $phone, $riskstep, $hypopacket, $payback);
  }
?>

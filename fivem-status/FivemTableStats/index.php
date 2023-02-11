<?php
include 'ServerStatus.php';

use EpEren\Fivem\ServerStatus;

$Server= ServerStatus::FivemBased("y8z3z5");

// print_r($Server->Get()); // Get directly 

if($Server->IsOnline()){
  $Data=$Server->GetCached();
  // print_r($Data); // Explore all props
?>
<div style='background-color: #f2f2f2; border: 4px double black; border-radius: 20px; width: 500px; padding: 2px; border: 4px double black;'>
<table style="width:40%">
  <tr>
    <th>————————————————————</th>
    <th>————————————————————</th>
  </tr>
  <tr>
    <th style="color:red;">Име</th>
    <th style="color:red;">Пинг</th>
  </tr>
  <tr>
    <th>————————————————————</th>
    <th>————————————————————</th>
  </tr>
  <?php
  for ($i=0; $i <count($Data["players"]) ; $i++) {
  ?>
  <tr>
    <th><?php echo $Data["players"][$i]["name"]; ?></th>
    <th><?php echo $Data["players"][$i]["ping"]; ?></th>
  </tr>
  <tr>
    <th>====================</th>
    <th>====================</th>
  </tr>
  <?php
  }

  ?>
</table>

<?php
}else{
  echo "Offline";
}
?>
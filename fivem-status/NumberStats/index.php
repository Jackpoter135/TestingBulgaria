<?php
/*-----------------------[ НАСТРОЙКИ ]------------------------------*/
$server_settings['ip'] = "93.123.16.198"; //IP адрес за връзка със сървъра
$server_settings['port'] = "30120"; // Основният порт трябва да бъде 30120 (ако не е променен)
$server_settings['max_slots'] = 48; //Макс. слот за играч (по подразбиране 64 може и 48)
/*----------------------------------------------------------------*/
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
	$SRV_STATUS = "<font style='color: green;'>Включен</font>";
	print "<p align='center'><strong>Граждани:</strong> $pl_count / $server_settings[max_slots]</p>";
else:
	$SRV_STATUS = "<font style='color: red;'>Изключен</font>";
endif;
print "<br/><hr/><p align='center'><strong>Статус: $SRV_STATUS</strong></p></div>";
?>

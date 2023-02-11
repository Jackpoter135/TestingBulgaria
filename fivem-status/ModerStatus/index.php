<?php
/*-----------------------[ НАСТРОЙКИ ]------------------------------*/
$server_settings['title'] = "《🌐》UniverseRp《🌐》"; // Име на сървъра за показване
$server_settings['ip'] = "93.123.16.198"; //IP адрес за връзка със сървъра
$server_settings['port'] = "30120"; // Основният порт трябва да бъде 30120 (ако не е променен)
$server_settings['max_slots'] = 64; //Макс. слот за играч (по подразбиране 64 може и 48)
/*----------------------------------------------------------------*/
print "<div style='background-color: #B0B0B0; border: 4px double black; border-radius: 20px; width: 300px; padding: 2px; border: 4px double black;'>";
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
$img_d64 = $content['icon'];
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
	$SRV_STATUS = "<font face= Brush Script MT' style='color: green;'>Включен</font><font>《🤖》</font>";
	if($img_d64) { print "<div align='center'><img  width='150' src='data:image/png;base64, $img_d64' ></div>"; }
	print "<p face= Brush Script MT' align='center' style='color:#000000; background-color: #B0B0B0;'><strong>$server_settings[title]</strong></p>";
	print "<p face= Brush Script MT' align='center'><strong>《🙍‍♂️》Граждани:</strong> $pl_count / $server_settings[max_slots]《🙍‍♂️》</p>";
else:
	print "<p face= Brush Script MT' align='center' style='color:#000000; background-color: #ffffff;'><strong>$server_settings[title]</strong></p>";
	$SRV_STATUS = "<font face= Brush Script MT' style='color: red;'>Изключен</font><font>《🤖》</font>s";
endif;
print "<br/><hr/><p align='center'><strong>《🤖》Status: $SRV_STATUS</strong></p></div>";
?>

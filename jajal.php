<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/13bc93ae177d93f9/conditions/q/CA/San_Francisco.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/13bc93ae177d93f9/astronomy/q/Australia/Sydney.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/13bc93ae177d93f9/planner_MMDDMMDD/q/CA/San_Francisco.json");
	$parsed_json = json_decode ($json_string);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	$location = $parsed_json->{"current_observation"}->{"display_location"}->{"state_name"};
	$location1 = $parsed_json->{"current_observation"}->{"display_location"}->{"full"};
	$location2 = $parsed_json->{"current_observation"}->{"display_location"}->{"zip"};
	
	$test = $parsed_json2->{"moon_phase"}->{"phaseofMoon"};
	$test2 = $parsed_json2->{"moon_phase"}->{"ageOfMoon"};
	$test3 = $parsed_json2->{"moon_phase"}->{"hemisphere"};
	
	
	$a = $parsed_json3->{"trip"}->{"title"};
	$a2 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"epoch"};
	$a3 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"day"};
	
	echo "Berada di Negara : ${location}\n";
	 echo "<br>";	
	echo "di Kota : ${location1}\n";
    echo "<br>";	
	echo "Kode ZIP : ${location2}\n";
    echo "<br>";	
	echo "<br>";	
		
	echo "Fase bulan di Sanfrisco melalui astronomy yaitu fase : ${test}\n";
	echo "<br>";
	echo "Umur Bulan : ${test2}\n";
	echo "<br>";
	echo "Di Bagian Bumi Manakah Bulan itu Muncul : ${test3}\n";
	echo "<br>";
	echo "<br>";	
		
	echo "Jumlah hari dibulan November : ${a}\n";
	echo "<br>";
	echo "Masa Bulan : ${a2}\n";
	echo "<br>";
	echo "Berapa Hari Dalam Sebulan : ${a3}\n";
	echo "<br>";
?>
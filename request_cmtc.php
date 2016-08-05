<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/web_service/test2_v1oz/test2.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $exec = curl_exec($curl);
    curl_close($curl);

	//print_r(json_decode($exec));

	$data = json_decode($exec);
	foreach ($data as $key => $value)
	{
		echo 'ภาพยนต์เรื่อง- '.$value->title;
		echo '<br>';
		echo 'คะเเนนรีวิว- '.$value->rating;
		echo '<br>';
		echo 'ภาพโปสเตอร์หนัง- '.$value->image;
		echo '<br>';
		echo 'ออกฉายเมื่อปี- '.$value->releaseYear;
		echo '<br>';
		echo 'ประเภทหนัง- '.$value->0;
		echo '<hr>';
		
	}

    //var_dump(json_decode($exec));
?>
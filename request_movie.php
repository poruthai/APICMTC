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
		echo '�Ҿ¹������ͧ: '.$value->tle;
		echo '<br>';
		
		
		
	}

    //var_dump(json_decode($exec));
?>
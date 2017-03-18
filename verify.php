<?php
	$access_token = 'VO6tjXLu7VVRJSkXmqIFMQywC5hYYdl7iO8/Xy5p0OcmoVrk5WMaF1+opJxVzAcFAN6OLVfDyYeEgA9f34FKjOEY8iECw0v6JiFbevFKhqiqJpjB4iBMifWyt8JSMzVKWpPEr8aQfkJwCklnG3f+7AdB04t89/1O/w1cDnyilFU=';

	$url = 'https://api.line.me/v1/oauth/verify';

	$headers = array('Authorization: Bearer ' . $access_token);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result = curl_exec($ch);
	curl_close($ch);

	echo $result;
?>
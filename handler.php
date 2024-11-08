<?php
echo "Hello, World! 2";

$inputStream 	= file_get_contents("php://input");
//file_put_contents ("koshelev_handler.txt", $inputStream, FILE_APPEND);

$site	= 'coshelev.ru';		// for Agr
$phone	= '9506080027';

//file_put_contents ("koshelev_handler.txt", "before start", FILE_APPEND);

//$extra = json_decode($inputStream);
$extra = $inputStream;
file_put_contents ("koshelev_handler.txt", $extra, FILE_APPEND);

$data = $extra;
//file_put_contents ("koshelev_handler.txt", $data, FILE_APPEND);
$url = 'http://mainappl.main.luidorauto.ru/sys_agr/hs/webhooks/anypost/v1';

//$url = 'http://mainappl.main.luidorauto.ru/sys_agr/hs/whats_app_webhook';

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,		$url);
curl_setopt($ch,CURLOPT_POST, 		true);
curl_setopt($ch,CURLOPT_POSTFIELDS, 	$data);
$result = curl_exec($ch);

file_put_contents ("koshelev_handler.txt", $result, FILE_APPEND);

?>

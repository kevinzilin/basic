<?php
class Fun {
	public static function getCurl($url) {
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		$str=curl_exec($ch);
		curl_close($ch);
	}
	
	public static function postCurl(){
		self::getCurl();
	}
}

?>
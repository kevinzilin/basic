<?php
class Fun {
	public static function getCurl($url) {
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出
		$str=curl_exec($ch);
		curl_close($ch);
		return $str;
	}
	
	public static function postCurl(){
		
	}
}

?>
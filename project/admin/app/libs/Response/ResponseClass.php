<?php
class Response{
	/**
	 * 按json方式输出通信数据
	 * @param  integer $code    状态码
	 * @param  string $message 提示信息
	 * @param  array  $data    数据
	 * @return string          
	 */
	public static function json($code , $message = "" , $data = array())
	{
		if(!is_numeric($code))
		{
			return '';
		} 

		$result = array(
			'code' => $code,
			'message' => $message,
			'data' => $data,
		);
		// print_r($result);die;
		echo json_encode($result);
		exit;
	}

	public static function xmlEncode($code,$message,$data = array())
	{
		
		if(!is_numeric($code))
		{
			return '';
		}

		$result =array(
        	'code' => $code,
        	'message' => $message,
        	'data' => $data,
		);

		header("Content-Type:text/xml");
		$xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
		$xml .= "<root>\n";

		$xml .= self::xmlToEncode($result);

		$xml .= "</root>\n";
		echo $xml;
	}

	public static function xmlToEncode($data)
	{
		$xml = "";
		foreach($data as $key => $value) {
			if(is_numeric($key)) {
				$attr = " id='{$key}'";
				$key = "item";
			}
			$xml .= "<{$key}>";
			$xml .= is_numeric($value) ? self::xmlToEncode($value) : $value;
			$xml .= "</{$key}>";
		}
		return $xml;
	} 
}
?>
<?php
	
	function get_client_ip(){
	
			if($_SERVER['REMOTE_ADDR'])
		{
			$cip = $_SERVER['REMOTE_ADDR'];
		}elseif(getenv("REMOTE_ADDR")){
			$cip =getenv("REMOTE_ADDR");
		}elseif(getenv("HTTP_CLIENT_IP")){
			$cip = getenv("HTTP_CLIENT_IP");
		}else{
			$cip = 'unknown';
		}
			return $cip;
		}

		echo "你的ip地址是".get_client_ip();
		
		
		function getipinfo(){
			header("Content-Type:text/html;   charset=utf-8");
			$url = 'http://1111.ip138.com/ic.asp';  //这儿填页面地址
			$info=httpGet($url);
			$p = "%<center>(.*?)</center>%si";
			preg_match_all($p, $info, $arr);
			
			$info=$arr[1];
			$str1 = explode("[",iconv('GB2312', 'UTF-8',$info[0]));
			$str2 = explode("]",$str1[1]);
			$ip=$str2[0].'_'.substr($str2[1],10);
			return $ip;
		 }

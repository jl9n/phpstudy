<?php 
    #�����������㷨
    
    class Short_Url {
        #�ַ���
        public static $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

        public static function short($url) {
            $key = "alexis";
            $urlhash = md5($key . $url);
            $len = strlen($urlhash);

            #�����ܺ�Ĵ��ֳ�4�Σ�ÿ��4�ֽڣ���ÿ�ν��м��㣬һ�������������������
            for ($i = 0; $i < 4; $i++) {
                $urlhash_piece = substr($urlhash, $i * $len / 4, $len / 4);
                #���ֶε�λ��0x3fffffff��λ�룬0x3fffffff��ʾ����������30��1����30λ�Ժ�ļ��ܴ�������
                $hex = hexdec($urlhash_piece) & 0x3fffffff; #�˴���Ҫ�õ�hexdec()��16�����ַ���תΪ10������ֵ�ͣ���������᲻����

                $short_url = "http://t.cn/";
                #����6λ������
                for ($j = 0; $j < 6; $j++) {
                    #���õ���ֵ��0x0000003d,3dΪ61����charset���������ֵ
                    $short_url .= self::$charset[$hex & 0x0000003d];
                    #ѭ�����Ժ�hex����5λ
                    $hex = $hex >> 5;
                }

                $short_url_list[] = $short_url;
            }

            return $short_url_list;
        }
		
		public 	function console($log='')
{
    switch (empty($log)) {
        case False:
            $out = json_encode($log);
            $GLOBALS['console'] .= 'console.log('.$out.');';
            break;
        
        default:
            echo '<script type="text/javascript">'.$GLOBALS['console'].'</script>';
    }
}
    }
	
	

    $url = "http://www.cnblogs.com/zemliu/";
    $short = Short_Url::short($url);
    print_r($short);
	//$short->console($short);
?>
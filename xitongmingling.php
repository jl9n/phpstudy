<?php
	
	#system() 输出并返回最后以行shell结果
	#exec()   不输出结果 返回最后一样shell结果,所有结果可以保存到一个返回的数组里面
	#passthru() 只调用命令,把命令的执行结果原样地直接输出到标准输出设备上
	
	#system('dir');
	
	#exec('dir');
	
	#passthru('dir');
	
	#echo `dir`;
	
	#system("/usr/local/bin/webalizer/webalizer");
	
	#exec('/bin/ls -l');
	
	#exec('/bin/ls -l',$res);
	
	#exec('/bin/ls -l',$res,$rc);
	
	#header('Content-type:image/gif');
	
	#passthru('./ppmtogif hunte.ppm');
	
	#用popen()函数打开进程
	#$fp = popen("/bin/ls -l",'r');
	
	/*php中如何增加一个系统用户
	#下面是一段例程,增加一个名字为james的用户
	#root密码是verygood 
	*/
	
	/*
	$sucommand = "su --login root --command";
	$useradd = "useradd";
	$rootpasswd = "verygood";
	$user = "james";
	$user_add=sprintf("%s""%s%s",$sucommand,$useradd,$user);
	$fp = @popen($user_add,"w");
	@fputs($fp,$rootpasswd);
	@pclose($fp);
	*/
	#php 的mail函数
	/*
	$to = "somebody@example.com";
	$subject = "My subject";
	$txt = "Hello world";
	$headers = "FROM: webmaster@example.com".'\r\n'."CC:somebody@example";
	mail($to,$subject,$txt,$headers);
	*/
	
	#system("mail $to < products.txt");
	#echo "我们的产品目录已经发送到你的信箱:$to";
	
	#EscapeShellCmd 除去字符串中的特殊符号;
	#EscapeShellArg 把字符串转码为可以在shell命令里面使用的参数
	
	#self 是指向类本身,也就是self是不指向任何已经实例化的对象,一般self使用来指向
	#类中的静态变量
	
	/*
	*php单例模式实现
	*单例类至少拥有以下三种公共元素:
	*必须拥有一个构造函数,并且必须被标记为private.
	*拥有一个保存类的实例的静态成员变量.
	*拥有一个访问这个实例的公共的静态方法
	*/
	
	class Mysql{
		//该属性用来保存实例
		private static $conn;
		//构造函数为private,防止创建对象
		private function __construct(){
			
			$this->conn =mysql_connect('localhost','root','');
			
		}
		//创建一个用来实例化对象的方法
		public static function getInstance(){
			
			if(!(self::$conn instanceof self)){
				self::$conn =new self;
			}
			return self::$conn;
		}
		
		//防止对象被复制
		public function __clone(){
			
			trigger_error('Clone is not allowed!');
		}
		
	}
	//只能这样取得实例,不用new和clone
	$mysql = Mysql::getInstance();
	
	
	
	
	
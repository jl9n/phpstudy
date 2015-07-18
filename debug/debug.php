<?php
class console
{
    public static function log($var)
    {
        self::scriptHead();
        self::format($var);
        self::scriptFoot();
    }

    private static function format($var)
    {
        $tmp = json_encode($var);
        echo 'var v = eval("(" +\'' .$tmp. '\'+ ")");';
        echo 'console.log(v);';
    }

    private static function scriptHead()
    {
        echo '<script language="javascript">';
    }

    private static function scriptFoot()
    {
        echo '</script>';
    }
}


//变量
$i = 'I am a string';

console::log($i);

//数组
$arr = array(1,2,3,4,5);

console::log($arr);

//对象
$obj1 = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$obj2 = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$obj3 = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);


console::log($obj1);


//对象数组
$objArr1 = array($obj1,$obj2,$obj3);
$objArr2 = array(
    array($obj1),
    array($obj2),
    array($obj3)
);

//
console::log($objArr1);
console::log($objArr2);


?>


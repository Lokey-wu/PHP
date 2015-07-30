<?php
header('Content-type: text/html; charset=utf-8');

echo "nihao";
$string1="null";
$string2="str";

//unset($string2);

if(is_null($string2))
	echo "<p>". "是空值";
else
	echo "<p>存在值".$string2;





define("wuyu", "常量");
	
define("wuyu1", "常量不区分大小写",true);

// define("wuyu“,”24“,true);//true 是设置定义的常量值 是否识别大小写(true=>不区分大小写，默认是区分大小写的)

echo "<br/>" .wuyu;

echo "<p>" .wuyu1;

echo "<p>".(defined("wuyu"));

echo "<P> PHP_VERSION(版本):" . PHP_VERSION;

echo "<p> System:" . PHP_OS;


$i="wuyu";

$j=$i;

$i="hello ".$i;//此时$i的值意已经变了 不再是之前的$i的值


echo "<p>" . $i;


echo "<p>hello " . $j;

 $example = 'hsbl';

 $example1 = 'hsbl';
function example(){
	global $example; //要想那方法外的变量 需在方法内 给全局变量 重新添加global 属性
	
	//global $example1 = "wu";
	$example3="方法内的值";
	echo "<p>" . $example;
}

example();

global $example3;
echo $example1;
echo $example3;

static $i=0;
for($i;$i<10;$i++){
	static $x=0;//静态的反会的值 依然保存着，继续使用
	$x+=1;
	echo "<p> ".$x ." <br/> ";
}



for($y=0;$y<10;$y++){
	$message=0; //非静态的值 返回后将重新取值
	$message+= 1;
	echo "  ".$message;
}



$change_name="wuyu";
$wuyu="yujian";
echo "<p>".$change_name." ";
echo $$change_name."<p>";

echo "<br/>";
echo $_SERVER['SERVER_ADDR'];

echo "<p>". $_SERVER['SERVER_NAME'];	


echo '<br/>';

"fine";
$a="word";


function example1(&$m){
	$m=$m+1;
	echo "$m";
}

$m=2;
example1($m);

echo "<br>".$m;








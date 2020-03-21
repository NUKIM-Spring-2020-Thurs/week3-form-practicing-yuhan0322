<meta HTTP-EQUIV="Content-Type" content="text/html"; charset="utf8">
<?php

$name=$_POST["name"];
$number=$_POST["number"];
$school=$_POST["school"];
$FB=$_POST["FB"];
$gender=$_POST["gender"];
$food=$_POST["food"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$interest=$_POST["interest"];
$comment=$_POST["comment"];

echo "你的名字：" .$name."</br>";
echo "你的生日：" .$number."</br>";
echo "你的高中：" .$school."</br>";
echo "你的臉書：" .$FB."</br>";
echo "你的性別：" .$gender."</br>";
echo "你的飲食：" .$food."</br>";
echo "聯絡方式：" .$phone."</br>";
echo "你的信箱：" .$email."</br>";
echo "興趣幾個：";
$internum=count($interest)."</br>";
echo $internum;
foreach ($interest as $key => $value) {
	echo "你的興趣：".$value."</br>";
}
echo "自我介紹：" .nl2br($comment)."</br>";

?>
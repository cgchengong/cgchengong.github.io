<?php
  $user=$_POST["user"];
  
  
 if($user==""){
 echo "数据错误";
 return;
 }

$lj="./user/".$user;

$nc=file_get_contents($lj."/nc.txt");
$qq=file_get_contents($lj."/qq.txt");

echo "QQ〖".$qq."〗<br>名称〖".$nc."〗";

?>

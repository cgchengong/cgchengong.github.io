<?php
  $user=$_POST["user"];
  $bt=$_POST["bt"];
  $nr=$_POST["nr"];
  if($user==""){
  echo "数据错误";
  return;
  }


$waid=file_get_contents("./wenan/waid.txt")+1;
$wdid=file_get_contents("./user/".$user."/wdid.txt")+1;
$btlj="./user/".$user."/lbsj/".$wdid;
$btljz="./wenan/zsj/".$waid;
$nra="标题〖".$bt."〗内容【".$nr."】";

file_put_contents($btljz,$nra);
file_put_contents($btlj,$nra);
file_put_contents("./wenan/waid.txt",$waid);
file_put_contents("./user/".$user."/wdid.txt",$wdid);
echo "创建成功";

?>

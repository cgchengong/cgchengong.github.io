<?php
  $user=$_POST["user"];
  $pass=$_POST["pass"];
  $lj="./user/".$user;
  if($user==""){
  echo "数据错误";
  return;
  }
if($pass==""){
echo "数据错误";
return;
}

if(file_exists($lj."/pass.txt")==0){
echo "账号不存在";
return;
}


$password=file_get_contents($lj."/pass.txt");
if($pass==$password){
echo "登录成功";
}
else{
echo "账号或密码错误";
}


?>

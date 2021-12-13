<?php
  $user=$_POST["user"];
  $pass=$_POST["pass"];
  $qq=$_POST["qq"];
  
  $lj="./user/".$user;
  
  if($user==""){
  echo "数据错误";
  return;
  }

if($pass==""){
echo "数据错误";
return;
}
  
  $jc=file_exists($lj."/pass.txt");
  if($jc==1){
   echo "用户已存在";
   return;
   }


   $exx=file_exists($lj);
   if($exx==0){
   mkdir($lj,0777);
   //创建用户文件夹
   }
 
 
 file_put_contents($lj."/pass.txt",$pass);
 file_put_contents($lj."/qq.txt",$qq);
 file_put_contents($lj."/jb.txt","0");
 file_put_contents($lj."/nc.txt","未设置");
 file_put_contents($lj."/wdid.txt","0");
 
 mkdir($lj."/lbsj",0777);
 
 echo "注册成功";
 
?>

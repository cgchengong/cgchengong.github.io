<?php
$user=$_POST["user"];
  $dir= "wenan/zsj/";
if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false)
        {
            if ($file!="."&&$file!="..") {
              
               $dqsj=file_get_contents($dir.$file);
               $time=date("Y-m-d H:i:s",filectime($dir.$file));
               echo "<br>ID〖".$file."〗".$dqsj."时间〖".$time."〗"
               
               
               ;
            }
           
        }
}
?>

<?php
$user=$_GET["user"];
$id=$_GET["id"];
if($user==""){
}
else{
$btlj=file_get_contents("./user/".$user."/lbsj/".$id);
$zsj_begin = mb_strpos($btlj,'标题〖') + mb_strlen('标题〖');
$zsj_end = mb_strpos($btlj,'〗') - $zsj_begin;
$zsj = mb_substr($btlj,$zsj_begin,$zsj_end);


$qhj_begin = mb_strpos($btlj,'内容【') + mb_strlen('内容【');
$qhj_end = mb_strpos($btlj,'】') - $qhj_begin;
$qhj = mb_substr($btlj,$qhj_begin,$qhj_end);
}



?>

<!DOCTYPE html>
<html>

        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>分享页面 - 微便签</title>
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="//cdn.bootcss.com/layer/3.1.0/layer.js"></script>
        <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
        .panel{
            border: none;
            border-radius: 5px;
        }
        .panel{
            box-shadow: 1px 1px 5px 5px rgba(169, 169, 169, 0.35);
        }
        .background
        {
            background-color:#f1f1f1;
        }
        </style>
    </head>
    <body class="background">
    <!--内容-->
    <div style="padding-top:65px;">
        
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><?php  echo $zsj;  ?><span style="color:#50c4e5">-微便签</span></h3>
            </div>
            
            <div class="panel-body">
                
                 
              
                <h5>文档内容<span style="color:red">[微便签提供]</span></h5>
             <br>
             <br>
             
                   <div><pre><?php echo $qhj; ?></pre></div>
            
              
            </div>
            
        </div>
    </div>
    
    </div>
    </body>
</html>

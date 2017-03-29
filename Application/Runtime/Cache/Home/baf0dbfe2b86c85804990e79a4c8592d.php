<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        function zan(user_id, post_id){
            var data = {};
            data["user_id"] = user_id;
            data["post_id"] = post_id;
            $.post("<?php echo U('/Home/center/zan');?>", data, function (result){
                if(result.status == 1){
                    alert(result.info);
                    $("#zan").val("已点赞");
                    $("#zan").attr("disabled", "disabled");
                } else {
                    $("#zan").val("点赞失败,请重试！");
                }
            });
        }

        function test(i){
            var data = {};
            data['i'] = i;
            $.post("<?php echo U('/Home/center/test');?>",data,function(result){
                    alert(result);
            });
        }
    </script>

</head>
<body>
<h1>文章查看页面</h1>

<h3><?php  echo $list['title'];?></h3>
<br/>
发布时间：<?php  echo date('Y-m-d H:i:s',$list['time']);?> 作者：<?php  echo $list['user_id'];?>
<hr />
<?php echo $list['content'];?>

<hr />
<?php if(!$is_zan){?>
<input type="button" value="点赞" id="zan" onclick="zan(<?php echo $user_id; ?>, <?php echo $post_id; ?>)" />
<?php }else{?>
<input type="button" value="已点赞" disabled="disabled" />
<?php }?>

<!--<input type="button" value="打开武器" id="test" onclick="test(1)" />-->
<!--<input type="button" value="打开背包" id="test" onclick="test(2)" />-->
</body>
</html>
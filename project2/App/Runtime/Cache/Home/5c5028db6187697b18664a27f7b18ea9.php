<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://localhost/eclipse/project2/public/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/eclipse/project2/public/jquery/jquery-2.2.0.js"></script>
    <script src="http://localhost/eclipse/project2/public/js/bootstrap.min.js"></script>
    

</head>
<body style="background-color: #FBF4F4; height: 1000px">
    <div class="container">
            <h2 align="center" style="font-weight: 100">编辑图片</h2>
            <br>
            <hr style="height:1px;border:none;border-top:1px solid #555555;" />
            <br>
            <br>
            <h4 align="right" style="font-weight: 100">添加图片</h4>
            <br>
            <div class="container">
                <div class="row">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-8">标题</th>
                            <th class="col-md-4">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $change = "http://localhost/eclipse/project2/index.php/Home/Edit/change?id=".$vo['id']; $del = "http://localhost/eclipse/project2/index.php/Home/Edit/delete?id=".$vo['id']; ?>
                            <tr>
                                <td><a href=<?php echo ($change); ?>><?php echo ($vo['title']); ?></a></td>
                                <td><a href=<?php echo ($del); ?>>删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</body>
</html>
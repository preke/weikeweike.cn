<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Topic</title>

    <link href="http://localhost/eclipse/project2//public/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/eclipse/project2//public/jquery/jquery-2.2.0.js"></script>
    <script src="http://localhost/eclipse/project2//public/js/bootstrap.min.js"></script>
    <style>
        .h6 {text-align: center;}
        .pagenav {
            margin:10px auto;
            text-align: center;
        }
        .topic-blocks .row{
            height: 280px;
            background: auto;
            padding-top: 5px;
            padding-bottom: 5px;
            /*color needs to be changed, black is for test*/
        }
        .topic-blocks .words_inside {
            border-left: 1px dotted #BDC3C7;
        }
        .topic-blocks .words_inside .ttop{
            padding-top: 0%;
            padding-left: 2%;
        }
        .author-block, .others-block{
            border: 1px solid #BDC3C7;
        }

    </style>
    <?php $url1="http://".C('URLSET')."/index.php/Home/BBS"; $url2="http://".C('URLSET')."/index.php/Home/BBS/Creat2Next?id=".$id; ?>
</head>
<body style="background-color:#EDF2F1">
    
    <br>
    <div class="container">
        <h2 style="font-weight: 100"><?php echo ($title); ?></h2>
        <div class="row pagenav">
            <br>
            

        </div>

        <div class="topic-blocks">

            <div class="author-block">
                <div class="row">
                    <div class="col-md-3">
                        <div style="margin-top: 30%;">
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(楼主)</h4>
                            <ul>
                                <li>ID：&nbsp;&nbsp;<?php echo ($topuser['id']); ?></li>
                                <li>姓名：&nbsp;&nbsp;<?php echo ($topuser['username']); ?></li>
                               
                                <li>在线时间：</li>
                                <li>帖子数：</li>
                                <li>上传视频数：</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 words_inside">
                        <div class="row ttop">
                            <br>
                            <div class="col-md-11">
                                <?php echo ($content); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			<?php if(is_array($userdata)): $i = 0; $__LIST__ = $userdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$userdata): $mod = ($i % 2 );++$i;?><div class="others-block">
                <div class="row">	
                    <div class="col-md-3">
                        <div style="margin-top: 30%;">
                            <ul>
                                <li>ID：&nbsp;&nbsp;<?php echo ($userdata['ID']); ?></li>
                                <li>姓名：&nbsp;&nbsp;<?php echo ($userdata['NAME']); ?></li>
                                <li>在线时间：&nbsp;&nbsp;<?php echo ($userdata['LASTONLINE']); ?></li>
                                <li>帖子数：&nbsp;&nbsp;<?php echo ($userdata['TIEZI']); ?></li>
                                
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-9 words_inside">
                        <div class="row ttop">
                            <br>
                            <div class="col-md-11">
                                <h5>
                                    <?php echo ($userdata['WORDS']); ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                <hr> 
                </div>
                
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            
			

        </div>

        <div class="row pagenav">
            <div align="right"><?php echo ($page); ?></div>
        </div>
        <br>
		<?php $url2="http://".C('URLSET')."/index.php/Home/BBS/Creat2Next?id=".$id; ?>
        <form method="post" action=<?php echo ($url2); ?>>
            <div class="form-group">
                <hr style="height:1px;border:none;border-top:1px solid #BDB76B;" />
                <br>
                <h4>&nbsp;发表评论</h4>
                <br>
            </div>
            <div class="form-group">
                <label class="sr-only" for="text_main">text-main</label>
                <textarea rows="8" class="form-control" id="text_main" name='words' placeholder="在此处键入正文"></textarea>
            </div>

            <div class="row">
                <div class="col-md-1 col-md-offset-11">
                    <button type="submit" class="btn btn-default btn-sm">发表评论</button>
                </div>

            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
</body>
</html>
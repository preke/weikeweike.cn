<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<?php $url1 = "http://".C('URLSET')."/index.php/Home/File/download_file"; $url2 = "http://".C('URLSET')."/index.php/Home/Video/UploadLecture"; $url3="http://".C('URLSET')."/index.php/Home/Main/Maindown"; $url4="http://".C('URLSET')."/index.php/Home/File/upload"; $url5="http://".C('URLSET')."/index.php/Home/Video/index" ?>
<style type="text/css">
body{
font-family:verdana;
 color:#0066CC;
 cursor:default;
}
.main{
/*
background-color:#CCFF00;
*/
width:800px;
height:500px;
margin:0 auto;
}
.form-control {
	display: block;
	width: 100%;
	height: 40px;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.428571429;
	color: #555555;
	vertical-align: middle;
	background-color: #ffffff;
	border: 1px solid #cccccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
	border-color: #66afe9;
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}


</style>
    <link href="http://localhost/eclipse/project2/public/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/eclipse/project2/public/jquery/jquery-2.2.0.js"></script>
    <script src="http://localhost/eclipse/project2/public/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F1F9EE; height:800px">

<div class = "container">
    <h2 align = "center" style="font-weight: 100">添加课程</h2>
    <br>
    <hr style="height:1px;border:none;border-top:1px solid #BDB76B;">
    <br>

    <form class="form-horizontal" action=<?php echo ($url2); ?> method="post"  >
        
        <br>
        
        <div class="form-group">
            <label for="inputContact" class="col-sm-3 control-label"><p align="right">课程名称： </p></label>
            <div class="col-sm-8">
            	<input class="form-control" type="text"  name="vname" placeholder="课程名称" />
            </div>  
        </div>
        
        <div class="form-group">
            <label for="inputContact" class="col-sm-3 control-label"><p align="right">主讲老师： </p></label>
            <div class="col-sm-8">
            	<input class="form-control" type="text"  name="vteacher" placeholder="主讲老师" />
            </div>  
        </div>
        
        <div class="form-group">
            <label for="inputContact" class="col-sm-3 control-label"><p align="right">课程类别： </p></label>
            <div class="col-sm-8">
            	<select class="form-control" name="vclass" placeholder="所属类别" />
			         <option>汽车维修</option>
			         <option>电子技术</option>
			         <option>机器人</option>
			         <option>哲学</option>
			         <option>医学</option>
      			</select>
            </div>  
        </div>
        
        
        <br>
        <div class="form-group">
            <label for="inputOffice" class="col-sm-3 control-label"><p align="right">课程描述: </p></label>
            <div class="col-sm-8">
                <textarea rows = '4' class="form-control" type="text" name="description" placeholder="课程描述"></textarea>
            </div>
        </div>
		<br>
		<br>
		<div align='center'>
			<button type="submit" class="btn btn-default">提交</button>
    	</div>
    </form>
    <br>
    <br>
    <p align = "center"><a href=<?php echo ($url5); ?>>返回课程主页</a> </p>
    </div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<?php $url10="http://".C('URLSET')."/index.php/Home/Questionnaire/Make"; ?>
	<link href="http://localhost/eclipse/project2//public/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/eclipse/project2//public/jquery/jquery-2.2.0.js"></script>
    <script src="http://localhost/eclipse/project2//public/js/bootstrap.min.js"></script>

<style type="text/css">
.main{
/*
background-color:#FFFF00;
*/
width:1000px;
height:800px;
margin:0 auto;
}
body {
	margin:0;padding:0;
	font-family:verdana;
    color:#0066CC;
}
.tbl{
/*
background-color:#00FF66;
*/
width:800px;
height:500px;
margin:0 auto;

}


a{
 /*font-size:12px;*/
 color:#006699;
 line-height:160%;
 text-decoration:none;
}
a:link{
 /*font-size:12px;*/
 color:#006699;
 line-height:160%;
 text-decoration:none;
}
a:active{
 /*font-size:12px;*/color:#990000;
 line-height:160%;
}
a:hover{
 /*font-size:12px;*/ color:#3366ff;
 line-height:160%;
 text-decoration:none;
}
li{
 list-style-type:square; 
 margin:5px;
 padding:5px;
 height:15px;
}
li span{
 color:black;
 cursor:hand;
 text-decoration:none;
 border:1px solid #F1F1F1;
 margin:0px;
 padding-left:5px;
 padding-right:0px;
 padding-top:0px;
 padding-bottom:0px;
 position:relative;
 top:0px;
 left:5px;
}
.liOver{
/*
 background-color:#dddddd;
*/
 border:1px solid #000000;
}
.liout{
/*
 background-color:#f1f1f1;
 */
 border:1px solid #f1f1f1;
}
li span.lidown{
/*
 background-color:#00ff00;
 */
 border:1px solid #999999;
}
.pages a,.pages span {
    display:inline-block;
    padding:2px 5px;
    margin:0 1px;
    border:1px solid #f0f0f0;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    border-radius:3px;
}
.pages a,.pages li {
    display:inline-block;
    list-style: none;
    text-decoration:none; color:#58A0D3;
}
.pages a.first,.pages a.prev,.pages a.next,.pages a.end{
    margin:0;
}
.pages a:hover{
    border-color:#50A8E6;
}
.pages span.current{
    background:#50A8E6;
    color:#FFF;
    font-weight:700;
    border-color:#50A8E6;
}

</style>
<body style="background-color:#EDF2F1">
	<div class="main">
	<h1 align="center" style="font-weight:100">问卷列表</h1>
	<br/>
	<hr style="height:1px;border:none;border-top:1px solid #999999;" />
	<br/><br/>
	<div class="container">
		<div class="row">
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th class="col-md-6">标题</th>
					<th class="col-md-2">发布者</th>
					<th class="col-md-2">查看结果</th>
					<th class="col-md-2">删除</th>
				</tr>
				</thead>
				<tbody>
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<?php $urlr="http://".C('URLSET')."/index.php/Home/Questionnaire/ViewR?id=".$vo['id']; $urlq="http://".C('URLSET')."/index.php/Home/Questionnaire/ViewQ?id=".$vo['id']; ?>
								<td ><a href=<?php echo ($urlq); ?>><?php echo ($vo['name']); ?></a></td>
								<td ><?php echo ($vo['username']); ?></td>
								<td ><a href=<?php echo ($urlr); ?>>结果统计</a></td>
								<td>
									<?php if($vo['username']==$username||$root=='0'){ $url2="http://".C('URLSET')."/index.php/Home/Questionnaire/Delete?id=".$vo['id']; ?>
									<a href=<?php echo ($url2); ?>>删除问卷</a>
										<?php } ?>
								</td>	
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<tr >
		                  <!--<td colspan="3" >&nbsp;<?php echo ($page); ?></td>-->
		           		     <td colspan="3" >
		            	    <div class="pages" align="center">
		            	            <?php echo ($page); ?>
		            	    </div></td>  
		            	</tr>
		          </tbody>
			</table>
		</div>
		<h1 align="center" style="font-weight:100"><a href=<?php echo ($url10); ?>>发布问卷</a></h1>
	</div>
	</div>
	<hr style="height:1px;border:none;border-top:1px solid #999999;" />
</body>
</html>
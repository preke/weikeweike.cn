<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://localhost/eclipse/project2//public/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/eclipse/project2//public/jquery/jquery-2.2.0.js"></script>
    <script src="http://localhost/eclipse/project2//public/js/bootstrap.min.js"></script>
    
    
    <?php $post="http://".C('URLSET')."/index.php/Home/User/Regists"; $back="http://".C('URLSET')."/index.php/Home/User/index"; ?>
    <script language="javascript">

        function editable(select1){

            if(select1.value == ""){

                var newvalue = prompt("请输入","其他");

                if(newvalue){

                    addSelected(select1,newvalue,newvalue);

                }

            }

        }

        function addSelected(fld1,value1,text1){

            if (document.all)    {

                var Opt = fld1.document.createElement("OPTION");

                Opt.text = text1;

                Opt.value = value1;

                fld1.options.add(Opt);

                Opt.selected = true;

            }else{

                var Opt = new Option(text1,value1,false,false);

                Opt.selected = true;

                fld1.options[fld1.options.length] = Opt;

            }

        }

    </script>
    <script type="text/javascript">

        function validate_required(field,alerttxt)
        {
            with (field)
            {
                if (value==null||value=="")
                {alert(alerttxt);return false}
                else {return true}
            }
        }

        function validate_form(thisform)
        {
            with (thisform)
            {
                if (validate_required(Username,"Username not filled")==false)
                {
                    Username.focus();
                    return false
                } else if (validate_required(Password,"Password not filled")==false)
                {
                    Password.focus();
                    return false
                } else if (validate_required(Ensure,"Ensure password not filled")==false)
                {
                    Ensure.focus();
                    return false
                } else if (validate_required(school,"School not filled")==false)
                {
                    school.focus();
                    return false
                }

            }
        }
    </script>
</head>
<body style=" background-color: #F1F9EE">
<div class="container" style=" background-color: #F1F9EE">
    <h2 align="center">Regist</h2>
    <br>
    <p align="right"><a href="regist.html">中文</a>/English</p>
    <p align="right">(You must fill the blanks with<span style="color: red;">*</span>)</p>
    <hr style="height:1px;border:none;border-top:1px solid #555555;" />

    <form class=" col-xs-offset-2 form-horizontal" action=<?php echo ($post); ?> method="post">
        <div class="form-group">
            <label for="inputUsername" class="col-xs-2 control-label">Username:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" id="inputUsername" name="Username" placeholder="Username">
            </div>
            <span style="color: red;"><h4>*</h4></span>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-xs-2 control-label">Password:</label>
            <div class="col-xs-4">
                <input type="password" class="form-control" id="inputPassword" name="Password" placeholder="Password">
            </div>
            <span style="color: red;"><h4>*</h4></span>
        </div>
        <div class="form-group">
            <label for="inputPassword1" class="col-xs-2 control-label">Ensure your password:</label>
            <div class="col-xs-4">
                <input type="password" class="form-control" id="inputPassword1" name="Ensure" placeholder="Ensure your Password">
            </div>
            <span style="color: red;"><h4>*</h4></span>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Sex:</label>
            <div class="checkbox-inline">
	            <label>
	                <input type="radio" name="Sex" id="optionsRadios3"
	                       value="男" checked>
	                Male
	            </label>
	          </div>
	          <div class="checkbox-inline">
	            <label>
	                <input type="radio" name="Sex" id="optionsRadios4"
	                       value="女">
	                Female
	            </label>
	          </div>


        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Department:</label>
            <div class="col-xs-4">
                <select name="Department" onChange="editable(this);" class="form-control">
                    <option value="信息科学与技术学院">信息科学与技术学院</option>
                    <option value="数据科学与计算机学院">数据科学与计算机学院</option>
                    <option value="移动信息工程学院">移动信息工程学院</option>
                    <option value="">(Input)请输入完整的院系名</option>
                </select>
            </div>
            <span style="color: red;"><h4>*</h4></span>
        </div>
        <div class="form-group">
            <label for="inputSchool" class="col-xs-2 control-label">School:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" id="inputSchool" name="School" placeholder="School">
            </div>
            <span style="color: red;"><h4>*</h4></span>
        </div>
        <div class="form-group">
            <label for="inputQQ" class="col-xs-2 control-label">Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" id="inputQQ" name="QQ" placeholder="QQ Number">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-xs-2 control-label">Email:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" id="inputEmail" name="Email" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <br>
            <br>
            <div class="col-xs-offset-4 col-xs-4">
                <button type="submit" class="btn btn-default">Regist</button>
            </div>
        </div>
    </form>
    
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>商品列表</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main-div">
    <form name="main_form" method="POST" action="/index.php/GII/index/index.html">
        <table cellspacing="1" cellpadding="3" width="100%">
            <tr>
                <td class="label">生成类型：</td>
                <td>
                    <input type="radio" name="type" value="1" />生成代码
					<input type="radio" name="type" value="2" checked="checked" />生成配置文件
                    <span class="require-field">*</span>
                </td>
            </tr>
            <tr>
                <td class="label">配置文件/表 名：</td>
                <td>
                    <input type="text" name="config_name" size="40" maxlength="40" />
                    多个用，隔开
                    <span class="require-field">*</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br />
                    <input type="submit" class="button" value=" 生成 " />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
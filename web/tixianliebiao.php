﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>订单支付 - 亚媒社</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="js/layer/layer.js"></script>
<script type="text/javascript" src="js/main2.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body >

<?php include("head.php"); ?>

<!--提现列表-->

<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:40px;padding-bottom:0;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">提现列表</a></strong>
			<div class="search_1">
				<form action="" method="" name="">
					<div class="l">
						<span>起止时间</span>
					</div>
					<div class="l">
						<input type="text" class="txt2" id="datepicker1" />-<input type="text" class="txt2" id="datepicker2" />
					</div>
					<div class="l">
						<input type="text" class="txt5" placeholder="用户名称" />
						<input type="submit" name="submit" class="sub4" value="查询" />
					</div>
				</form>
			</div>
			<div class="clr"></div>
		</h3>
		<div class="dhorder_m">
			
			<div class="tab1" style="height:30px;">
			</div>
			
			<div class="tab1_body" style="min-height:580px;">
<table class="table_in1 cur">
<thead>
	<tr>
		<th>序号</th>
		<th>用户名</th>
		<th>账户余额</th>
		<th>提现金额</th>
		<th>提现时间</th>
		<th>提现状态</th>
		<th>操作</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>1</td>
		<td>13711174990</td>
		<td>￥100000.00</td>
		<td>￥100000.00</td>
		<td>2016-9-12 15:12:00</td>
		<td>审核</td>
		<td><a href="">完成</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>1171801173@qq.com</td>
		<td>￥100000.00</td>
		<td>￥100000.00</td>
		<td>2016-9-12 15:12:00</td>
		<td>完成</td>
		<td><a href="">完成</a></td>
	</tr>
</tbody>
</table>
			</div>
		</div>
	
	</div>

</div></div>
</div></div>

<?php include("foot.php"); ?>



</div>
</body>
</html>

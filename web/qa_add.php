<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>网络媒体_问答任务添加 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

	<script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="zh-cn.js"></script>

	<script type="text/javascript" src="js/main2.js"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body>

<?php include("head.php"); ?>



<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
		
	<!--	问答任务添加	-->
	<div class="Ifapiao"><h2>问答咨询</h2></div>
	<div class="Wikipedia">
		<div class="WIn1">
        	<li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
            <li><img src="img/bn66.png" /></li>
        </div>
		<div class="WIn2">
        	<h2>已选媒体</h2>
			<table width="100%" border="0" class="table_in3">
			<thead>
				<tr>
					<th>媒体名称</th>
					<th>介绍</th>
					<th>媒体特点</th>
					<th>价格</th>
					<th>删除</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><img src="img/bn66.png"/>新浪网</td>
					<td>新浪网XXXXXXXXXXXXXX</td>
					<td><select ><option value="">一问，一答</option>
							<option value="">一问，二答</option>
							<option value="">二问，四答</option>
						</select>
					</td>
					<td>80元</td>
					<td>×</td>
				</tr>
				<tr>
					<td><img src="img/bn66.png"/>新浪网</td>
					<td>新浪网XXXXXXXXXXXXXX</td>
					<td><select ><option value="">一问，一答</option>
                            <option value="">一问，二答</option>
                            <option value="">二问，四答</option>
                        </select>
                    </td>
					<td>80元</td>
					<td>×</td>
				</tr>
				<tr>
					<td><img src="img/bn66.png"/>新浪网</td>
					<td>新浪网XXXXXXXXXXXXXX</td>
					<td><select ><option value="">一问，一答</option>
                            <option value="">一问，二答</option>
                            <option value="">二问，四答</option>
                        </select>
                    </td>
					<td>80元</td>
					<td>×</td>
				</tr>
				<tr>
					<td><img src="img/bn66.png"/>新浪网</td>
					<td>新浪网XXXXXXXXXXXXXX</td>
					<td><select ><option value="">一问，一答</option>
                            <option value="">一问，二答</option>
                            <option value="">二问，四答</option>
                        </select>
                    </td>
					<td>80元</td>
					<td>×</td>
				</tr>
				</tbody>
			</table>

        </div>
		<div class="WIn2">
        	<h2>问答内容</h2>
            <div class="WMain1">
                <div class="WMain2">
                    <ul>
                        <li style="display:block;">
                        	<div class="WMain3"><p><i class="LGntas">*</i>主题:</p>
                                 <input type="text" name="textfield" id="textfield" placeholder="可输入25个汉字"  class="WIFN1"/>
                            </div>
                            <div class="WMain3"><p><i class="LGntas">*</i>描述:</p>
                                 <input type="text" name="textfield" id="textfield"  class="WIFN2"/>
                                 <div class="WMaP">请填写产品、品牌或推广活动（时间、地点及活动内容）简介，让预约对象大致了解此推广活动，请勿超过1000字。</div>
                            </div>
                            <div class="WMain5">
                            	   <script id="editor" type="text/plain"></script>
                            </div>
                            <div class="WMain4">
                            	<ul style=" padding:15px; float:left;">
                                    <span style="color:#000; font-weight:700">任务须知</span>
                                    <span>标题作为含有哪些关健词最好不要超过2个 ；</span>
                                    <span>文章要求：关健词有哪些一定要写清楚，关健词文章内要出现几次，是否带连接、联系方式、图片等，如需带请自行准备如能提供范文最好，我们可以按照格式撰写；</span>
                                    <span>交稿时间1-2个工作日；</span>
                                    <span>给出的关健诩写多少篇稿件要写清楚。</span>
                                </ul>
                            </div>
                        </li>
                        <li>安全设置</li>
                    </ul>
                </div>
            </div>
			
			<div class="clr btn_sub_w">
				<button type="submit" value="submit" class="btn_sub"><img src="img/WLButton.png" /></button>
			</div>
			
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
		</div>	

	</div>
	
</div></div>
</div></div>


<?php include("foot.php"); ?>



</body>
</html>

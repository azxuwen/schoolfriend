<?php
/* Smarty version 3.1.33, created on 2020-05-19 08:16:43
  from '/data/wwwroot/school.xuwenzhi.com/templates/index.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec3256bda8c41_87554642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0217353bf5fccbe69b14b732443c8b48a347eceb' => 
    array (
      0 => '/data/wwwroot/school.xuwenzhi.com/templates/index.htm',
      1 => 1589844712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bot.htm' => 1,
  ),
),false)) {
function content_5ec3256bda8c41_87554642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/data/wwwroot/school.xuwenzhi.com/include/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/data/wwwroot/school.xuwenzhi.com/include/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>永远的同校</title>
<meta name="开发单位" content="哈尔滨理工大学" />
<meta name="keywords" content="校友|校友网|永远的同校|哈尔滨电机制造学校|哈尔滨机电专科学校|哈尔滨工业高等专科学校|
哈尔滨理工大学工业技术学院|哈尔滨科技大学|哈尔滨电工学院">
<meta name="description" content="哈尔滨理工大学">
<?php echo '<script'; ?>
 src="./js/jquery1.4.2.js" type="text/javascript"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/index_information_product.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/index_recruit_accept.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/index_pic_switch.js" type="text/javascript"><?php echo '</script'; ?>
>
<link href="./images/css/text.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$("#index_photo").click(function(){
			alert('aa');
		});
	});
<?php echo '</script'; ?>
>
<style type="text/css">
/* bigBanner */
.bigBanner{height:294px;width:640px;margin:10px auto 10px auto;}
background-color:#FFF;border:1px solid #e7e8e9;overflow:hidden;position:relative;}
/*外边框大小*/
.bigBanner1{height:280px;width:400px;position:relative;}/*包着左面图片的边框*/
.bigTitle{height:280px;width:300px;float:right;position:relative;border:}/*包着新闻和按钮的边框*/
.bigTitle #brImg{width:200px;height:240px;position:relative;margin-left:30px;}/*右侧图片边框*/
.bigBanner #brImg {
	width:250px;
	height:230px;
	/*border:1px solid red;左边图片的边框   */
}/*右侧新闻大小*/
.bigBanner #blImg {
	width:250px;
	height:290px;
	/*border:1px solid red;右边图片的边框   */
}/*左侧图片大小*/
.bigTitle .button6{display:inline-block;width:200px;height:54px;line-height:26px;text-indent:-9990em;font-size:14px;background:url(images/btn_in.png) top center;color:#fff;border:none;cursor:pointer;margin-left:30px;margin-top:10px;}
.bigTitle a.button6{color:#fff;}
.bigTitle .button6:hover{text-decoration:none;background-position:bottom center;}
.bigBanner p{position:absolute;left:-70px;bottom:10px;}
.bigTitle .idx{display:inline-block;width:16px;height:30px;line-height:30px;text-indent:-9990em;font-size:14px;background:url(images/btn_idx.png) bottom center;border:none;cursor:pointer;}
</style>
</head>
<body topmargin="0" leftmargin="0">
<?php 
	require_once './top.php';
?>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0" class="bg1">
  <tr>
    <td height="11"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="294px">
    <td width="10"></td>
    <td class="border"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="350px" height="294px"">
<div class="bigBanner">
		<img id="blImg" class="bigBanner1" src="images/idxbannerL2.jpg" style="left:0px;opacity:1;" />
		<div class="bigTitle">
			<img id="brImg" src="images/idxbannerR2.png" style="left:0px;opacity:1;" />
			<!--<a id="brsrc" class="button6" href="http://www.17sucai.com/">开始使用</a>-->
			<p>
				<a id="1" class="idx" style="background-position:50% 0%;">1</a>
				<a id="2" class="idx" style="background-position:50% 100%;">2</a>
				<a id="3" class="idx" style="background-position:50% 100%;">3</a>
			</p>
		</div>
	</div></td>
      </tr>
    </table></td>
    <td width="11"></td>
    <td width="325" valign="top" class="border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97" height="29" align="center" background="images/1_14.jpg" class="zi-bai14b">新闻公告</td>
        <td width="228" align="right" background="images/1_15.jpg"><a href="news.php"><img src="images/more.gif" 

width="44" height="13" border="0" align="absmiddle"></a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index_news']->value, 'newsitem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->value) {
?>
          <tr>
            <td width="15" height="22" align="center"><img src="images/tb1.jpg" width="3" height="3"></td>
            <td valign="bottom"><a href='news_con.php?news_id=<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['NewsId'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['NewsCategory'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['NewsTitle'];?>
'><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsitem']->value['NewsTitle'],18,"...",true);?>
</a></td>
            <td align='right'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['newsitem']->value['NewsAddTime'],"%Y-%m-%d",true);?>
</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </td>
      </tr>
    </table></td>
    <td width="11"></td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"></td>
    <td width="317"></td>
    <td width="11"></td>
    <td width="317"></td>
    <td width="11"></td>
    <td width="325"></td>
    <td width="11"></td>
  </tr>
  <tr>
    <td height="230">&nbsp;</td>
    <td valign="top" class="border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97" height="29" align="center" background="images/1_09.jpg" class="zi-lan14b">昔日趣事</td>
        <td width="215" align="right" background="images/1_09.jpg"><a href='thing.php'><img src="images/more.gif" width="44" height="13" 
align="absmiddle"></a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index_thing']->value, 'thingitem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thingitem']->value) {
?>
          <tr>
            <td width="15" height="22" align="center"><img src="images/tb1.jpg" width="3" height="3"></td>
            <td valign="bottom"><a href='thing_con.php?thing_id=<?php echo $_smarty_tpl->tpl_vars['thingitem']->value['ThingId'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['thingitem']->value['ThingTitle'];?>
'><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['thingitem']->value['ThingTitle'],18,"...",true);?>
</a>
            <td align='right'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['thingitem']->value['ThingTime'],"%Y-%m-%d",true);?>
</td>
            </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        
        </td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
    <td valign="top" class="border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <!-- 这里的JS事件  写在 js/index_information_product.js  中 -->
      <td width="97" align="center" id='index_product'  class="zi-lan14b" ><a href='#product'>产品推介</a></td>
        <td width="1"><img src="images/1_11.jpg"></td>
        <td width="97" height="29" align="center"  background="images/1_09.jpg" id='index_information' class="zi-lan14b"><a href='#information'>供求信息</a></td>
        <td width="215" align="right" background="images/1_09.jpg"><a id='information_product_more' href='products.php'><img src="images/more.gif" width="44" height="13" 
align="absmiddle"></a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" valign="top">
        <table id='information_product' width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'pro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->value) {
?>
        <input type='hidden' id='judgeProduct' value='0'/><!-- 用于判断 产品推介 是否可以点击 -->
         <input type='hidden' id='judgeInformation' value='0' /><!-- 用于判断 供求信息 是否可以点击 -->
          <tr>
            <td width="15" height="22" align="center"><img src="images/tb1.jpg" width="3" height="3"></td>
            <td valign="bottom"><a href='product_con.php?product_id=<?php echo $_smarty_tpl->tpl_vars['pro']->value['ProductId'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['pro']->value['ProductName'];?>
'><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pro']->value['ProductName'],18,"...",true);?>
</a></td>
            <td align='right'><?php echo $_smarty_tpl->tpl_vars['pro']->value['ProductRTime'];?>
</td>
          </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        
        </td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
    <td width="325" valign="top" class="border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <!-- 这里的JS事件  写在 js/index_recruit_accept.js  中 -->
        <td width="97" height="29" align="center" class="zi-lan14b" id='index_recruit'><a href='#recruit'>招聘</a></td>
        <td width="1"><img src="images/1_11.jpg"></td>
        <td width="97" align="center" background="images/1_09.jpg"id='index_apply' class="zi-lan14b"><a href='#accept'>求职</a></td>
         <td width="215" align="right" background="images/1_09.jpg"><a id='recruit_apply_more' href='recruits.php'><img src="images/more.gif" width="44" height="13" 
align="absmiddle"></a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" valign="top">
        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" id='recruit_apply'>
        <input type='hidden' id='judgeRecruit' value='0' /><!-- 用于判断 招聘 是否可以点击 -->
        <input type='hidden' id='judgeAccept' value='0'/><!-- 用于判断 应聘  是否可以点击 -->
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recruits']->value, 'recruit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recruit']->value) {
?>
         	 <tr>
	            <td width="15" height="22" align="center"><img src="images/tb1.jpg" width="3" height="3"></td>
	            <td valign="bottom"><a href='recruits_con.php?recruits_id=<?php echo $_smarty_tpl->tpl_vars['recruit']->value['RecruitId'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['recruit']->value['RecruitPosition'];?>
'><?php echo $_smarty_tpl->tpl_vars['recruit']->value['RecruitPosition'];?>
</a></td>
	            <td align='right'><?php echo $_smarty_tpl->tpl_vars['recruit']->value['RecruitTime'];?>
</td>
         	 </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        
        </td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"></td>
    <td width="981"></td>
    <td width="11"></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top" class="border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97" height="29" align="center" background="images/1_09.jpg" class="zi-lan14b">今昔风采</td>
        
        <td width="90%" align="right" background="images/1_09.jpg"><a href="miens.php"><img src="images/more.gif" 

width="44" height="13" border="0" align="absmiddle"></a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="5"></td>
          </tr>
          <tr>
            <td align="center">
            <marquee  align="center" onmouseover="stop()" onmouseout="start()" behavior="sroll" direction="left"   scrolldely="1000" scrollamount='15'>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JXFC']->value, 'jxfc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jxfc']->value) {
?>
           	<a href="mien_con.php?phototype=<?php echo $_smarty_tpl->tpl_vars['jxfc']->value['PhotoType'];?>
&photo_id=<?php echo $_smarty_tpl->tpl_vars['jxfc']->value['PhotoId'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['jxfc']->value['PhotoAdd'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['jxfc']->value['PhotoTitle'];?>
" width="184" height="118" class="border-tp"></a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </marquee> 
        	</td>
          </tr>
        </table>
        
        </td>
        </tr>
    </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="11"></td>
    <td></td>
    <td></td>
  </tr>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:bot.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-zhangguijiyu"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-zhangguijiyu">
<table  width="950" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="assets/images/zhangguijiyu.png" width="950" height="88" style="display:block;" alt=""></td>
	</tr>
	<tr>
		<td style=" background-image:url(assets/images/zhangguijiyu_02.png); background-repeat:repeat-y; min-height:99px;">
        
        <div  style="background-image:url(assets/images/ok.png); background-repeat: no-repeat; min-height:99px;color:#e9cba4; padding-left:35px; padding-right:35px; font-size:12px; line-height:20px;font-family:microsoft yahei;">
		<? if ( $_MODULE['zhangguijiyu'] ){	echo $_MODULE['zhangguijiyu'] ;} ?></div>
        
			</td>
	</tr>
	<tr>
		<td>
			<img src="assets/images/zhangguijiyu_03.png" width="950" height="45"  style="display:block;"  alt=""></td>
	</tr>
</table>

</div>

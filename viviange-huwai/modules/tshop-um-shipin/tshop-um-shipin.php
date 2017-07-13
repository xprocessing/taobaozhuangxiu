
<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-shipin"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-shipin">

<table border="0" cellpadding="0" cellspacing="0" class="" height="600" width="950">
	<tbody>
		<tr>
			<td bgcolor="#fe3e3e" height="32" width="950">
				<div style="line-height:1;font-family:微软雅黑;font-size:18px;font-weight:bold;float:left;">
					<? if ( $_MODULE['video_title-new'] ){	echo $_MODULE['video_title-new'] ;} ?></div>				
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" class="" height="568" width="950" background="http://img02.taobaocdn.com/imgextra/i2/297619552/T2Rjf9XhhaXXXXXXXX-297619552.png" style="background-repeat:no-repeat;">
					<tbody>
						<tr>
							<td  height="568" width="735" valign="top">
								<div style="width:609px;height:501px;margin-left:93px; margin-top:41px;background-color:#CCC;">
									<? if ( $_MODULE['video_html'] ){	echo $_MODULE['video_html'] ;} ?></div>
							</td>
							<td  height="568" width="215" valign="top">
								<div style="width:auto;height:auto;color:#fff;padding-top:340px;padding-left:15px;font-family:微软雅黑;font-size:14px;font-weight:bold; line-height:30px;">
									<? if ( $_MODULE['video_other_title'] ){	echo $_MODULE['video_other_title'] ;} ?></div>
								<div style="width:auto;height:auto;color:#676767;padding-top:0px;padding-left:15px;font-family:微软雅黑;font-size:14px; line-height:1.5;">
									<? if ( $_MODULE['video_other_detail-new'] ){	echo $_MODULE['video_other_detail-new'] ;} ?></div>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<p>&nbsp;
	</p>
<?php
/**
 * 开始设计PHP页面
 */
?>
</div>

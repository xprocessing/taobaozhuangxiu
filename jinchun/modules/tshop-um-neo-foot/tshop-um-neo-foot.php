<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-foot"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-foot">
<table  width="990" height="319" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td><a href="#"><img style="display:block;" src="assets/images/qie_10_01.png" width="990" height="91" alt=""></a></td>
	</tr>
	<tr>
		<td height="182" width="990" background="assets/images/qie_10_02.png" style="background-repeat:no-repeat;"><table width="990" height="182" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="209" height="60">&nbsp;</td>
		    <td width="190">&nbsp;</td>
		    <td width="189">&nbsp;</td>
		    <td width="189">&nbsp;</td>
		    <td width="213">&nbsp;</td>
	      </tr>
		  <tr valign="top" class="footinfo">
		    <td height="87">&nbsp;</td>
		    <td><div><? if ( $_MODULE['info_detail_01'] ){	echo $_MODULE['info_detail_01'] ;} ?></div></td>
		    <td><div><? if ( $_MODULE['info_detail_02'] ){	echo $_MODULE['info_detail_02'] ;} ?></div></td>
		    <td><div><? if ( $_MODULE['info_detail_03'] ){	echo $_MODULE['info_detail_03'] ;} ?></div></td>
		    <td><div><? if ( $_MODULE['info_detail_04'] ){	echo $_MODULE['info_detail_04'] ;} ?></div></td>
	      </tr>
		  <tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
	      </tr>
		  </table>
			</td>
	</tr>
	<tr>
		<td height="46" bgcolor="#0b533b" class="footwangwang" >
         <? echo $_MODULE['wangwang_nickname_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
     <? echo $_MODULE['wangwang_nickname_02'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_03'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_04'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_05'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_06'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
	</tr>
</table>
</div>

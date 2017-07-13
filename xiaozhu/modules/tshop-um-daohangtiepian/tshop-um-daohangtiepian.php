<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-daohangtiepian"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-daohangtiepian">
<table width="950" height="550" border="0" cellspacing="0" cellpadding="0" style=" font-size:0px; line-height:0px; background-color:#000;">
  <tr>
    <td width="10" height="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="9">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><? echo '<a target="_blank" href="'. $_MODULE['tiepian_link_1'] .'"><img width="393" height="530"  src="'. $_MODULE['tiepian_img_1'] .'"></a>'; ?></td>
    <td>&nbsp;</td>
    <td width="260" height="260"><? echo '<a target="_blank" href="'. $_MODULE['tiepian_link_2'] .'"><img width="260" height="260"  src="'. $_MODULE['tiepian_img_2'] .'"></a>'; ?></td>
    <td>&nbsp;</td>
    <td width="260" height="260"><? echo '<a target="_blank" href="'. $_MODULE['tiepian_link_3'] .'"><img width="260" height="260"  src="'. $_MODULE['tiepian_img_3'] .'"></a>'; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td height="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="260" height="260"><? echo '<a target="_blank" href="'. $_MODULE['tiepian_link_4'] .'"><img width="260" height="260"  src="'. $_MODULE['tiepian_img_4'] .'"></a>'; ?></td>
    <td>&nbsp;</td>
    <td width="260" height="260"><? echo '<a target="_blank" href="'. $_MODULE['tiepian_link_5'] .'"><img width="260" height="260"  src="'. $_MODULE['tiepian_img_5'] .'"></a>'; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-showtheway"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-showtheway">
<div class="theways" >
<table width="968" height="368" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td colspan="2"><? echo '<a target="_blank" href="'. $_MODULE['showtheway_link_1'] .'"><img style="margin-bottom:13px;"  src="'. $_MODULE['showtheway_img_1'] .'"></a>'; ?></td>
    <td width="388" height="368" rowspan="2"><? echo '<a target="_blank" href="'. $_MODULE['showtheway_link_2'] .'"><img  style="margin-left:11px;" src="'. $_MODULE['showtheway_img_2'] .'"></a>'; ?></td>
  </tr>
  <tr>
    <td><? echo '<a target="_blank" href="'. $_MODULE['showtheway_link_3'] .'"><img  src="'. $_MODULE['showtheway_img_3'] .'"></a>'; ?></td>
    <td> <? echo '<a target="_blank" href="'. $_MODULE['showtheway_link_4'] .'"><img  style=" margin-left:12px;"  src="'. $_MODULE['showtheway_img_4'] .'"></a>'; ?></td>
    </tr>
</table>
</div>
</div>

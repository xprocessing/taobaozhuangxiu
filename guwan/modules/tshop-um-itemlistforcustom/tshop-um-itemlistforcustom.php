<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-itemlistforcustom"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-itemlistforcustom">
  <?php
/**
 * 开始设计PHP页面
 */
?>
  <div><? echo '<a target="_blank" href="'. $_MODULE['itemlist_title_link'] .'"><img  src="'. $_MODULE['itemlist_title_img'] .'"></a>'; ?></div>
  <div class="list-box">
    <ul>
      <?php
for ($i=1; $i<=9; $i++){
	
	 if ( $_MODULE['itemlist_link_'.$i] ){	echo '<li><div class="item"><a target="_blank" href="'. $_MODULE['itemlist_link_'.$i] .'"><img  src="'.$_MODULE['itemlist_img_'.$i] .'" ></a></div></li>';}
	


}
?>
    </ul>
  </div>
</div>

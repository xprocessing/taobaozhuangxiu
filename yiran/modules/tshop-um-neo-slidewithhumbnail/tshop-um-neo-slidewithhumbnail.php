

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-slidewithhumbnail"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-neo-slidewithhumbnail" style="width:950px;" >


  <div class="<? echo $_MODULE['neo-slide-option'] ?>">
    <div class="J_TWidget neoslide" data-widget-type="Slide" data-widget-config="{
'navCls':'neo-nav',
'contentCls':'neo-content',
'activeTriggerCls':'neo-active',
'effect':'scrollx',
'autoplay':'true'
}">
      <ul class="neo-content">
        <li>
          <?
		
		if ( $_MODULE['neo-slide_html_1'] ){	echo $_MODULE['neo-slide_html_1'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_1'] .'"><img  src="'. $_MODULE['neo-slide_img_1'] .'"></a>'; }		
		 
		  ?>
        </li>
        <li>
        <?
		
		if ( $_MODULE['neo-slide_html_2'] ){	echo $_MODULE['neo-slide_html_2'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_2'] .'"><img  src="'. $_MODULE['neo-slide_img_2'] .'"></a>'; }		
		 
		  ?>
		
        </li>
        <li>
		<?
		
		if ( $_MODULE['neo-slide_html_3'] ){	echo $_MODULE['neo-slide_html_3'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_3'] .'"><img  src="'. $_MODULE['neo-slide_img_3'] .'"></a>'; }		
		 
		  ?></li>
        <li>
		  <?
		
		if ( $_MODULE['neo-slide_html_4'] ){	echo $_MODULE['neo-slide_html_4'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_4'] .'"><img  src="'. $_MODULE['neo-slide_img_4'] .'"></a>'; }		
		 
		  ?>
        </li>
        <li>
		  <?
		
		if ( $_MODULE['neo-slide_html_5'] ){	echo $_MODULE['neo-slide_html_5'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_5'] .'"><img  src="'. $_MODULE['neo-slide_img_5'] .'"></a>'; }		
		 
		  ?>
        </li>
      </ul>
      <ul class="neo-nav">
        <li class="neo-active"><? echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_1'] .'"><img  src="'. $_MODULE['neo-slide_img_1'] .'"></a>'; ?></li>
        <li><? echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_2'] .'"><img  src="'. $_MODULE['neo-slide_img_2'] .'"></a>'; ?></li>
        <li><? echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_3'] .'"><img  src="'. $_MODULE['neo-slide_img_3'] .'"></a>'; ?></li>
        <li><? echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_3'] .'"><img  src="'. $_MODULE['neo-slide_img_4'] .'"></a>'; ?></li>
        <li><? echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_3'] .'"><img  src="'. $_MODULE['neo-slide_img_5'] .'"></a>'; ?></li>
      </ul>
    </div>
  </div>
</div>

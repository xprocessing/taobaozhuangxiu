
<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-fullscreen-02"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-fullscreen-02">
<div class="fullscreen-content">
<? if ( $_MODULE['fullbanner_html'] ){	echo $_MODULE['fullbanner_html'] ;} ?>

<div class="neo-fullcarou" style=" <? if ( $_MODULE['fullbanner_html'] ){	echo "display:none;" ;} ?>">
	<div class="J_TWidget neo-carousel" data-widget-config="{'navCls':'neo-nav',
'contentCls':'neo-content',
'activeTriggerCls':'neo-active',
'prevBtnCls':'neo-prev',
'nextBtnCls':'neo-next',
'activeTriggerCls':'neo-active',
'disableBtnCls':'neo-disable',
'viewSize':[1920],
'steps':'1',
'effect':'scrollx',
'circular':true,
'easing':'bounceIn'}" data-widget-type="Carousel" style="height:<? echo $_MODULE['fullbanner_height']?>px">
		<span class="neo-prev"></span><span class="neo-next"></span>
		<ul class="neo-content">
			<li><? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_1'] .'"><img  src="'. $_MODULE['fullbanner_img_1'] .'"></a>'; ?></li>
			<li><? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_2'] .'"><img  src="'. $_MODULE['fullbanner_img_2'] .'"></a>'; ?></li>
			<li><? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_3'] .'"><img  src="'. $_MODULE['fullbanner_img_3'] .'"></a>'; ?></li>
            <li><? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_4'] .'"><img  src="'. $_MODULE['fullbanner_img_4'] .'"></a>'; ?></li>
		</ul>
		<ul class="neo-nav">
			<li class="neo-active">1</li>
			<li>2</li>
			<li>3</li>
            <li>4</li>
		</ul>
	</div>
</div>




</div>
<?php
/**
 * 开始设计PHP页面
 */
?>
</div>

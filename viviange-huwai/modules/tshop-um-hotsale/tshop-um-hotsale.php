
<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-hotsale"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-hotsale">

<div class="slider-promo J_TWidget" data-type="scrollx" data-widget-config="{

    	'effect':'scrollx',

        'contentCls':'lst-main',

        'navCls':'neo-nav', 

        'activeTriggerCls': 'neo-active'

        				}" data-widget-type="Slide" style="width:950px;height:706px;">
	<ul class="neo-nav" >
		<li class="neo-active" >
			<span><? if ( $_MODULE['tab_title_01'] ){	echo $_MODULE['tab_title_01'] ;} ?></span></li>
		<li >
			<span><? if ( $_MODULE['tab_title_02'] ){	echo $_MODULE['tab_title_02'] ;} ?></span></li>
		<li>
			<span><? if ( $_MODULE['tab_title_03'] ){	echo $_MODULE['tab_title_03'] ;} ?></span></li>
		<li>
			<span><? if ( $_MODULE['tab_title_04'] ){	echo $_MODULE['tab_title_04'] ;} ?></span></li>
	</ul>
	<ul class="lst-main">
		<li>
			<? if ( $_MODULE['tab_html_01'] ){	echo $_MODULE['tab_html_01'] ;} ?>
		</li>
		<li>
			<? if ( $_MODULE['tab_html_02'] ){	echo $_MODULE['tab_html_02'] ;} ?>
		</li>
		<li>
			<? if ( $_MODULE['tab_html_03'] ){	echo $_MODULE['tab_html_03'] ;} ?>
		</li>
		<li>
			<? if ( $_MODULE['tab_html_04'] ){	echo $_MODULE['tab_html_04'] ;} ?>
		</li>
	</ul>
</div>

<?php
/**
 * 开始设计PHP页面
 */
?>
</div>

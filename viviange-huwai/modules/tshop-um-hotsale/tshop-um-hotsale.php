
<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-hotsale"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
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
 * ��ʼ���PHPҳ��
 */
?>
</div>

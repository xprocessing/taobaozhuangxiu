<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-fullscreen"��class���Կ�����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-fullscreen">
<div class="fullscreen-content">
<? if ( $_MODULE['fullbanner_html'] ){	echo $_MODULE['fullbanner_html'] ;} ?>

<div class="neo-fullcarou"  <? if ( $_MODULE['fullbanner_html'] ){	echo "style='display:none'" ;} ?>>
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
'autoplay':true,
'delay':0.5,
'easing':'bounceIn'}" data-widget-type="Carousel" style="height:<? echo $_MODULE['fullbanner_height']?>px">
		<span class="neo-prev"></span><span class="neo-next"></span>
		<ul class="neo-content">
			<li>
           <? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_1'] .'"><img  src="'. $_MODULE['fullbanner_img_1'] .'"></a>'; ?>
				</li>
			<li>
				<? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_2'] .'"><img  src="'. $_MODULE['fullbanner_img_2'] .'"></a>'; ?></li>
			<li>
				<? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_3'] .'"><img  src="'. $_MODULE['fullbanner_img_3'] .'"></a>'; ?></li>
		</ul>
		<ul class="neo-nav" <? echo 'style="display:'.$_MODULE['navshowhide'].';"' ?> >
			<li class="neo-active">
				<? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_1'] .'"><img  src="'. $_MODULE['fullbanner_img_1'] .'"></a>'; ?></li>
			<li>
				<? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_2'] .'"><img  src="'. $_MODULE['fullbanner_img_2'] .'"></a>'; ?></li>
			<li>
				<? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_3'] .'"><img  src="'. $_MODULE['fullbanner_img_3'] .'"></a>'; ?></li>
		</ul>
	</div>
</div>




</div>
<?php
/**
 * ��ʼ���PHPҳ��
 */
?>
</div>
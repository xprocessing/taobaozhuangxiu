

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-slidewithhumbnail"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
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

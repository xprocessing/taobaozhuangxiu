<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-fullscreenwithTicket"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-fullscreenwithTicket">
  <div class="fullscreen-content" 
<?
echo'style="';
 echo 'background-image:url('.$_MODULE['fullbanner_bg'].');';
 echo 'background-color:'.$_MODULE['fullbanner_bgcolor'].';';
  echo 'padding-top:'.$_MODULE['fullbanner_paddingtopheight'].'px;';
 echo '"';
 ?>

>
    <? if ( $_MODULE['fullbanner_html'] ){	echo $_MODULE['fullbanner_html'] ;} ?>
    <div class="neo-fullcarou"  <? if ( $_MODULE['fullbanner_html'] ){	echo "style='display:none'" ;} ?>>
      <div class="neo-layermore"> 
        <? if ( $_MODULE['layermore'] )
			echo $_MODULE['layermore'] ;
		else		
			echo '<img src="assets/images/layermore.png" width="1920"   alt=""/>';
			
		
		 ?>
      </div>
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
'easing':'bounceIn'}" data-widget-type="Carousel" style="height:<? echo $_MODULE['fullbanner_height']?>px"> <span class="neo-prev"></span><span class="neo-next"></span>
        <ul class="neo-content">
          <li> <? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_1'] .'"><img  src="'. $_MODULE['fullbanner_img_1'] .'"></a>'; ?> </li>
          <li> <? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_2'] .'"><img  src="'. $_MODULE['fullbanner_img_2'] .'"></a>'; ?></li>
          <li> <? echo '<a target="_blank" href="'. $_MODULE['fullbanner_link_3'] .'"><img  src="'. $_MODULE['fullbanner_img_3'] .'"></a>'; ?></li>
        </ul>
        <ul class="neo-nav" <? echo 'style="display:'.$_MODULE['navshowhide'].';"' ?> >
          <li class="neo-active"></li>
          <li></li>
          <li></li>
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

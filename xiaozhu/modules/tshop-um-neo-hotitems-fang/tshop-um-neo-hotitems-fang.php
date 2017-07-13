<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-hotitems-fang"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-hotitems-fang">
 <div class="neo-title">
  <? echo '<a target="_blank" href="'. $_MODULE['neo-hotitemstitle-link'] .'"><img  src="'. $_MODULE['neo-hotitemstitle-img'] .'"></a>'; ?>
  </div>
  <div class="neo-hotitems">
    <ul>
      <?
		if($_MODULE['hotitems']){ $ids=explode(',',$_MODULE['hotitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",8);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-item">';
			echo '<div class="neo-item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a></div>';
			
		
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div class="neo-item-price">'.'<strong>RMB</strong>'.'<span>'.$item->discountPrice.'</span><em>'.$item->price.'</em></div>';		
			
			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
</div>

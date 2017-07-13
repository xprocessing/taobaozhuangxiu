<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-cuxiao"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-cuxiao">
 <h2><? echo $_MODULE['neo-hd-title-a'] ?></h2>
  <ul class="goods_list">
      
   
      <?
		if($_MODULE['good-items']){ $ids=explode(',',$_MODULE['good-items']);

	 $items = $itemManager->queryByIds($ids,$_MODULE['neo-items-option']);}
		else{$items  = $itemManager-> queryByKeyword ("",$_MODULE['neo-items-option'],6);}
		
		$itemnames=explode('#',$_MODULE['neo-items-names']);
		$index = 0;
		foreach($items as $item ){
			
			$nameindex = $index++;
			
			echo '<li>';			
			echo '<div class="item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			echo  '<div class="item-info">';
			echo '<div class="item-zhekou">'.number_format($item->discountPrice/$item->price*10,1).'折</div>';
			echo '<div class="item-price">';
			echo '<div class="item-yuanjia">原价：<em>'.number_format($item->price,0).'</em></div>';
			echo '<div class="item-zhekoujia">促销：<em>'.number_format($item->discountPrice,0).'</em></div>';
			echo '</div>';
			
			
			echo '</div>';
			
			echo '</li>';

         }

   
   ?>
   
   
  </ul>
</div>

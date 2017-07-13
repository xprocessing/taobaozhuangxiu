<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-itemlistbig"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-itemlistbig">
<? if($_MODULE['neo-hd-title']){ echo '<div class="neo-hd-title">'.$_MODULE['neo-hd-title'].'</div>';}  ?>
<div class="neo-bd">
<ul class="itemlist">

 <?
		if($_MODULE['neo-items']){ $ids=explode(',',$_MODULE['neo-items']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",8);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-item">';
			echo '<div class="neo-item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a></div>';
			
		echo  '<div class="neo-item-desc">';
		
		
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div class="neo-discountprice">限时特价'.$item->discountPrice.'元</div>';
			echo  '<div class="neo-soldCount">最近30天售出：<span>'.$item->soldCount.'</span> 件</div>';	        
			
			
			
			 echo  '<div class="neo-addcart">'.'<a class="J_CartPluginTrigger" href="'.$uriManager-> detailURI($item).'" target="blank"><img src="assets/images/addcart.png">'.'</a></div>';
			
		echo  '</div>';

			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
</ul>

</div>

</div>

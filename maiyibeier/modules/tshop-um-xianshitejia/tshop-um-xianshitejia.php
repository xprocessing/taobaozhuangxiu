<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-xianshitejia"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-xianshitejia">
<div class="neo-hd"><img src="assets/images/title.png" ></div>
<div class="neo-bd">
<ul class="itemlist">

 <?
		if($_MODULE['neo-items']){ $ids=explode(',',$_MODULE['neo-items']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",2);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-item-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		echo  '<div class="neo-item-desc">';
		echo  '<div class="neo-discountprice">￥'.round($item->discountPrice,2).'</div>';
		echo  '<div class="neo-price">参考价：￥'.round($item->price,2).'</div>';
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			
			echo  '<div class="neo-soldCount">热销：'.$item->soldCount.'件</div>';	        
			echo  '<div class="neo-favmore"><span>收藏人气：'.$item->collectedCount.'</span>';				
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">(点击收藏)</a></span></div>';
			
			
			 echo  '<div class="neo-addcart">'.'<a class="J_CartPluginTrigger" href="'.$uriManager-> detailURI($item).'" target="blank">加入购物车'.'</a></div>';
			
		echo  '</div>';

			 
			 echo '</li>';

         }

   
   ?>
</ul>

</div>



</div>

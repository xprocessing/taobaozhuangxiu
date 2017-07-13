

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-smallwaterfall"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-smallwaterfall">

 
  <div class="neo-waterfall-row">
  <ul>
<?
		if($_MODULE['rowoneitems']){ $ids=explode(',',$_MODULE['rowoneitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",9);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>宝贝售价：￥'.$item->price.'</div>';
			echo  '<div>宝贝热销：'.$item->soldCount.'件</div>';	        
			echo  "<div>宝贝收藏人气：".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+点击收藏</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">旺旺在线：'.$uriManager->supportTag($_user->nick,"有问题旺我哦",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 
  
  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowtwoitems']){ $ids=explode(',',$_MODULE['rowtwoitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_hotsell",10);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-160pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(160).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>宝贝售价：￥'.$item->price.'</div>';
			echo  '<div>宝贝热销：'.$item->soldCount.'件</div>';	        
			echo  "<div>宝贝收藏人气：".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+点击收藏</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">旺旺在线：'.$uriManager->supportTag($_user->nick,"有问题旺我哦",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 
    
  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowthreeitems']){ $ids=explode(',',$_MODULE['rowthreeitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_hotsell",9);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>宝贝售价：￥'.$item->price.'</div>';
			echo  '<div>宝贝热销：'.$item->soldCount.'件</div>';	        
			echo  "<div>宝贝收藏人气：".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+点击收藏</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">旺旺在线：'.$uriManager->supportTag($_user->nick,"有问题旺我哦",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 
    
  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowfouritems']){ $ids=explode(',',$_MODULE['rowfouritems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",10);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-160pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(160).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>宝贝售价：￥'.$item->price.'</div>';
			echo  '<div>宝贝热销：'.$item->soldCount.'件</div>';	        
			echo  "<div>宝贝收藏人气：".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+点击收藏</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">旺旺在线：'.$uriManager->supportTag($_user->nick,"有问题旺我哦",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 

  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowfiveitems']){ $ids=explode(',',$_MODULE['rowfiveitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_hotsell",9);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>宝贝售价：￥'.$item->price.'</div>';
			echo  '<div>宝贝热销：'.$item->soldCount.'件</div>';	        
			echo  "<div>宝贝收藏人气：".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+点击收藏</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">旺旺在线：'.$uriManager->supportTag($_user->nick,"有问题旺我哦",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  

  
 
  
  
  
  
  
  
  
  
  
  
  
   </div>
</div>

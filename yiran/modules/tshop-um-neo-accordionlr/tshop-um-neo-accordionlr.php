

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-accordionlr"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-accordionlr">
  <div class="J_TWidget neo-accordion" data-widget-type="Accordion" data-widget-config="{
'triggerCls':'neo-trigger',
'panelCls':'neo-panel',
'activeTriggerCls':'neo-active',
'triggerType':'mouse',
'multiple':false
}">

<?
		if($_MODULE['accordionitems']){ $ids=explode(',',$_MODULE['accordionitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",7);}
		$i = 0;
		foreach($items as $item ){
			$i++;
			$imore='<span class="listnumber">'.$i.'.</span>';
			if($i==1)
			{
		 echo  '<div class="neo-trigger neo-active">'.$imore.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
		 echo '<div class="neo-panel"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a>';
			}
			else
			{
				 echo  '<div class="neo-trigger">'.$imore.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
				 echo '<div class="neo-panel" style="display:none;"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a>';
				}
				
			
			
		
	       
			echo  '<div><span>售价：￥'.$item->price.'</span>'.'<span>&nbsp;&nbsp;&nbsp;热销：'.$item->soldCount.'件</span></div>';
			
		
			
		
			 echo  '<div class="neo-water-more">';
			
/*喜欢*/

  echo '<div class="sns-widget" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></div>';		
			
			
			 echo  '</div>';
			 echo  '</div>';
			 
			

         }

   
   ?>



   
  </div>

</div>

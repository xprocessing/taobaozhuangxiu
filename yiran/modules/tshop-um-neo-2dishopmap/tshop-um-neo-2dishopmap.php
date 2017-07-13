

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-2dishopmap"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-2dishopmap" <? echo 'style="height:'.$_MODULE['neo-2dishopmap-height-new'].'px;"'?> >
<div  class="J_TWidget neo-tabs" data-widget-type="Tabs"  data-widget-config="{'navCls':'neo-tabs-nav','contentCls':'neo-tabs-content','activeTriggerCls':'neo-active','effect': 'fade','autoplay': true,'circular': true,'triggerType':'mouse'}">
    <ul class="neo-tabs-nav">
        <li class="neo-active"><? echo $_MODULE['neo-2dishopmap-title-01']?></li>
        <li><? echo $_MODULE['neo-2dishopmap-title-02']?></li>
        
    </ul>
    <ul class="neo-tabs-content">
        <li> <?php

      

	$allShopCategory  = $shopCategoryManager->queryAll();

        foreach($allShopCategory as $shopCategory){

      	     echo '<div class="neo-cats-list"  >';
			  
			 echo '<a class="neo-lv1cats" href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" >'.$shopCategory->name.'</a>';
			 
			 
			echo '<span class="neo-lv2cats" >';
			
			
			
			 $subCategories = $shopCategoryManager->querySubCategories ($shopCategory->id);
			 
			  foreach($subCategories as $shopsubCategory ){	   
		  
		  echo '<a href="'.$uriManager->shopCategoryURI ($shopsubCategory).'" target="_blank">'.$shopsubCategory->name.'</a>';
		  };
			 
			 
			  echo '</span>';
			  echo '</div>';

	}
?></li>
        <li style="display:none">
           <?
		
		if ( $_MODULE['neo-2dishopmap-html'] ){	echo $_MODULE['neo-2dishopmap-html'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-2dishopmap-link'] .'"><img  src="'. $_MODULE['neo-2dishopmap-img'] .'"></a>'; }		
		 
		  ?>
        </li>        
    </ul>
</div>

</div>

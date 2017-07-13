<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-topnewbottomcats"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-topnewbottomcats">
  <h2><? echo $_MODULE['neo-hd-title-a'] ?><a target="_blank" href="<? echo $_MODULE['neo-hd-title-link'] ?>"><? echo $_MODULE['neo-hd-title-b'] ?></a><a target="_blank" href="<? echo $_MODULE['neo-hd-title-link'] ?>" class="new_tip"><em><? echo $_MODULE['neo-hd-title-c'] ?></em><i></i></a></h2>
  <ul class="goods_list">
      
   
      <?
		if($_MODULE['right-items']){ $ids=explode(',',$_MODULE['right-items']);

	 $items = $itemManager->queryByIds($ids,$_MODULE['neo-items-option']);}
		else{$items  = $itemManager-> queryByKeyword ("",$_MODULE['neo-items-option'],6);}
		
		$itemnames=explode('#',$_MODULE['neo-items-names']);
		$index = 0;
		foreach($items as $item ){
			
			$nameindex = $index++;
			
			echo '<li>';			
			echo '<div class="item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			echo  '<div class="item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$itemnames[$nameindex].'</a></div>';
			
			echo '</li>';

         }

   
   ?>
   
   
  </ul>
  <div class="<? echo $_MODULE['bottom-cats-option'] ?>">
 <?php

      
if ( $_MODULE['neo-category']){


$json = $_MODULE['neo-category'];
/*通过PHP函数解析json数据生成JSON数组*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* 根据json对象获取rid属性的属性值即得到一级类目 */
/*echo '父id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "父店铺类目名称是: ".$shopCategory->name."<br>";*/
echo '<div class="neo-lv1cats">';
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" class="catlv1" >'.$shopCategory->name.'</a>';
echo '</div>';
/*二级类目是通过','分隔的字符串（一定注意是半角逗号字符）*/
echo '<div class="neo-lv2cats" >';
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "子店铺类目名称是: ".$subShopCategory->name."<br>";*/
echo '<a href="'.$uriManager->shopCategoryURI ($subShopCategory).'" target="_blank" >'.$subShopCategory->name.'</a>';
}
echo '</div>';
}
	
		
		
		
		}
	else {
		
		$allShopCategory  = $shopCategoryManager->queryAll();

        foreach($allShopCategory as $shopCategory){

      	    
			  
			 echo '<div  class="neo-lv1cats"><a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" >'.$shopCategory->name.'</a></div>';
			 
			 
			echo '<div class="neo-lv2cats" >';
			
			
			
			 $subCategories = $shopCategoryManager->querySubCategories ($shopCategory->id);
			 
			  foreach($subCategories as $shopsubCategory ){	   
		  
		  echo '<a href="'.$uriManager->shopCategoryURI ($shopsubCategory).'" target="_blank">'.$shopsubCategory->name.'</a>';
		  };
			 
			 
			  echo '</div>';
			

	}
		
		
		}
	
	
	
	
	
	
?>


  </div>
  
  <?php
/**
 * 开始设计PHP页面
 */
?>
</div>

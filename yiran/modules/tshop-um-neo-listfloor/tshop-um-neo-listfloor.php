

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-listfloor"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-listfloor">
<div class="neo-hd"><span class="neo-hd-title"><? echo $_MODULE['neo-hd-title']?></span>
<?
$json = $_MODULE['neo-hd-category'];
/*通过PHP函数解析json数据生成JSON数组*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* 根据json对象获取rid属性的属性值即得到一级类目 */
/*echo '父id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "父店铺类目名称是: ".$shopCategory->name."<br>";*/
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" >'.$shopCategory->name.'</a>';

/*二级类目是通过','分隔的字符串（一定注意是半角逗号字符）*/
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "子店铺类目名称是: ".$subShopCategory->name."<br>";*/
echo '<a href="'.$uriManager->shopCategoryURI ($subShopCategory).'" target="_blank" >'.$subShopCategory->name.'</a>';
}
}
?>



</div>
<div class="neo-bd">
<div class="<? echo $_MODULE['neo-left-banner-option'] ?>">

<?
if ( $_MODULE['left-items'] ){	
$ids=explode(',',$_MODULE['left-items']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-570pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(570).'"/></a></div>';


}
	else { echo '<a target="_blank" href="'. $_MODULE['left-banner-link'] .'"><img  src="'. $_MODULE['left-banner'] .'"></a>';  }		
		 


 
 ?>

</div>
<div class="<? if($_MODULE['neo-left-banner-option']=="left-banner-show"){ echo "right-items";} else {echo "right-items right-items-full";} ?>">
<ul>
      <?
		if($_MODULE['right-items']){ $ids=explode(',',$_MODULE['right-items']);

	 $items = $itemManager->queryByIds($ids,$_MODULE['neo-items-option']);}
		else{$items  = $itemManager-> queryByKeyword ("",$_MODULE['neo-items-option'],6);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="right-item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="right-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo'<div class="item-more">';
			echo  '<span class="item-more-price">售价：￥'.$item->price.'</span>';    	
/*喜欢*/

  echo '<span class="sns-widget item-more-sns" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></span>';		
			
			
			
			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    </ul>

</div>

</div>


</div>

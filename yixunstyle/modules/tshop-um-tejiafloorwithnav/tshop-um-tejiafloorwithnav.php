<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-tejiafloorwithnav"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-tejiafloorwithnav">
  <div class="neo-bd" <? if($_MODULE['neo-bd-bgcolor']){echo 'style="background-color:'.$_MODULE['neo-bd-bgcolor'].';"';} ?>>
    <ul class="itemlist">
      <li>
        <div class="neo-item floornav">
          <div class="nav-title"><? echo $_MODULE['nav-title']; ?></div>
          <div class="nav-title-desc"><? echo $_MODULE['nav-title-desc']; ?></div>
          <div class="nav-pic"><? echo '<a target="_blank" href="'. $_MODULE['nav-pic-link'] .'"><img  src="'. $_MODULE['nav-pic-img'] .'"></a>'; ?></div>
          <div class="nav-cats">
            <?
$json = $_MODULE['neo-category'];
/*通过PHP函数解析json数据生成JSON数组*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* 根据json对象获取rid属性的属性值即得到一级类目 */
/*echo '父id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "父店铺类目名称是: ".$shopCategory->name."<br>";*/
echo '<div class="catlv1lv2">';
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" class="catlv1" >'.$shopCategory->name.'</a>';

/*二级类目是通过','分隔的字符串（一定注意是半角逗号字符）*/
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "子店铺类目名称是: ".$subShopCategory->name."<br>";*/
echo '<a href="'.$uriManager->shopCategoryURI ($subShopCategory).'" target="_blank" >'.$subShopCategory->name.'</a>';
}
echo '</div>';
}
?>
          </div>
          <div class="nav-more"><? echo '<a target="_blank" href="'. $_MODULE['nav-more-link'] .'">'. $_MODULE['nav-more-text'].'</a>'; ?> </div>
        </div>
      </li>
      <?
		if($_MODULE['neo-items']){ $ids=explode(',',$_MODULE['neo-items']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",11);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-item">';
			echo '<div class="neo-item-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a></div>';
			
		echo  '<div class="neo-item-desc">';
		echo  '<div class="neo-discountprice">￥'.round($item->discountPrice,2).'</div>';
		echo  '<div class="neo-price">参考价：￥'.round($item->price,2).'</div>';
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			
			echo  '<div class="neo-soldCount">热销：'.$item->soldCount.'件</div>';	        
			echo  '<div class="neo-favmore"><span>收藏人气：'.$item->collectedCount.'</span>';				
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">&nbsp;(点击收藏)</a></span></div>';
			
			
			 echo  '<div class="neo-addcart">'.'<a class="J_CartPluginTrigger" href="'.$uriManager-> detailURI($item).'" target="blank">加入购物车'.'</a></div>';
			
		echo  '</div>';

			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-topnewbottomcats"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
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
/*ͨ��PHP��������json��������JSON����*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* ����json�����ȡrid���Ե�����ֵ���õ�һ����Ŀ */
/*echo '��id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "��������Ŀ������: ".$shopCategory->name."<br>";*/
echo '<div class="neo-lv1cats">';
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" class="catlv1" >'.$shopCategory->name.'</a>';
echo '</div>';
/*������Ŀ��ͨ��','�ָ����ַ�����һ��ע���ǰ�Ƕ����ַ���*/
echo '<div class="neo-lv2cats" >';
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "�ӵ�����Ŀ������: ".$subShopCategory->name."<br>";*/
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
 * ��ʼ���PHPҳ��
 */
?>
</div>



<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-listfloor"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-listfloor">
<div class="neo-hd"><span class="neo-hd-title"><? echo $_MODULE['neo-hd-title']?></span>
<?
$json = $_MODULE['neo-hd-category'];
/*ͨ��PHP��������json��������JSON����*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* ����json�����ȡrid���Ե�����ֵ���õ�һ����Ŀ */
/*echo '��id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "��������Ŀ������: ".$shopCategory->name."<br>";*/
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" >'.$shopCategory->name.'</a>';

/*������Ŀ��ͨ��','�ָ����ַ�����һ��ע���ǰ�Ƕ����ַ���*/
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "�ӵ�����Ŀ������: ".$subShopCategory->name."<br>";*/
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
			echo  '<span class="item-more-price">�ۼۣ���'.$item->price.'</span>';    	
/*ϲ��*/

  echo '<span class="sns-widget item-more-sns" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></span>';		
			
			
			
			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    </ul>

</div>

</div>


</div>

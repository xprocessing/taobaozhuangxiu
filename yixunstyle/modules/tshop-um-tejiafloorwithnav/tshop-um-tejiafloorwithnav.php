<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-tejiafloorwithnav"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
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
/*ͨ��PHP��������json��������JSON����*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* ����json�����ȡrid���Ե�����ֵ���õ�һ����Ŀ */
/*echo '��id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "��������Ŀ������: ".$shopCategory->name."<br>";*/
echo '<div class="catlv1lv2">';
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" class="catlv1" >'.$shopCategory->name.'</a>';

/*������Ŀ��ͨ��','�ָ����ַ�����һ��ע���ǰ�Ƕ����ַ���*/
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "�ӵ�����Ŀ������: ".$subShopCategory->name."<br>";*/
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
		echo  '<div class="neo-discountprice">��'.round($item->discountPrice,2).'</div>';
		echo  '<div class="neo-price">�ο��ۣ���'.round($item->price,2).'</div>';
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			
			echo  '<div class="neo-soldCount">������'.$item->soldCount.'��</div>';	        
			echo  '<div class="neo-favmore"><span>�ղ�������'.$item->collectedCount.'</span>';				
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">&nbsp;(����ղ�)</a></span></div>';
			
			
			 echo  '<div class="neo-addcart">'.'<a class="J_CartPluginTrigger" href="'.$uriManager-> detailURI($item).'" target="blank">���빺�ﳵ'.'</a></div>';
			
		echo  '</div>';

			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-cuxiao"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-cuxiao">
 <h2><? echo $_MODULE['neo-hd-title-a'] ?></h2>
  <ul class="goods_list">
      
   
      <?
		if($_MODULE['good-items']){ $ids=explode(',',$_MODULE['good-items']);

	 $items = $itemManager->queryByIds($ids,$_MODULE['neo-items-option']);}
		else{$items  = $itemManager-> queryByKeyword ("",$_MODULE['neo-items-option'],6);}
		
		$itemnames=explode('#',$_MODULE['neo-items-names']);
		$index = 0;
		foreach($items as $item ){
			
			$nameindex = $index++;
			
			echo '<li>';			
			echo '<div class="item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			echo  '<div class="item-info">';
			echo '<div class="item-zhekou">'.number_format($item->discountPrice/$item->price*10,1).'��</div>';
			echo '<div class="item-price">';
			echo '<div class="item-yuanjia">ԭ�ۣ�<em>'.number_format($item->price,0).'</em></div>';
			echo '<div class="item-zhekoujia">������<em>'.number_format($item->discountPrice,0).'</em></div>';
			echo '</div>';
			
			
			echo '</div>';
			
			echo '</li>';

         }

   
   ?>
   
   
  </ul>
</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-hotitems-fang"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-hotitems-fang">
 <div class="neo-title">
  <? echo '<a target="_blank" href="'. $_MODULE['neo-hotitemstitle-link'] .'"><img  src="'. $_MODULE['neo-hotitemstitle-img'] .'"></a>'; ?>
  </div>
  <div class="neo-hotitems">
    <ul>
      <?
		if($_MODULE['hotitems']){ $ids=explode(',',$_MODULE['hotitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",8);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-item">';
			echo '<div class="neo-item-pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a></div>';
			
		
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div class="neo-item-price">'.'<strong>RMB</strong>'.'<span>'.$item->discountPrice.'</span><em>'.$item->price.'</em></div>';		
			
			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-labsa"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-labsa">

  <div class="neo-title">
  <span class="neo-title-a"><? echo $_MODULE['neo-title-a']; ?></span>
  <span class="neo-title-b"><? echo $_MODULE['neo-title-b']; ?></span>
   <span class="neo-title-c"><? echo $_MODULE['neo-title-c']; ?></span>

  
  </div>
  
  <div class="list-box">
    <ul>
    
    <?
		if($_MODULE['neo-items']){ $ids=explode(',',$_MODULE['neo-items']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",9);}
		
  


		foreach($items as $item ){
			
			echo '<li >';
			echo '<div class="item">';
			echo '<div class="neo-item">';
			echo '<div class="neo-item-300pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(300).'"/></a></div>';
			
		echo  '<div class="neo-item-desc">';
			
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div class="neo-discountprice">һ�ڼ�<span>'.$item->discountPrice.'RMB</span></div>';	
			
			 echo  '<div class="addcollect">'.'<a class="J_CartPluginTrigger" href="'.$uriManager-> detailURI($item).'" target="blank"><img src="http://img04.taobaocdn.com/imgextra/i4/876980064/TB2TgaiXVXXXXa_XpXXXXXXXXXX-876980064.png" width="73" height="74"  alt=""/>'.'</a></div>';
			
		echo  '</div>';
		 echo '</div>';

			 echo '</div>';
			 echo '</li>';

         }

   
   ?>
    

    </ul>


</div>
</div>

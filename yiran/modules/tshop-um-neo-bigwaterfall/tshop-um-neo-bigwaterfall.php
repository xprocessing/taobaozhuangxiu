

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-bigwaterfall"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>

<div class="tb-module tshop-um tshop-um-neo-bigwaterfall">
  <div class="neo-bigwaterfall-row">
    <ul>
      <?
		if($_MODULE['bigrowoneitems']){ $ids=explode(',',$_MODULE['bigrowoneitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",10);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  '<div class="neo-favmore"><span>�����ղ�������'.$item->collectedCount.'</span>';				
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span></div>';
			
		
			 echo  '<div class="neo-water-more">';
			
/*ϲ��*/

  echo '<div class="sns-widget" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></div>';		
			
			
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
  <div class="neo-bigwaterfall-row">
    <ul>
      <?
	if($_MODULE['bigrowtwoitems']){ $ids=explode(',',$_MODULE['bigrowtwoitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_price",8);}

		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-310pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  '<div class="neo-favmore"><span>�����ղ�������'.$item->collectedCount.'</span>';				
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span></div>';
			
		
			 echo  '<div class="neo-water-more">';
			
			
/*ϲ��*/

  echo '<div class="sns-widget" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></div>';	
			
			
			
			
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
  <div class="neo-bigwaterfall-row">
    <ul>
      <?
   	if($_MODULE['bigrowthreeitems']){ $ids=explode(',',$_MODULE['bigrowthreeitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","newOn",10);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  '<div class="neo-favmore"><span>�����ղ�������'.$item->collectedCount.'</span>';						
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span></div>';
			
		
			 echo  '<div class="neo-water-more">';
			
			/*ϲ��*/

  echo '<div class="sns-widget" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></div>';	

			
			
			
			
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
  <div class="neo-bigwaterfall-row">
    <ul>
      <?
 	if($_MODULE['bigrowfouritems']){ $ids=explode(',',$_MODULE['bigrowfouritems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","HotKeep",8);}

		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-310pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  '<div class="neo-favmore"><span>�����ղ�������'.$item->collectedCount.'</span>';						
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span></div>';
			
		
			 echo  '<div class="neo-water-more">';
			
			/*ϲ��*/

  echo '<div class="sns-widget" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></div>';	

			
			
			
			
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
    </ul>
  </div>
</div>



<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-smallwaterfall"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-smallwaterfall">

 
  <div class="neo-waterfall-row">
  <ul>
<?
		if($_MODULE['rowoneitems']){ $ids=explode(',',$_MODULE['rowoneitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",9);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  "<div>�����ղ�������".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">�������ߣ�'.$uriManager->supportTag($_user->nick,"����������Ŷ",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 
  
  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowtwoitems']){ $ids=explode(',',$_MODULE['rowtwoitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_hotsell",10);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-160pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(160).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  "<div>�����ղ�������".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">�������ߣ�'.$uriManager->supportTag($_user->nick,"����������Ŷ",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 
    
  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowthreeitems']){ $ids=explode(',',$_MODULE['rowthreeitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_hotsell",9);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  "<div>�����ղ�������".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">�������ߣ�'.$uriManager->supportTag($_user->nick,"����������Ŷ",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 
    
  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowfouritems']){ $ids=explode(',',$_MODULE['rowfouritems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",10);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-160pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(160).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  "<div>�����ղ�������".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">�������ߣ�'.$uriManager->supportTag($_user->nick,"����������Ŷ",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  
  </div>
  
 

  <div class="neo-waterfall-row">
  <ul>
<?
if($_MODULE['rowfiveitems']){ $ids=explode(',',$_MODULE['rowfiveitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","_hotsell",9);}


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-water-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		
	        echo  '<div class="neo-water-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			echo  '<div>�����ۼۣ���'.$item->price.'</div>';
			echo  '<div>����������'.$item->soldCount.'��</div>';	        
			echo  "<div>�����ղ�������".$item->collectedCount.'</div>';				
			
			
		
			 echo  '<div class="neo-water-more">';
			 echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">+����ղ�</a></span>';
			 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="neo-wangwang">�������ߣ�'.$uriManager->supportTag($_user->nick,"����������Ŷ",2,false).'</span>';		
			 echo  '</div>';
			 
			 echo '</li>';

         }

   
   ?>
  </ul>
  

  
 
  
  
  
  
  
  
  
  
  
  
  
   </div>
</div>

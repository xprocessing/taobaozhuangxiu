

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-accordionlr"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-accordionlr">
  <div class="J_TWidget neo-accordion" data-widget-type="Accordion" data-widget-config="{
'triggerCls':'neo-trigger',
'panelCls':'neo-panel',
'activeTriggerCls':'neo-active',
'triggerType':'mouse',
'multiple':false
}">

<?
		if($_MODULE['accordionitems']){ $ids=explode(',',$_MODULE['accordionitems']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",7);}
		$i = 0;
		foreach($items as $item ){
			$i++;
			$imore='<span class="listnumber">'.$i.'.</span>';
			if($i==1)
			{
		 echo  '<div class="neo-trigger neo-active">'.$imore.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
		 echo '<div class="neo-panel"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a>';
			}
			else
			{
				 echo  '<div class="neo-trigger">'.$imore.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
				 echo '<div class="neo-panel" style="display:none;"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(310).'"/></a>';
				}
				
			
			
		
	       
			echo  '<div><span>�ۼۣ���'.$item->price.'</span>'.'<span>&nbsp;&nbsp;&nbsp;������'.$item->soldCount.'��</span></div>';
			
		
			
		
			 echo  '<div class="neo-water-more">';
			
/*ϲ��*/

  echo '<div class="sns-widget" data-like=\'{"skinType":1,"type":2,"key":'.$item->id.',}\'></div>';		
			
			
			 echo  '</div>';
			 echo  '</div>';
			 
			

         }

   
   ?>



   
  </div>

</div>

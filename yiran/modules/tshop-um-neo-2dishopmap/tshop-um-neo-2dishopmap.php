

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-2dishopmap"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-2dishopmap" <? echo 'style="height:'.$_MODULE['neo-2dishopmap-height-new'].'px;"'?> >
<div  class="J_TWidget neo-tabs" data-widget-type="Tabs"  data-widget-config="{'navCls':'neo-tabs-nav','contentCls':'neo-tabs-content','activeTriggerCls':'neo-active','effect': 'fade','autoplay': true,'circular': true,'triggerType':'mouse'}">
    <ul class="neo-tabs-nav">
        <li class="neo-active"><? echo $_MODULE['neo-2dishopmap-title-01']?></li>
        <li><? echo $_MODULE['neo-2dishopmap-title-02']?></li>
        
    </ul>
    <ul class="neo-tabs-content">
        <li> <?php

      

	$allShopCategory  = $shopCategoryManager->queryAll();

        foreach($allShopCategory as $shopCategory){

      	     echo '<div class="neo-cats-list"  >';
			  
			 echo '<a class="neo-lv1cats" href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" >'.$shopCategory->name.'</a>';
			 
			 
			echo '<span class="neo-lv2cats" >';
			
			
			
			 $subCategories = $shopCategoryManager->querySubCategories ($shopCategory->id);
			 
			  foreach($subCategories as $shopsubCategory ){	   
		  
		  echo '<a href="'.$uriManager->shopCategoryURI ($shopsubCategory).'" target="_blank">'.$shopsubCategory->name.'</a>';
		  };
			 
			 
			  echo '</span>';
			  echo '</div>';

	}
?></li>
        <li style="display:none">
           <?
		
		if ( $_MODULE['neo-2dishopmap-html'] ){	echo $_MODULE['neo-2dishopmap-html'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-2dishopmap-link'] .'"><img  src="'. $_MODULE['neo-2dishopmap-img'] .'"></a>'; }		
		 
		  ?>
        </li>        
    </ul>
</div>

</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-leftsliderightcats"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>

<div class="tb-module tshop-um tshop-um-leftsliderightcats">
  <div class="neo-leftslide">
    <div class="J_TWidget neoslide" data-widget-type="Slide" data-widget-config="{
'navCls':'neo-nav',
'contentCls':'neo-content',
'activeTriggerCls':'neo-active',
'effect':'scrollx',
'autoplay':'true'
}">
      <ul class="neo-content">
        <li>
          <?
		
		if ( $_MODULE['neo-slide_html_1'] ){	echo $_MODULE['neo-slide_html_1'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_1'] .'"><img  src="'. $_MODULE['neo-slide_img_1'] .'"></a>'; }		
		 
		  ?>
        </li>
        <li>
          <?
		
		if ( $_MODULE['neo-slide_html_2'] ){	echo $_MODULE['neo-slide_html_2'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_2'] .'"><img  src="'. $_MODULE['neo-slide_img_2'] .'"></a>'; }		
		 
		  ?>
        </li>
        <li>
          <?
		
		if ( $_MODULE['neo-slide_html_3'] ){	echo $_MODULE['neo-slide_html_3'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_3'] .'"><img  src="'. $_MODULE['neo-slide_img_3'] .'"></a>'; }		
		 
		  ?>
        </li>
        <li>
          <?
		
		if ( $_MODULE['neo-slide_html_4'] ){	echo $_MODULE['neo-slide_html_4'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_4'] .'"><img  src="'. $_MODULE['neo-slide_img_4'] .'"></a>'; }		
		 
		  ?>
        </li>
        <li>
          <?
		
		if ( $_MODULE['neo-slide_html_5'] ){	echo $_MODULE['neo-slide_html_5'] ;}
	else { echo '<a target="_blank" href="'. $_MODULE['neo-slide_link_5'] .'"><img  src="'. $_MODULE['neo-slide_img_5'] .'"></a>'; }		
		 
		  ?>
        </li>
      </ul>
      <ul class="neo-nav">
        <li class="neo-active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
  <div class="neo-rightcats">
    <div class="neo-rightcats-content">
      <div class="neo-rightcats-title"> <span class="neo-title"><? echo $_MODULE['neo-title']?></span> <span class="neo-act"><a href="<? echo $uriManager->searchURI(); ?>" target="_blank">����>></a></span> </div>
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
<? if ( $_MODULE['neo-rightcats-content-other'] ){	echo $_MODULE['neo-rightcats-content-other'] ;} ?>

    </div>
  </div>
  <?php
/**
 * ��ʼ���PHPҳ��
 */
?>
</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-itemlistforcustom"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>

<div class="tb-module tshop-um tshop-um-itemlistforcustom">
  <?php
/**
 * ��ʼ���PHPҳ��
 */
?>
  <div><? echo '<a target="_blank" href="'. $_MODULE['itemlist_title_link'] .'"><img  src="'. $_MODULE['itemlist_title_img'] .'"></a>'; ?></div>
  <div class="list-box">
    <ul>
      <?php
for ($i=1; $i<=9; $i++){
	
	 if ( $_MODULE['itemlist_link_'.$i] ){	echo '<li><div class="item"><a target="_blank" href="'. $_MODULE['itemlist_link_'.$i] .'"><img  src="'.$_MODULE['itemlist_img_'.$i] .'" ></a></div></li>';}
	


}
?>
    </ul>
  </div>
</div>

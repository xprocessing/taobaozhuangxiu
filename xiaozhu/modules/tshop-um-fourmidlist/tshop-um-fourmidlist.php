<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-fourmidlist"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-fourmidlist">

<ul class="itemlist">
    <li>
      <div class="itemimg"> <? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_1_id'])) .'"><img  src="'. $_MODULE['listitem_1_img'] .'"></a>'; ?></div>
      <div class="detail">
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_1_id']);echo $item->price;?></span></div>
        <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_1_id']);echo $item->title;?></span></div>
      </div>
     
    </li>
    <li>
      <div class="itemimg"><? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_2_id'])) .'"><img  src="'. $_MODULE['listitem_2_img'] .'"></a>'; ?></div>
      <div class="detail">
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_2_id']);echo $item->price;?></span></div>
        <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_2_id']);echo $item->title;?></span></div>
      </div>
      
    </li>
     <li>
      <div class="itemimg"><? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_3_id'])) .'"><img  src="'. $_MODULE['listitem_3_img'] .'"></a>'; ?></div>
      <div class="detail">
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_3_id']);echo $item->price;?></span></div>
        <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_3_id']);echo $item->title;?></span></div>
      </div>
      
    </li>
    <li class="last-item">
      <div class="itemimg"><? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_4_id'])) .'"><img  src="'. $_MODULE['listitem_4_img'] .'"></a>'; ?></div>
      <div class="detail">
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_4_id']);echo $item->price;?></span></div>
        <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_4_id']);echo $item->title;?></span></div>
      </div>
      
    </li>
  </ul>

<?php
/**
 * ��ʼ���PHPҳ��
 */
?>
</div>

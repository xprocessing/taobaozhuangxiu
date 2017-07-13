<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-biglistshareframe"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-biglistshareframe">
 <ul class="itemlist">
    <li>
      <div class="itemimg"> <? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_1_id'])) .'"><img  src="'. $_MODULE['listitem_1_img'] .'"></a>'; ?></div>
      <div class="detail">
        <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_1_id']);echo $item->title;?></span></div>
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_1_id']);echo $item->price;?></span></div>
      
      </div>
      <div class="share-it"><span>分享到</span><span class="sns-widget" data-sharebtn='{"type":"item","pic":"#","client_id":"68","isShowFriend":"","skinType":"1","key":"<? echo $_MODULE['listitem_1_id']?>"}'></span><span><? echo $_MODULE['askget']?></span></div>
    </li>
    <li>
      <div class="itemimg"><? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_2_id'])) .'"><img  src="'. $_MODULE['listitem_2_img'] .'"></a>'; ?></div>
      <div class="detail">
      <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_2_id']);echo $item->title;?></span></div>
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_2_id']);echo $item->price;?></span></div>
        
      </div>
      <div class="share-it"><span>分享到</span><span class="sns-widget" data-sharebtn='{"type":"item","pic":"#","client_id":"68","isShowFriend":"","skinType":"1","key":"<? echo $_MODULE['listitem_2_id']?>"}'></span><span><? echo $_MODULE['askget']?></span></div>
    </li>
    <li class="last-item">
      <div class="itemimg"><? echo '<a target="_blank" href="'. $uriManager->detailURI($itemManager->queryById($_MODULE['listitem_3_id'])) .'"><img  src="'. $_MODULE['listitem_3_img'] .'"></a>'; ?></div>
      <div class="detail">
      <div class="item-title"><span><? $item = $itemManager->queryById($_MODULE['listitem_3_id']);echo $item->title;?></span></div>
        <div class="item-price"><em>RMB</em><span><? $item = $itemManager->queryById($_MODULE['listitem_3_id']);echo $item->price;?></span></div>
        
      </div>
      <div class="share-it"><span>分享到</span><span class="sns-widget" data-sharebtn='{"type":"item","pic":"#","client_id":"68","isShowFriend":"","skinType":"1","key":"<? echo $_MODULE['listitem_3_id']?>"}'></span><span><? echo $_MODULE['askget']?></span></div>
    </li>
  </ul>
<?php
/**
 * 开始设计PHP页面
 */
?>
</div>

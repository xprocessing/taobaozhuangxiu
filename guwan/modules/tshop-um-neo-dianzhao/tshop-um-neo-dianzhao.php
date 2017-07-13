<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-dianzhao"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-dianzhao">
<?php
if($_MODULE['dianzhao-logo']){echo '<span class="dianzhao-logo"><img style="margin-top:'.$_MODULE['dianzhao-logo-margintop'].'" src="'.$_MODULE['dianzhao-logo'].'"/></span>';};
if($_MODULE['dianzhao-title']){echo '<span class="dianzhao-title" style="color:'.$_MODULE['dianzhao-title-color'].'">'.$_MODULE['dianzhao-title'].'</span>';};
if($_MODULE['dianzhao-desc']){echo '<span class="dianzhao-desc" style="color:'.$_MODULE['dianzhao-desc-color'].'">'.$_MODULE['dianzhao-desc'].'</span>';};

 echo '<span class="shopqrcode"><img height="90" width="90" src="http://gqrcode.alicdn.com/img?type=bs&shop_id='.$_shop->id.'" /><br>扫码逛本店手机店铺</span>';

?>
</div>

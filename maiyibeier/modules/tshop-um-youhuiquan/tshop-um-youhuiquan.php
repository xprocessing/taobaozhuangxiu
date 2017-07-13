<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-youhuiquan"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-youhuiquan">
<?php
/**
 * 开始设计PHP页面
 */
?>
<ul>
<li>
  <div class="quan" style="background-color:#ef2625;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-1']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-1']  ?>"><? echo $_MODULE['lingqu-1']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-1']  ?></div>
  </div>
</li>
<li>
  <div class="quan" style="background-color:#009900;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-2']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-2']  ?>"><? echo $_MODULE['lingqu-2']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-2']  ?></div>
  </div>
</li>
<li>
  <div class="quan" style="background-color:#8c39c5;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-3']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-3']  ?>"><? echo $_MODULE['lingqu-3']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-3']  ?></div>
  </div>
</li>
<li>
  <div class="quan" style="background-color:#2eb89c;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-4']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-4']  ?>"><? echo $_MODULE['lingqu-4']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-4']  ?></div>
  </div>
</li>
</ul>
</div>

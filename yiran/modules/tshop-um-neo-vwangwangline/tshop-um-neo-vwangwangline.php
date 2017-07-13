

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-vwangwangline"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-vwangwangline">
<table width="190" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="wangwang"><? echo $_MODULE['wangwang'] ;  ?></td>

  </tr>
  <tr>
   
    <td colspan="2" class="wangwang-time"><? echo $_MODULE['wangwang_time'] ;  ?></td>
  </tr>
  <tr>
    <td colspan="2" class="wangwang-title"><? echo $_MODULE['wangwang_title_01'] ;  ?></td>

  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_01'].$uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_02'].$uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_03'].$uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_04'].$uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td colspan="2" class="wangwang-title"><? echo $_MODULE['wangwang_title_02'] ;  ?></td>
    
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_05'].$uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_06'].$uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_07'].$uriManager->supportTag($_MODULE['wangwangid_07'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_08'].$uriManager->supportTag($_MODULE['wangwangid_08'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td colspan="2" class="wangwang-title"><? echo $_MODULE['wangwang_title_03'] ;  ?></td>
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_09'].$uriManager->supportTag($_MODULE['wangwangid_09'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_10'].$uriManager->supportTag($_MODULE['wangwangid_10'],"有问题旺我哦",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
</table>

</div>

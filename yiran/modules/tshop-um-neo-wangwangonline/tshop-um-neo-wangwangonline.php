

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-wangwangonline"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-wangwangonline">
<div style="width:950px; height:122px; background-image:url(<? echo $_MODULE['wangwang_bg'] ?>); background-repeat:no-repeat;">
<table width="714" height="110" border="0" cellspacing="0" cellpadding="0" style="font-family:微软雅黑; font-size:14px; color:#000;">
  <tr>
    <td width="28">&nbsp;</td>
    <td width="271">&nbsp;</td>
    <td width="94" ><? echo $_MODULE['wangwang_title_01'] ;  ?></td>
    <td width="114"><?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",1);	 ?></td>
    <td width="102"><?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",1);	 ?></td>
    <td width="105"><?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",1);	 ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['wangwang_title_02'] ;  ?></td>
    <td><?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",1);	 ?></td>
    <td><?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",1);	 ?></td>
    <td><?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",1);	 ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="color:#fff;"><? echo $_MODULE['wangwang_time'] ;  ?></td>
    <td><? echo $_MODULE['wangwang_title_03'] ;  ?></td>
    <td><?  echo $uriManager->supportTag($_MODULE['wangwangid_07'],"有问题旺我哦",1);	 ?></td>
    <td><?  echo $uriManager->supportTag($_MODULE['wangwangid_08'],"有问题旺我哦",1);	 ?></td>
    <td><?  echo $uriManager->supportTag($_MODULE['wangwangid_09'],"有问题旺我哦",1);	 ?></td>
  </tr>
</table>

</div>
</div>

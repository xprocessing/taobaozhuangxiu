<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-foot"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-neo-foot">
  <table  width="950" height="236" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><table  width="950" height="157" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td background="assets/images/foot_01_01.png" width="673" height="157" valign="top" style="overflow:hidden;"><table width="673" height="157" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="42" height="84">&nbsp;</td>
                  <td width="194">&nbsp;</td>
                  <td width="50">&nbsp;</td>
                  <td width="160">&nbsp;</td>
                  <td width="42">&nbsp;</td>
                  <td width="171">&nbsp;</td>
                  <td width="14">&nbsp;</td>
                  
                </tr>
                <tr>
                <td>&nbsp;</td>
                  <td valign="top" align="center" style="color:#ffffff; font-size:12px; 	font-family:microsoft yahei;"><? if ( $_MODULE['info_detail_01'] ){	echo $_MODULE['info_detail_01'] ;} ?></td>
                  <td>&nbsp;</td>
                  <td valign="top" align="center" style="color:#ffffff; font-size:12px; 	font-family:microsoft yahei;"><? if ( $_MODULE['info_detail_02'] ){	echo $_MODULE['info_detail_02'] ;} ?></td>
                  <td>&nbsp;</td>
                  <td valign="top" align="center" style="color:#ffffff; font-size:12px; 	font-family:microsoft yahei;"><? if ( $_MODULE['info_detail_03'] ){	echo $_MODULE['info_detail_03'] ;} ?></td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            <td><a <?php 'href="'.$uriManager-> favoriteLink().'"'; ?> target="_blank"><img src="assets/images/foot_01_02.png" width="277" height="157" alt="" style="display:block;"></a></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="950" height="79" background="assets/images/foot_02.png" valign="top"><div style="width:950px; text-align:center; padding-top:16px; color:#d0d0d0; font-size:14px; 	font-family:microsoft yahei; line-height:47px;">
     <? echo $_MODULE['wangwang_nickname_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
     <? echo $_MODULE['wangwang_nickname_02'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_03'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_04'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_05'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_06'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      
      
      </div></td>
    </tr>
  </table>
</div>

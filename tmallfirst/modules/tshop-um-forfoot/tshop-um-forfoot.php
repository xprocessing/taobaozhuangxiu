<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-forfoot"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-forfoot">
<table  width="990" height="340" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<table  width="990" height="173" border="0" cellpadding="0" cellspacing="0">
	<tr bgcolor="#f4f4f4">
		<td width="198"><a href="#"><img src="assets/images/neofoot_01_01.png" alt="" width="174" height="173" border="0"></a></td>
		<td width="792" height="173" background="assets/images/neofoot_01_02.png" valign="top">
        <table width="770" height="173" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="166" height="54"></td>
    <td width="32"></td>
    <td width="167"></td>
    <td width="27"></td>
    <td width="171"></td>
    <td width="24"></td>
    <td width="183"></td>
  </tr>
  <tr class="neo-title">
    <td height="25"><? echo $_MODULE['foot_title_1'] ;  ?></td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['foot_title_2'] ;  ?></td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['foot_title_3'] ;  ?></td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['foot_title_4'] ;  ?></td>
  </tr>
  <tr valign="top" class="neo-detail" height="94">
    <td ><? echo $_MODULE['foot_detail_1'] ;  ?></td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['foot_detail_2'] ;  ?></td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['foot_detail_3'] ;  ?></td>
    <td>&nbsp;</td>
    <td><? echo $_MODULE['foot_detail_4'] ;  ?></td>
  </tr>
</table>

        
			
            
          </td>
	</tr>
</table></td>
	</tr>
	<tr>
		<td width="950" height="55" background="assets/images/neofoot_02.png" style="text-align:center;" class="foot-links">
        <?
							for ( $i = 0; $i < 9; $i++ ) {
								if ( $_MODULE['foot_text_' . $i] ) {
									echo '<a target="_blank" href="'. $_MODULE['foot_link_' . $i] .'">'. $_MODULE['foot_text_' . $i] .'</a>';
								}
							}
						?>
        
			</td>
	</tr>
	<tr>
		<td>
			<img src="assets/images/neofoot_03.png" width="990" height="112" alt=""></td>
	</tr>
</table>


</div>

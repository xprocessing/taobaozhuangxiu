<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-foot"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-foot">
<table  width="990" height="319" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td><a href="#"><img style="display:block;" src="assets/images/qie_10_01.png" width="990" height="91" alt=""></a></td>
	</tr>
	<tr>
		<td height="182" width="990" background="assets/images/qie_10_02.png" style="background-repeat:no-repeat;"><table width="990" height="182" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="209" height="60">&nbsp;</td>
		    <td width="190">&nbsp;</td>
		    <td width="189">&nbsp;</td>
		    <td width="189">&nbsp;</td>
		    <td width="213">&nbsp;</td>
	      </tr>
		  <tr valign="top" class="footinfo">
		    <td height="87">&nbsp;</td>
		    <td><div><? if ( $_MODULE['info_detail_01'] ){	echo $_MODULE['info_detail_01'] ;} ?></div></td>
		    <td><div><? if ( $_MODULE['info_detail_02'] ){	echo $_MODULE['info_detail_02'] ;} ?></div></td>
		    <td><div><? if ( $_MODULE['info_detail_03'] ){	echo $_MODULE['info_detail_03'] ;} ?></div></td>
		    <td><div><? if ( $_MODULE['info_detail_04'] ){	echo $_MODULE['info_detail_04'] ;} ?></div></td>
	      </tr>
		  <tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
	      </tr>
		  </table>
			</td>
	</tr>
	<tr>
		<td height="46" bgcolor="#0b533b" class="footwangwang" >
         <? echo $_MODULE['wangwang_nickname_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
     <? echo $_MODULE['wangwang_nickname_02'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_03'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_04'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_05'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_06'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
	</tr>
</table>
</div>

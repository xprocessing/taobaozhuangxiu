<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-forfoot"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
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

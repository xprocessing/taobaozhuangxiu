<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-zhangguijiyu"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-zhangguijiyu">
<table  width="950" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="assets/images/zhangguijiyu.png" width="950" height="88" style="display:block;" alt=""></td>
	</tr>
	<tr>
		<td style=" background-image:url(assets/images/zhangguijiyu_02.png); background-repeat:repeat-y; min-height:99px;">
        
        <div  style="background-image:url(assets/images/ok.png); background-repeat: no-repeat; min-height:99px;color:#e9cba4; padding-left:35px; padding-right:35px; font-size:12px; line-height:20px;font-family:microsoft yahei;">
		<? if ( $_MODULE['zhangguijiyu'] ){	echo $_MODULE['zhangguijiyu'] ;} ?></div>
        
			</td>
	</tr>
	<tr>
		<td>
			<img src="assets/images/zhangguijiyu_03.png" width="950" height="45"  style="display:block;"  alt=""></td>
	</tr>
</table>

</div>


<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-shipin"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-shipin">

<table border="0" cellpadding="0" cellspacing="0" class="" height="600" width="950">
	<tbody>
		<tr>
			<td bgcolor="#fe3e3e" height="32" width="950">
				<div style="line-height:1;font-family:΢���ź�;font-size:18px;font-weight:bold;float:left;">
					<? if ( $_MODULE['video_title-new'] ){	echo $_MODULE['video_title-new'] ;} ?></div>				
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" class="" height="568" width="950" background="http://img02.taobaocdn.com/imgextra/i2/297619552/T2Rjf9XhhaXXXXXXXX-297619552.png" style="background-repeat:no-repeat;">
					<tbody>
						<tr>
							<td  height="568" width="735" valign="top">
								<div style="width:609px;height:501px;margin-left:93px; margin-top:41px;background-color:#CCC;">
									<? if ( $_MODULE['video_html'] ){	echo $_MODULE['video_html'] ;} ?></div>
							</td>
							<td  height="568" width="215" valign="top">
								<div style="width:auto;height:auto;color:#fff;padding-top:340px;padding-left:15px;font-family:΢���ź�;font-size:14px;font-weight:bold; line-height:30px;">
									<? if ( $_MODULE['video_other_title'] ){	echo $_MODULE['video_other_title'] ;} ?></div>
								<div style="width:auto;height:auto;color:#676767;padding-top:0px;padding-left:15px;font-family:΢���ź�;font-size:14px; line-height:1.5;">
									<? if ( $_MODULE['video_other_detail-new'] ){	echo $_MODULE['video_other_detail-new'] ;} ?></div>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<p>&nbsp;
	</p>
<?php
/**
 * ��ʼ���PHPҳ��
 */
?>
</div>

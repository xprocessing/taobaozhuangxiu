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
     <? echo $_MODULE['wangwang_nickname_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
     <? echo $_MODULE['wangwang_nickname_02'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_03'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_04'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_05'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      <? echo $_MODULE['wangwang_nickname_06'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"����������Ŷ",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;
      
      
      </div></td>
    </tr>
  </table>
</div>

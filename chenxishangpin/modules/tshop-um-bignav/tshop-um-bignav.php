<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-bignav"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>

<div class="tb-module tshop-um tshop-um-bignav">
  <div class="bignav-cont">
    <table width="950" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1"></td>
        <td><? echo '<a target="_blank" href="'. $_MODULE['nav_link_1'] .'"><img  src="'. $_MODULE['nav_img_1'] .'"></a>'; ?></td>
        <td width="14"></td>
        <td><? echo '<a target="_blank" href="'. $_MODULE['nav_link_2'] .'"><img  src="'. $_MODULE['nav_img_2'] .'"></a>'; ?></td>
        <td width="14"></td>
        <td><? echo '<a target="_blank" href="'. $_MODULE['nav_link_3'] .'"><img  src="'. $_MODULE['nav_img_3'] .'"></a>'; ?></td>
        <td width="1"></td>
      </tr>
    </table>
  </div>
</div>



<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-vwangwangline"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��"J_TWidget"��"tb-module"����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
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
    <td><?  echo $_MODULE['wangwangnick_01'].$uriManager->supportTag($_MODULE['wangwangid_01'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_02'].$uriManager->supportTag($_MODULE['wangwangid_02'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_03'].$uriManager->supportTag($_MODULE['wangwangid_03'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_04'].$uriManager->supportTag($_MODULE['wangwangid_04'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td colspan="2" class="wangwang-title"><? echo $_MODULE['wangwang_title_02'] ;  ?></td>
    
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_05'].$uriManager->supportTag($_MODULE['wangwangid_05'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_06'].$uriManager->supportTag($_MODULE['wangwangid_06'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_07'].$uriManager->supportTag($_MODULE['wangwangid_07'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_08'].$uriManager->supportTag($_MODULE['wangwangid_08'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
  <tr>
    <td colspan="2" class="wangwang-title"><? echo $_MODULE['wangwang_title_03'] ;  ?></td>
  </tr>
  <tr>
    <td><?  echo $_MODULE['wangwangnick_09'].$uriManager->supportTag($_MODULE['wangwangid_09'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
    <td><?  echo $_MODULE['wangwangnick_10'].$uriManager->supportTag($_MODULE['wangwangid_10'],"����������Ŷ",$_MODULE['wangwang-mode']);	 ?></td>
  </tr>
</table>

</div>

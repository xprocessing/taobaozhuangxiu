<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-youhuiquan"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>

<div class="tb-module tshop-um tshop-um-youhuiquan">
<?php
/**
 * ��ʼ���PHPҳ��
 */
?>
<ul>
<li>
  <div class="quan" style="background-color:#ef2625;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-1']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-1']  ?>"><? echo $_MODULE['lingqu-1']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-1']  ?></div>
  </div>
</li>
<li>
  <div class="quan" style="background-color:#009900;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-2']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-2']  ?>"><? echo $_MODULE['lingqu-2']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-2']  ?></div>
  </div>
</li>
<li>
  <div class="quan" style="background-color:#8c39c5;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-3']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-3']  ?>"><? echo $_MODULE['lingqu-3']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-3']  ?></div>
  </div>
</li>
<li>
  <div class="quan" style="background-color:#2eb89c;">
    <div class="mianzhi"><? echo $_MODULE['mianzhi-4']  ?></div>
    <div class="lingqu"><a href="<? echo $_MODULE['lingqu-link-4']  ?>"><? echo $_MODULE['lingqu-4']  ?></a></div>
    <div class="shuoming"><? echo $_MODULE['shuoming-4']  ?></div>
  </div>
</li>
</ul>
</div>

<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-neo-dianzhao"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-neo-dianzhao">
<?php
if($_MODULE['dianzhao-logo']){echo '<span class="dianzhao-logo"><img style="margin-top:'.$_MODULE['dianzhao-logo-margintop'].'" src="'.$_MODULE['dianzhao-logo'].'"/></span>';};
if($_MODULE['dianzhao-title']){echo '<span class="dianzhao-title" style="color:'.$_MODULE['dianzhao-title-color'].'">'.$_MODULE['dianzhao-title'].'</span>';};
if($_MODULE['dianzhao-desc']){echo '<span class="dianzhao-desc" style="color:'.$_MODULE['dianzhao-desc-color'].'">'.$_MODULE['dianzhao-desc'].'</span>';};

 echo '<span class="shopqrcode"><img height="90" width="90" src="http://gqrcode.alicdn.com/img?type=bs&shop_id='.$_shop->id.'" /><br>ɨ��䱾���ֻ�����</span>';

?>
</div>

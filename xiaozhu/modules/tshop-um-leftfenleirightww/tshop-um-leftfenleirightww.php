<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-leftfenleirightww"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-leftfenleirightww">
<table  width="950" border="0" cellpadding="0" cellspacing="0" style="background-color:#a67e4a;">
	<tr height="74">
		<td>
			<img src="assets/images/fenleicats_01.png" width="693" height="74" alt="" style="display:block;"></td>
		<td>
			<img src="assets/images/fenleicats_02.png" width="257" height="74" alt=""  style="display:block;"></td>
	</tr>
	<tr>
		<td valign="top">
        <div class="neo-leftcats">
         <?
$json = $_MODULE['neo-category'];
/*ͨ��PHP��������json��������JSON����*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* ����json�����ȡrid���Ե�����ֵ���õ�һ����Ŀ */
/*echo '��id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "��������Ŀ������: ".$shopCategory->name."<br>";*/
echo '<div class="catlv1lv2">';
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" class="catlv1" >'.$shopCategory->name.'</a>';

/*������Ŀ��ͨ��','�ָ����ַ�����һ��ע���ǰ�Ƕ����ַ���*/
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "�ӵ�����Ŀ������: ".$subShopCategory->name."<br>";*/
echo '<a href="'.$uriManager->shopCategoryURI ($subShopCategory).'" target="_blank" >'.$subShopCategory->name.'</a>';
}
echo '</div>';
}
?>
</div></td>
		<td valign="top">
        <div style="padding-left:20px; padding-right:35px; padding-top:5px;">
        <table width="200" height="75" border="0" cellspacing="0" cellpadding="0" style="color:#f5e3c6;">
  <tr>
    <td><? echo $_MODULE['wangwang_nickname_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"����������Ŷ",2);	 ?></td>
    <td> <? echo $_MODULE['wangwang_nickname_02'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"����������Ŷ",2);	 ?></td>
  </tr>
  <tr>
    <td> <? echo $_MODULE['wangwang_nickname_03'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"����������Ŷ",2);	 ?></td>
    <td><? echo $_MODULE['wangwang_nickname_04'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"����������Ŷ",2);	 ?></td>
  </tr>
  <tr>
    <td><? echo $_MODULE['wangwang_nickname_05'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"����������Ŷ",2);	 ?></td>
    <td> <? echo $_MODULE['wangwang_nickname_06'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"����������Ŷ",2);	 ?></td>
  </tr>
</table>
<div style="padding-top:10px; color:#0d0d0d;"><? echo $_MODULE['open-time'] ;  ?></div>

</div>

</td>
	</tr>
</table>
</div>

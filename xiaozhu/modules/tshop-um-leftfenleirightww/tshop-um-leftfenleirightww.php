<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-leftfenleirightww"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
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
/*通过PHP函数解析json数据生成JSON数组*/
$jsonArray = json_decode($json);
foreach($jsonArray as $jsonObject){
/* 根据json对象获取rid属性的属性值即得到一级类目 */
/*echo '父id:'.$jsonObject->{rid}.'<br>';*/
$shopCategory =  $shopCategoryManager->queryById($jsonObject->{rid});
/* echo "父店铺类目名称是: ".$shopCategory->name."<br>";*/
echo '<div class="catlv1lv2">';
echo '<a href="'.$uriManager->shopCategoryURI ($shopCategory).'" target="_blank" class="catlv1" >'.$shopCategory->name.'</a>';

/*二级类目是通过','分隔的字符串（一定注意是半角逗号字符）*/
$array = explode(",",$jsonObject->{childIds});
foreach($array as $id){
$subShopCategory =  $shopCategoryManager->queryById($id);
/*echo "子店铺类目名称是: ".$subShopCategory->name."<br>";*/
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
    <td><? echo $_MODULE['wangwang_nickname_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",2);	 ?></td>
    <td> <? echo $_MODULE['wangwang_nickname_02'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",2);	 ?></td>
  </tr>
  <tr>
    <td> <? echo $_MODULE['wangwang_nickname_03'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",2);	 ?></td>
    <td><? echo $_MODULE['wangwang_nickname_04'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",2);	 ?></td>
  </tr>
  <tr>
    <td><? echo $_MODULE['wangwang_nickname_05'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",2);	 ?></td>
    <td> <? echo $_MODULE['wangwang_nickname_06'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",2);	 ?></td>
  </tr>
</table>
<div style="padding-top:10px; color:#0d0d0d;"><? echo $_MODULE['open-time'] ;  ?></div>

</div>

</td>
	</tr>
</table>
</div>

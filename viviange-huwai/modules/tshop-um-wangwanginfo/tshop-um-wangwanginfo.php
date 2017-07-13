
<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-wangwanginfo"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-wangwanginfo">
<table border="0" cellpadding="0" cellspacing="0" class="" width="950">
	<tbody>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" class="" height="123" width="950">
					<tbody>
						<tr>
							<td background="http://img03.taobaocdn.com/imgextra/i3/876980064/T2UFT_XX4aXXXXXXXX-876980064.png" height="123" valign="top" width="475">
								<div style="color:#9b9b9b;padding-top:35px;padding-left:180px;font-family:微软雅黑;font-size:14px;">
									<? echo $_MODULE['wangwang_title_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",2);	 ?></div>
								<div style="color:#9b9b9b;padding-top:10px;padding-left:180px;font-family:微软雅黑;font-size:14px;">
									<? echo $_MODULE['wangwang_title_02'] ;  ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_07'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_08'],"有问题旺我哦",2);	 ?>&nbsp; &nbsp;<? echo $_MODULE['wangwang_title_03'] ;  ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_09'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_09'],"有问题旺我哦",2);	 ?></div>
							</td>
							<td background="http://img04.taobaocdn.com/imgextra/i4/876980064/T2mPvTXidXXXXXXXXX_!!876980064.jpg" height="123" width="475">
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" class="" height="105" width="950" style="text-align:left;">
					<tbody>
						<tr>
							<td background="http://img03.taobaocdn.com/imgextra/i3/876980064/T2W34GXoFNXXXXXXXX_!!876980064.jpg" height="105" valign="top" width="242">
								<div style="color:#9b9b9b;padding-top:10px;padding-left:30px;font-family:微软雅黑;font-size:14px;">
									<? if ( $_MODULE['info_title_01'] ){	echo $_MODULE['info_title_01'] ;} ?></div>
								<div style="color:#9b9b9b;padding-top:0px;padding-left:30px;font-family:微软雅黑;font-size:12px; width:175px;">
									<? if ( $_MODULE['info_detail_01'] ){	echo $_MODULE['info_detail_01'] ;} ?></div>
							</td>
							<td background="http://img04.taobaocdn.com/imgextra/i4/876980064/T2hDDTXchXXXXXXXXX_!!876980064.jpg" height="105" valign="top" width="231">
								<div style="color:#9b9b9b;padding-top:10px;padding-left:18px;font-family:微软雅黑;font-size:14px;">
									<? if ( $_MODULE['info_title_02'] ){	echo $_MODULE['info_title_02'] ;} ?></div>
								<div style="color:#9b9b9b;padding-top:0px;padding-left:18px;font-family:微软雅黑;font-size:12px;width:175px;">
									<? if ( $_MODULE['info_detail_02'] ){	echo $_MODULE['info_detail_02'] ;} ?></div>
							</td>
							<td background="http://img03.taobaocdn.com/imgextra/i3/876980064/T2YSDSXc4aXXXXXXXX_!!876980064.jpg" height="105" valign="top" width="231">
								<div style="color:#9b9b9b;padding-top:10px;padding-left:18px;font-family:微软雅黑;font-size:14px;">
									<? if ( $_MODULE['info_title_03'] ){	echo $_MODULE['info_title_03'] ;} ?></div>
								<div style="color:#9b9b9b;padding-top:0px;padding-left:18px;font-family:微软雅黑;font-size:12px;width:175px;">
									<? if ( $_MODULE['info_detail_03'] ){	echo $_MODULE['info_detail_03'] ;} ?></div>
							</td>
							<td background="http://img04.taobaocdn.com/imgextra/i4/876980064/T2fwzSXlJaXXXXXXXX_!!876980064.jpg" height="105" valign="top" width="246">
								<div style="color:#9b9b9b;padding-top:10px;padding-left:18px;font-family:微软雅黑;font-size:14px;">
									<? if ( $_MODULE['info_title_04'] ){	echo $_MODULE['info_title_04'] ;} ?></div>
								<div style="color:#9b9b9b;padding-top:0px;padding-left:18px;font-family:微软雅黑;font-size:12px;width:175px;">
									<? if ( $_MODULE['info_detail_04'] ){	echo $_MODULE['info_detail_04'] ;} ?></div>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
	</tbody>
</table>


<?php
/**
 * 开始设计PHP页面
 */
?>
</div>

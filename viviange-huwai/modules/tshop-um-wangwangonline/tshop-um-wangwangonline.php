
<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-wangwangonline"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-wangwangonline">


				<table border="0" cellpadding="0" cellspacing="0" class="" height="67" width="950">
					<tbody>
						<tr>
							<td background="http://img03.taobaocdn.com/imgextra/i3/876980064/T2K7DHXk4aXXXXXXXX_!!876980064.jpg" height="67" width="398" valign="top">
								<div style="font-family:微软雅黑; color:#fe3e3e;font-weight:bold;padding-top:10px; line-height:1;padding-left:25px;width:250px;height:auto;">
									<span style="font-family:arial; font-size:27px;vertical-align:top;">SERVICE/</span><span style=" font-size:22.5px;vertical-align:top;">客服中心</span></div>
								<div style="height:auto;width:auto;font-family:微软雅黑;font-size:12px;display:block;float:left;color:#FFF;padding-left:25px;">
									<? echo $_MODULE['wangwang_time'] ;  ?></div>
							</td>
							<td background="http://img04.taobaocdn.com/imgextra/i4/876980064/T2Jg6SXn0XXXXXXXXX_!!876980064.jpg" height="67" width="552">
								<div style="font-family:微软雅黑;color:#B3B3B3;font-size:14px;">
									&nbsp;&nbsp;<? echo $_MODULE['wangwang_title_01'] ;  ?>&nbsp;&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_01'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_02'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_03'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_04'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_05'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo $_MODULE['wangwang_title_02'] ;  ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_06'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_07'],"有问题旺我哦",2);	 ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_08'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo $_MODULE['wangwang_title_03'] ;  ?>&nbsp;<?  echo $uriManager->supportTag($_MODULE['wangwangid_09'],"有问题旺我哦",2);	 ?>&nbsp;&nbsp;</div>
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

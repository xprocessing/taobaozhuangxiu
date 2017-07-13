

<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-neo-bannerwithpoints"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除"J_TWidget"和"tb-module"以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-neo-bannerwithpoints">
<?php
/**
 * 开始设计PHP页面
 */
?>
<div class="banner"><? 
if($_MODULE['banner-height']){$bannerheight=$_MODULE['banner-height']."px";	}else{$bannerheight="auto" ;}
echo '<img src="'.$_MODULE['banner'].'" height="'.$bannerheight.'" />' ;

?>
</div>

<? echo '<div class="points point01" style="top:'.$_MODULE['point01-y'].'px;left:'.$_MODULE['point01-x'].'px; '.$_MODULE['point01-show'].'"></div>'  ?>
<? echo '<div class="points point02" style="top:'.$_MODULE['point02-y'].'px;left:'.$_MODULE['point02-x'].'px; '.$_MODULE['point02-show'].'"></div>'  ?>
<? echo '<div class="points point03" style="top:'.$_MODULE['point03-y'].'px;left:'.$_MODULE['point03-x'].'px; '.$_MODULE['point03-show'].'"></div>'  ?>
<? echo '<div class="points point04" style="top:'.$_MODULE['point04-y'].'px;left:'.$_MODULE['point04-x'].'px; '.$_MODULE['point04-show'].'"></div>'  ?>
<? echo '<div class="points point05" style="top:'.$_MODULE['point05-y'].'px;left:'.$_MODULE['point05-x'].'px; '.$_MODULE['point05-show'].'"></div>'  ?>
<? echo '<div class="points point06" style="top:'.$_MODULE['point06-y'].'px;left:'.$_MODULE['point06-x'].'px; '.$_MODULE['point06-show'].'"></div>'  ?>
<? echo '<div class="points point07" style="top:'.$_MODULE['point07-y'].'px;left:'.$_MODULE['point07-x'].'px; '.$_MODULE['point07-show'].'"></div>'  ?>



<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point01',
          'align':{
                  'node':'.point01',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point01-item'])
{
$ids=explode(',',$_MODULE['point01-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }

}

?>

</div>

<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point02',
          'align':{
                  'node':'.point02',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point02-item'])
{
$ids=explode(',',$_MODULE['point02-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }


}

?>

</div>

<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point03',
          'align':{
                  'node':'.point03',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point03-item'])
{
$ids=explode(',',$_MODULE['point03-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }
}

?>

</div>


<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point04',
          'align':{
                  'node':'.point04',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point04-item'])
{
$ids=explode(',',$_MODULE['point04-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }
}

?>

</div>

<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point05',
          'align':{
                  'node':'.point05',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point05-item'])
{
$ids=explode(',',$_MODULE['point05-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }
}

?>

</div>


<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point06',
          'align':{
                  'node':'.point06',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point06-item'])
{
$ids=explode(',',$_MODULE['point06-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }
}

?>

</div>


<div class="J_TWidget hidden points-popup" data-widget-type="Popup" data-widget-config="{
          'trigger':'.point07',
          'align':{
                  'node':'.point07',
                  'offset':[0,0],
                  'points':['cc','cc']
                  }
            }">
<?
if($_MODULE['point07-item'])
{
$ids=explode(',',$_MODULE['point07-item']);
$item= $itemManager->queryById($ids[0]);
echo '<div class="neo-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
echo  '<div class="neo-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
if($item->discountPrice) {
			echo "<div class='cuxiaojia'>促销价：".number_format($item->discountPrice,2)."</div>";
		  }
}

?>

</div>






</div>

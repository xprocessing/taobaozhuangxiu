


<?php
$height0 =  $_MODULE['height0']?$_MODULE['height0']:"40";
$pic0 =  $_MODULE['pic0']?$_MODULE['pic0']:"assets/images/1.jpg";

$height1 =  $_MODULE['height1']?$_MODULE['height1']:"92";
$pic1 =  $_MODULE['pic1']?$_MODULE['pic1']:"assets/images/2.jpg";
?>
<div class="tb-module tshop-um tshop-um-ms12">
	<div class="nav">
    	<div class="one" style=" height:<?php echo $height0; ?>px;">
        	<img src="<?php echo $pic0; ?>" width="990" height="<?php echo $height0; ?>" />
        </div>
        <div class="two" style=" background:url(assets/images/3.jpg) no-repeat center center;">
        	<a href="http://shop<?php echo $_shop->id;?>.taobao.com"  target="_blank" title="回到首页"></a>
        	<a href="<?php echo $uriManager->favoriteLink();?>"  target="_blank" title="收藏本店"></a>
        	<a href="#" title="回到顶部"></a>            
        </div>
    	<div class="one" style=" height:<?php echo $height1; ?>px;">
        	<img src="<?php echo $pic1; ?>" width="990" height="<?php echo $height1; ?>" />
        </div>
    </div>
</div>

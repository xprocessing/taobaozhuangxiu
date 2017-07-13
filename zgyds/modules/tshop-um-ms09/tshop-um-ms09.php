





<?php
$gg0 =  $_MODULE['gg0']?$_MODULE['gg0']:"assets/images/hd.jpg";
$gg1 =  $_MODULE['gg1']?$_MODULE['gg1']:NULL;
$gg2=$_MODULE['gg2']?$_MODULE['gg2']:"#";

$height =  $_MODULE['height']?$_MODULE['height']:"142";
$pic =  $_MODULE['pic']?explode("#",$_MODULE['pic']):array("assets/images/1.jpg","assets/images/2.jpg","assets/images/3.jpg","assets/images/4.jpg","assets/images/5.jpg","assets/images/6.jpg");
$link =  $_MODULE['link']?explode("#",$_MODULE['link']):array("#","#","#","#","#","#");
?>
<div class="tb-module tshop-um tshop-um-ms09">
	<a href="<?php echo $gg2; ?>" target="_blank" class="hd" style=" background:url(<?php echo $gg0; ?>) no-repeat center center;">
    	<span><?php echo $gg1; ?></span>
    </a>
    <div class="bd"  style=" height:<?php echo $height; ?>px;">
    	<?php
		foreach($pic as $k=>$v){
			if($k ==6) break;
		?>
        	<a href="<?php echo $link[$k]; ?>"  target="_blank" style=" <?php if($k ==5) echo "margin-right:0;"; ?> height:<?php echo $height; ?>px;">
            	<img src="<?php echo $v; ?>" width="160" height="<?php echo $height; ?>" />
            </a>
        <?php
		}
		?>
    </div>
</div>

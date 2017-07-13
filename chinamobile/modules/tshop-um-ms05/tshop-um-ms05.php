





<?
$number = $_MODULE['number'];
for($i=0;$i<$number;$i++){
	$color[$i] =  $_MODULE['color'.$i]?explode("#",$_MODULE['color'.$i]):array(
																		"assets/images/".($i%4+1).".jpg",
																		"assets/images/".($i%4+1).".jpg",
																		"assets/images/".($i%4+1).".jpg",
																		"assets/images/".($i%4+1).".jpg",
																		"assets/images/".($i%4+1).".jpg"
																		);
	$pic[$i] =  $_MODULE['pic'.$i]?$_MODULE['pic'.$i]:"#";

}

$gg0 =  $_MODULE['gg0']?$_MODULE['gg0']:"assets/images/hd.jpg";
$gg1 =  $_MODULE['gg1']?$_MODULE['gg1']:NULL;
$gg2=$_MODULE['gg2']?$_MODULE['gg2']:"#";
?>
<div class="tb-module tshop-um tshop-um-ms05">
	<div class="hd" style=" background:url(<?php echo $gg0; ?>) no-repeat center center;">
    	<a href="<?php echo  $gg2; ?>" target="_blank"><?php echo $gg1; ?></a>
    </div>
	<div class="color950" style="height:auto;">
        <div class="bd">
        	<div style="width:995px;">
			<?php	
			for($i=0;$i<$number;$i++){
            ?>
            <div class="wai" style=" <?php if($i%4 <4) echo " margin-top:0;" ?>  <?php if($i%4 ==3) echo " margin-right:0;" ?>">
            	
                <div class="J_TWidget eve" 
    data-widget-type="Carousel" 
 data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': '<?Php echo $_MODULE['effect']; ?>','duration': '<?Php echo $_MODULE['duration'];?>','interval':'<?Php echo $_MODULE['interval']; ?>',
    'easing': '<?Php echo $_MODULE['easing']; ?>', 'steps':1, 'viewSize': [236], 'circular': true, 'autoplay':true,
    'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }"  >

                    <div class="ks-switchable-content">
                            <?	
							foreach($color[$i] as $k=>$evecolor){
							?>
							<div class="pi" style="height:445px;">
								<a target="_blank" href="<?php echo $pic[$i]; ?>" style="background:url(<?php echo $color[$i][$k];?>) no-repeat center;height:445px;" ></a>		
							</div>
							<?php
							}
							?>
                    </div>
                </div>
            </div>
			<?
            }
            ?>
            </div>
        </div>
	</div>
</div>




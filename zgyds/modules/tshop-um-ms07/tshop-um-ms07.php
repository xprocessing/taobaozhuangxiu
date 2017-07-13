





<?php
$gg0=$_MODULE['gg0']?$_MODULE['gg0']:"assets/images/hd.jpg";
$gg1=$_MODULE['gg1']?$_MODULE['gg1']:NULL;
$gg2=$_MODULE['gg2']?$_MODULE['gg2']:"#";

$hpic=$_MODULE['hpic']?$_MODULE['hpic']:"assets/images/s.jpg";
$hlink=$_MODULE['hlink']?$_MODULE['hlink']:"#";

$cpic=$_MODULE['cpic']?explode("#",$_MODULE['cpic']):array(
													"assets/images/1.jpg",
													"assets/images/2.jpg",
													"assets/images/3.jpg",
													"assets/images/4.jpg",
													"assets/images/5.jpg",
													"assets/images/6.jpg",
													"assets/images/7.jpg",
													"assets/images/8.jpg",
													"assets/images/1.jpg",
													"assets/images/2.jpg",
													"assets/images/3.jpg",
													"assets/images/4.jpg",
													"assets/images/5.jpg",
													"assets/images/6.jpg",
													"assets/images/7.jpg",
													"assets/images/8.jpg",
													"assets/images/1.jpg",
													"assets/images/2.jpg",
													"assets/images/3.jpg",
													"assets/images/4.jpg",
													"assets/images/5.jpg",
													"assets/images/6.jpg",
													"assets/images/7.jpg",
													"assets/images/8.jpg"
													);
$clink=$_MODULE['clink']?explode("#",$_MODULE['clink']):array("#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#");
?>
<div class="tb-module tshop-um tshop-um-ms07">
	<a href="<?php echo $gg2; ?>" target="_blank" class="hd" style=" background:url(<?php echo $gg0; ?>) no-repeat center center;">
    	<span><?php echo $gg1; ?></span>
    </a>
    <div class="bd">
    	<div class="left">
        	<a href="<?php echo $hlink; ?>" target="_blank">
            	<img src="<?php echo $hpic; ?>" width="260" height="305" />
            </a>
        </div>
        <div class="right">
            <div class="J_TWidget eve" 
            data-widget-type="Carousel" 
            data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': '<?Php echo $_MODULE['effect']; ?>','duration': '<?Php echo $_MODULE['duration'];?>','interval':'<?Php echo $_MODULE['interval']; ?>',
            'easing': '<?Php echo $_MODULE['easing']; ?>', 'steps':1, 'viewSize': [705], 'circular': true, 'autoplay':true,
            'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }"  >
            	<div class="mall-content">
                    <div class="ks-switchable-content">
                        <?	
                        foreach($cpic as $k=>$v){
							if($k%8 ==0) echo "<div class='item'>";
                        ?>
                        <div class="pi" style=" <?php if($k%4 ==3 ) echo "margin-right:0;" ?>">
                            <a target="_blank" href="<?php echo $clink[$k]; ?>" style="background:url(<?php echo $v;?>) no-repeat center;" ></a>	
                        </div>
                        <?php
							if($k%8 ==7 || $k ==count($cpic) -1) echo "</div>";	
                        }
                        ?>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

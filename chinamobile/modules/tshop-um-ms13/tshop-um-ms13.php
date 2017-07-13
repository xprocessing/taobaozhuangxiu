


<?php
$gg0=$_MODULE['gg0']?$_MODULE['gg0']:"assets/images/hd.jpg";
$gg1=$_MODULE['gg1']?$_MODULE['gg1']:NULL;
$gg2=$_MODULE['gg2']?$_MODULE['gg2']:"#";

for($i=0;$i<5;$i++){
	$a[$i]=$_MODULE['a'.$i]?$_MODULE['a'.$i]:"assets/images/".($i+1).".gif";
	$b[$i]=$_MODULE['b'.$i]?$_MODULE['b'.$i]:"#";
	$c[$i]=$_MODULE['c'.$i]?explode("#",$_MODULE['c'.$i]):array("assets/images/1.jpg","assets/images/1.jpg","assets/images/1.jpg","assets/images/1.jpg");
	$d[$i]=$_MODULE['d'.$i]?explode("#",$_MODULE['d'.$i]):array("#","#","#","#");	
}
?>
<div class="tb-module tshop-um tshop-um-ms13">
	<div class="hd" style=" background:url(<?php echo $gg0; ?>) no-repeat center center;">
    	<a href="<?php echo $gg2; ?>" target="_blank"><?php echo $gg1; ?></a>
    </div>
    <div class="J_TWidget dds" 
        data-widget-type="Carousel" 
     data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': '<?Php echo $_MODULE['effect']; ?>','duration': '<?Php echo $_MODULE['duration'];?>','interval':'<?Php echo $_MODULE['interval']; ?>',
        'easing': '<?Php echo $_MODULE['easing']; ?>', 'steps':1, 'viewSize': [618], 'circular': true, 'autoplay':false,
        'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
			<ul class="ks-switchable-nav">
                <?php
                foreach($a as $k=>$v){
                ?>
                <li class="pic<?php echo $k; ?>">
                    <a href="<?php echo $b[$k]; ?>" target="_blank" style=" background:url(<?php echo $v ?>) no-repeat center center;" ></a>
                    <span></span>
                </li>
                <?Php
                }
                ?>
            </ul>        
            <div class="mall-content ">
                <ul class="ks-switchable-content">
					<?php
                    foreach($a as $k=>$v){
                    ?>
                    <li>
						<?php
						foreach($c[$k] as $k1=>$v1){
							if($k1 == 4) break;
						?>
                        <a href="<?php echo $d[$k][$k1]; ?>" target="_blank">
                        	<img src="<?php echo $v1; ?>" width="309" height="314" />
                        </a>
                        <?php
						}
						?>
                 	</li>
                    <?php
                    }
                    ?> 
                </ul>
            </div>   
        </div>    
</div>

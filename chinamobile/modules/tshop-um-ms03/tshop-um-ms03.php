







<?php



$qg=$_MODULE['qg']?$_MODULE['qg']:'520'; 
$height = $qg;
for($i=0;$i<4;$i++){
	$hb[$i]=$_MODULE['hb'.$i]?$_MODULE['hb'.$i]:"assets/images/1.jpg"; 
	$hs[$i]=$_MODULE['hs'.$i]?$_MODULE['hs'.$i]:"assets/images/".($i+1).".gif"; 
	$hl[$i]=$_MODULE['hl'.$i]?$_MODULE['hl'.$i]:"#"; 
	$gds[$i]=$_MODULE['gds'.$i]?$_MODULE['gds'.$i]:"assets/images/gd.gif"; 
	$gd[$i]=$_MODULE['gd'.$i]?$_MODULE['gd'.$i]:"#"; 	
}
?>
<div class="tb-module tshop-um tshop-um-ms03">
    <div class="J_TWidget dds" 
    data-widget-type="Carousel" 
 data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': '<?Php echo $_MODULE['effect']; ?>','duration': '<?Php echo $_MODULE['duration'];?>','interval':'<?Php echo $_MODULE['interval']; ?>',
    'easing': '<?Php echo $_MODULE['easing']; ?>', 'steps':1, 'viewSize': [990], 'circular': true, 'autoplay':true,
    'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }" style=" height:<?php echo $height+150; ?>px;">
        <div class="mall-content " style=" height:<?php echo $qg; ?>px;" >
            <ul class="ks-switchable-content">
                <?php
                foreach($hb as $k=>$v){
                ?>
                <li style=" height:<?php echo $qg; ?>px;">
                	<a class="pic" href="<?php echo $hl[$k] ;?>" target="_blank" style=" height:<?php echo $qg; ?>px; <?php if($v !=1){ ?> background:url(<?php echo $v; ?>) no-repeat center center; <?Php } ?>"></a>
                 	<a  style=" background:url(<?php echo $gds[$k]; ?>) no-repeat center center;" title="¸ü¶à" class="gd" href="<?php echo $gd[$k]; ?>" target="_blank"></a>   
             </li>
                <?php
                }
                ?> 
            </ul>
        </div>
		<ul class="ks-switchable-nav">
        	<?php
           	foreach($hb as $k=>$v){
			?>
            <li class="pic<?php echo $k; ?> <?php if($k ==0) echo 'ks-active'; ?>" style=" <?php if($k ==3) echo ' margin-right:0;'; ?>">
            	<a href="<?php echo $hl[$k]; ?>" target="_blank" style=" background:url(<?php echo $hs[$k] ?>) no-repeat center center;" ></a>
            </li>
            <?Php
			}
			?>
        </ul>   
    </div>
</div>





<?php
$qg=$_MODULE['qg']?$_MODULE['qg']:'489'; 
$qh=$_MODULE['qh']?explode("#",$_MODULE['qh']):array("assets/images/1.jpg","assets/images/1.jpg","assets/images/1.jpg"); 


$ql=$_MODULE['ql']?explode("#",$_MODULE['ql']):array("#","#","#"); 
?>
<div class="tb-module tshop-um tshop-um-ms11">
<div class="J_TWidget dds" 
    data-widget-type="Carousel" 
 data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': '<?Php echo $_MODULE['effect']; ?>','duration': '<?Php echo $_MODULE['duration'];?>','interval':'<?Php echo $_MODULE['interval']; ?>',
    'easing': '<?Php echo $_MODULE['easing']; ?>', 'steps':1, 'viewSize': [950], 'circular': true, 'autoplay':true,
    'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }" style="  height:<?php echo $qg; ?>px;  ">

        <div class="mall-content " style=" height:<?php echo $qg; ?>px;" >
        	<div style=" width:990px; height:<?php echo $qg; ?>px; overflow:hidden;" >
            <ul class="ks-switchable-content" >
                <?php
                foreach($qh as $k=>$v){
                ?>
                <li style=" height:<?php echo $qg; ?>px;"><a href="<?php echo $ql[$k] ;?>" target="_blank" style=" height:<?php echo $qg; ?>px; background:url(<?php echo $v; ?>) no-repeat center center;"></a></li>
                <?php
                }
                ?> 
            </ul>
            </div>
        </div>  
    </div>
</div>



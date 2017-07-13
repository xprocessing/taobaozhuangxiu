


<?php
$gg0=$_MODULE['gg0']?$_MODULE['gg0']:"assets/images/hd.jpg";
$gg1=$_MODULE['gg1']?$_MODULE['gg1']:NULL;
$gg2=$_MODULE['gg2']?$_MODULE['gg2']:"#";

 $pic =  $_MODULE['pic']?explode("#",$_MODULE['pic']):array( 
 														 'assets/images/1.jpg',
														 'assets/images/2.jpg',
														 'assets/images/3.jpg',
														 'assets/images/4.jpg',
														 'assets/images/5.jpg',
														 'assets/images/1.jpg',
														 'assets/images/2.jpg',
														 'assets/images/3.jpg',
														 'assets/images/4.jpg',
														 'assets/images/5.jpg',
														 'assets/images/1.jpg',
														 'assets/images/2.jpg',
														 'assets/images/3.jpg',
														 'assets/images/4.jpg',
														 'assets/images/5.jpg',
														 'assets/images/1.jpg',
														 'assets/images/2.jpg',
														 'assets/images/3.jpg',
														 'assets/images/4.jpg',
														 'assets/images/5.jpg');
														 
$url =  $_MODULE['url']?explode("#",$_MODULE['url']):array('#','#','#','#','#','#','#','#','#','#','#','#','#','#','#','#','#','#','#','#','#');
?>
<div class="tb-module tshop-um tshop-um-ms08">
	<div class="hd" style=" background:url(<?php echo $gg0; ?>) no-repeat center center;">
    	<a href="<?php echo $gg2 ?>" target="_blank"><?php echo $gg1; ?></a>
    </div>
    <div class="mall-slide J_TWidget dd" 
            data-widget-type="Carousel" 
            data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': '<?Php echo $_MODULE['effect']; ?>','duration': '<?Php echo $_MODULE['duration'];?>','interval':'<?Php echo $_MODULE['interval']; ?>',
            'easing': '<?Php echo $_MODULE['easing']; ?>', 'steps':1, 'viewSize': [925], 'circular': true, 'autoplay':true,
            'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }" >
        <span class="mall-prev" style=" <?php if(count($pic)<=5)  echo ' display:none;';?>" ></span>
        <span class="mall-next" style=" <?php if(count($pic)<=5)  echo ' display:none;';?>" ></span>
        <div class="mall-content " >
            <div class="ks-switchable-content">              
				<?php
                foreach($pic as $k=>$v){
					if($k%5 ==0) echo "<div class='items'>";
                ?>
                <div class="item" style=" <?php if($k%5 ==4){ echo " padding-right:0;";}elseif($k%5 ==3){ echo " padding-right:13px;";} ?>" >
                    <a href="<?php echo $url[$k] ?>" target="_blank">
                        <img src="<?php echo $v ?>" width="174" height="120" />
                    </a>
                </div>
                <?php
					if($k%5 ==4 || $k == count($pic) - 1) echo "</div>";
                }
                ?>                   
            </div>
        </div>             
    </div>    
</div>

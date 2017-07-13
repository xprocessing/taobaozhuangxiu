





<?php
$height =  $_MODULE['height']?$_MODULE['height']:"140";
$gg1 =  $_MODULE['gg1']?$_MODULE['gg1']:"assets/images/1.jpg";

for($i=0;$i<7;$i++){
	$xs[$i] =$_MODULE['xs'.$i];
	$fw[$i] =$_MODULE['fw'.$i]?explode("#",$_MODULE['fw'.$i]):array("文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字","文字");	
	$fl[$i] =$_MODULE['fl'.$i]?explode("#",$_MODULE['fl'.$i]):array("#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#","#");	
	
}
?>
<div class="tb-module tshop-um tshop-um-ms10">
	<div class="nav" style=" height:<?php echo $height; ?>px;">
    	<img src="<?php echo $gg1; ?>" width="990" height="<?php echo $height ?>"  />
    </div>
    
<?php
for($i=0;$i<7;$i++){   
	if($xs[$i] != "none"){ 
?>
  <div class="J_TWidget hidden" data-widget-type="Popup" data-widget-config="{
              'trigger':'.tc<?php echo $i; ?>ssa',
              'align':{
                      'node':'.tc<?php echo $i; ?>ssa',
                      'offset':[0,0],
                      'points':['bl','lt']
                      }
                }">
                <div class="con" style=" position:relative; width:600px; height:auto; overflow:hidden;">
                	<?php
					foreach($fw[$i] as $k=>$v){
					?>
                    <a href="<?php echo $fl[$i][$k] ?>" target="_blank"><?php echo $v; ?></a>
                    <?php
					}
					?>
                    <div class="bj"></div>
                </div>
    </div>
<?php
	}
}
?>    
</div>

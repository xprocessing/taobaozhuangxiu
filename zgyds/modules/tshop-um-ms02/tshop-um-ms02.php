





<?php
$pic=$_MODULE['pic']?explode("#",$_MODULE['pic']):array(
												'assets/images/1.jpg',
												'assets/images/2.jpg',
												'assets/images/3.jpg',
												'assets/images/4.jpg',
												'assets/images/5.jpg'
												); 
$link=$_MODULE['link']?explode("#",$_MODULE['link']):array("#","#","#","#","#");

$wangwang1=$_MODULE['wangwang1']?explode('#',$_MODULE['wangwang1']):array('售前1|','售前2|','售后1|','售后2|');
foreach($wangwang1 as $k=>$v){
	$s=explode('|',$v);
	if($s[1]){
		$kefu0[]=$s[1];
	}else{
		$kefu0[]=$u;	
	}
	$kufun0[]=$s[0];
}
$time=$_MODULE['time']?$_MODULE['time']:"AM 8:00 - PM 22:00";

for($i=0;$i<20;$i++){
	if($_MODULE['f'.$i] == NULL) break;
	$f[$i] = explode("#",$_MODULE['f'.$i]);	
	$x[$i] = explode("|",$_MODULE['x'.$i]);	
	foreach($x[$i] as $k=>$v){
		$m =explode("#",$v);
		$x[$i][$k] = $m[0];
		$y[$i][$k] = $m[1];	
	}
	
}
$r=md5(md5(rand(0,9999)."lf").rand(0,9999));
?>
<div class="tb-module tshop-um tshop-um-ms02">
	<div class="nav" style="display:none;">
    	<div class="conss" style="width:990px; height:40px; padding:0 465px; position:absolute; left:-465px; top:0; background:url(http://img04.taobaocdn.com/imgextra/i4/1776456424/T2FbtnXqNaXXXXXXXX_!!1776456424.jpg) no-repeat center center;">
            <div class="left">
                <div class="ts  ts<?php echo $r; ?>"></div>
                <?php
                foreach($pic as $k=>$v){
                    if($k ==8) break;
                ?>
                <a  class="tc<?php echo $k; ?>ssa"  href="<?php echo $link[$k] ?>" target="_blank">
                    <img src="<?php echo $v; ?>" width="105" height="40" />
                </a>
                <?php
                }
                ?>
            </div>
            <div class="right">
                <a href="<?php echo $uriManager->favoriteLink();?>" target="_blank"></a>
            </div>
        </div>
    </div>
    <div class="nav1">
        <ul class="ww">
            <?php
            foreach($kefu0 as $k=>$v){
                if($k ==4) break;
                ?>
                <li class="kf">
                    <div class="nick"><?php echo $kufun0[$k]; ?></div>
                   <?php echo $uriManager->supportTag($v,"请点击直接访问",2,false);?>
                    
                </li>
                <?php
                }
            ?>
        </ul>
        <div class="time"><p>旺旺工作时间:</p><b><?php echo $time; ?></b></div>
        <div class="ss" >                               
              <form target="_blank" method="get" action="<?php echo 'http://shop'. $_shop->id .'.tmall.com/?'.$_GET['keyword'].'&'.$_GET['orderType'].'&'.$_GET['viewType'].'&'.$_GET['baobei_type'].'&'.$_GET['keyword'];?>"  class="popform">	
                  <input type="text" value="输入关键字" name="keyword" class="text  keyword">
                  <input type="hidden" value="y" name="search">
                  <input type="hidden" value="_hotsell" name="orderType">
                  <input type="hidden" value="grid" name="viewType">
                  <input type="hidden" value="" name="baobei_type">								
                  <input class="button" type="submit" value="">
              </form>                              
        </div>
    </div>
    <div class="J_TWidget hidden" data-widget-type="Popup" data-widget-config="{
        'trigger':'.tss',
        'triggerType':'mouse',
        'align':{
        'node':'.tss',
        'offset':[0,0],
        'points':['bl','tl']
        }
        }" >
        <div class="total">
        	<?php
			foreach($f as $k=>$v){
			?>
            <a class="xfl xfl<?Php echo $k; ?>" href="<?php echo $f[$k][1]; ?>" target="_blank"><?php echo $f[$k][0]; ?></a>
            <div class="J_TWidget hiddens" data-widget-type="Popup" data-widget-config="{
                'trigger':'.xfl<?Php echo $k; ?>',
                'triggerType':'mouse',
                'align':{
                'node':'.xfl<?Php echo $k; ?>',
                'offset':[0,0],
                'points':['bl','tl']
                }
                }" >
                <div class="totals">
                    <?php
                    foreach($x[$k] as $k1=>$v1){
                    ?>
                    <a class="xfls" href="<?php echo $y[$k][$k1]; ?>" target="_blank"><?php echo $v1; ?></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
			}
			?>
        </div>
    </div>
</div>

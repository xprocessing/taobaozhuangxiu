



<?php

$pic1=$_MODULE['pic1']?$_MODULE['pic1']:"assets/images/1.gif";
$wangwang1=$_MODULE['wangwang1']?explode('#',$_MODULE['wangwang1']):array('售前1|','售前2|');
foreach($wangwang1 as $k=>$v){
	$s=explode('|',$v);
	if($s[1]){
		$kefu0[]=$s[1];
	}else{
		$kefu0[]=$u;	
	}
	$kufun0[]=$s[0];
}

$pic2=$_MODULE['pic2']?$_MODULE['pic2']:"assets/images/2.gif";
$wangwang2=$_MODULE['wangwang2']?explode('#',$_MODULE['wangwang2']):array('售前1|','售前2|');
foreach($wangwang2 as $k=>$v){
	$s=explode('|',$v);
	if($s[1]){
		$kefu1[]=$s[1];
	}else{
		$kefu1[]=$u;	
	}
	$kufun1[]=$s[0];
}

$pic3=$_MODULE['pic3']?$_MODULE['pic3']:"assets/images/3.gif";
$wangwang3=$_MODULE['wangwang3']?explode('#',$_MODULE['wangwang3']):array('售前1|','售前2|');
foreach($wangwang3 as $k=>$v){
	$s=explode('|',$v);
	if($s[1]){
		$kefu2[]=$s[1];
	}else{
		$kefu2[]=$u;	
	}
	$kufun2[]=$s[0];
}




?>
<div class="tb-module tshop-um tshop-um-ms04">
	<div class="navss">
	<div class="mb_servcenter">
		<div class="bd">
			<div class="subhd left"></div>
            <ul class="ww">
            	<li class="bt"><img src="<?php echo $pic1; ?>" width="90" height="60" /></li>
                <?php
                foreach($kefu0 as $k=>$v){
                    if($k ==2) break;
                    ?>
                    <li class="kf">
                        <div class="nick"><?php echo $kufun0[$k]; ?></div>
                       <?php echo $uriManager->supportTag($v,"请点击直接访问",2,true);?>
                        
                    </li>
                    <?php
                    }
                ?>
            </ul>
            <ul class="ww">
            	<li class="bt"><img src="<?php echo $pic2; ?>" width="90" height="60" /></li>
                <?php
                foreach($kefu1 as $k=>$v){
                    if($k ==2) break;
                    ?>
                    <li class="kf">
                        <div class="nick"><?php echo $kufun1[$k]; ?></div>
                       <?php echo $uriManager->supportTag($v,"请点击直接访问",2,true);?>
                        
                    </li>
                    <?php
                    }
                ?>
            </ul>
            <ul class="ww">
            	<li class="bt"><img src="<?php echo $pic3; ?>" width="90" height="60" /></li>
                <?php
                foreach($kefu2 as $k=>$v){
                    if($k ==2) break;
                    ?>
                    <li class="kf">
                        <div class="nick"><?php echo $kufun2[$k]; ?></div>
                       <?php echo $uriManager->supportTag($v,"请点击直接访问",2,true);?>
                        
                    </li>
                    <?php
                    }
                ?>
            </ul>                        
		</div>		
	</div>
    </div>
</div>

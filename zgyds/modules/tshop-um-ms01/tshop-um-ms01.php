





<?php
$dpic0=$_MODULE['dpic0']?$_MODULE['dpic0']:'assets/images/1.jpg'; 
$dlink0=$_MODULE['dlink0']?$_MODULE['dlink0']:'#'; 
$dpic1=$_MODULE['dpic1']?$_MODULE['dpic1']:'assets/images/2.jpg'; 
$dlink1=$_MODULE['dlink1']?$_MODULE['dlink1']:'#'; 
$dpic2=$_MODULE['dpic2']?$_MODULE['dpic2']:'assets/images/3.jpg'; 
$dlink2=$_MODULE['dlink2']?$_MODULE['dlink2']:'#'; 


$xpic0=$_MODULE['xpic0']?$_MODULE['xpic0']:'assets/images/1.gif'; 
$xlink0=$_MODULE['xlink0']?$_MODULE['xlink0']:'#'; 
$xpic1=$_MODULE['xpic1']?$_MODULE['xpic1']:'assets/images/2.gif'; 
$xlink1=$_MODULE['xlink1']?$_MODULE['xlink1']:'#'; 
$xpic2=$_MODULE['xpic2']?$_MODULE['xpic2']:'assets/images/3.gif'; 
$xlink2=$_MODULE['xlink2']?$_MODULE['xlink2']:'#'; 

$pic=$_MODULE['pic']?explode("#",$_MODULE['pic']):array(
												'assets/images/1s.jpg',
												'assets/images/2s.jpg',
												'assets/images/3s.jpg',
												'assets/images/4s.jpg',
												'assets/images/5s.jpg'
												); 
$link=$_MODULE['link']?explode("#",$_MODULE['link']):array("#","#","#","#","#");

?>
<div class="tb-module tshop-um tshop-um-ms01">
	<div class="nav">
    	<div class="one">
        	<a href="<?php echo $dlink0; ?>" target="_blank">
            	<img src="<?php echo $dpic0; ?>" width="495" height="100" />
            </a>
        </div>
        <div class="two">
        	<a href="<?php echo $dlink1; ?>" target="_blank">
            	<img src="<?php echo $dpic1; ?>" width="195" height="100" />
            </a>        
        </div>
        <div class="three">
        	<a href="<?php echo $dlink2; ?>" target="_blank">
            	<img src="<?php echo $dpic2; ?>" width="180" height="100" />
            </a>        
        </div>
        <div class="four">
        	<a href="<?php echo $xlink0; ?>" target="_blank">
            	<img src="<?php echo $xpic0; ?>" width="88" height="26" />
            </a>   
        	<a href="<?php echo $xlink1; ?>" target="_blank">
            	<img src="<?php echo $xpic1; ?>" width="88" height="26" />
            </a>   
        	<a href="<?php echo $xlink0; ?>" target="_blank">
            	<img src="<?php echo $xpic2; ?>" width="88" height="26" />
            </a>                           
        </div>
    </div>
	<div class="navs">
    	<div class="conss" style="width:990px; height:40px; position:relative;  background:url(http://img04.taobaocdn.com/imgextra/i4/1776456424/T2FbtnXqNaXXXXXXXX_!!1776456424.jpg) no-repeat center center;">
            <div class="left" style=" position:absolute; left:0; top:0;">
                <div class="ts  tss"></div>
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
            <div class="right" style=" position:absolute; right:0; top:0;">
                <a href="<?php echo $uriManager->favoriteLink();?>" target="_blank"></a>
            </div>
        </div>
    </div>
</div>

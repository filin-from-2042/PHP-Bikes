<?php
$postMaxSize=ini_get('post_max_size'); //8M
$lastSim=$postMaxSize{strlen($postMaxSize)-1};//M
 switch ($lastSim):
	case 'G': $postMaxSize*=1024;
	case 'M': $postMaxSize*=1024;
	case 'K': $postMaxSize*=1024;
	echo $postMaxSize;
endswitch;
	




?>

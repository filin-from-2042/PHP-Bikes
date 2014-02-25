<?php
function viewDir($dir,$tab=''){

	$d=opendir($dir);
	while ($name=readdir($d)){
		if ($name=="." or $name=="..")
			continue;
		if (is_dir($name)){
			echo "$tab<b>[$name]</b><br>";
			// $tab.='-';
			viewDir($dir."\\\\$name",$tab.'-');					
		} else {
			echo "$tab$name<br>";
		}
	}
	closedir($d);
}

viewDir(".");



//$d++;
//echo realpath('files.php');

//$d=scandir(".");
//print_r($d);

?>
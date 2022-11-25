<?php 

//Access-Control-Allow-Origin header with wildcard.
header('Access-Control-Allow-Origin: *');
		$dir = '../gambar/radarimage/';
		//$lok=$_GET["lok"];
		$ignored = array('.', '..', '.svn', '.htaccess','.directory');
		$files = array();
		$filex = scandir($dir);
		if(count($filex)>2){
		foreach (scandir($dir) as $file) {
			if (in_array($file, $ignored)) {continue;}
			$files[$file] = filemtime($dir . '/' . $file);
		}
		arsort($files);
		$filex = array_keys($files);
		$batas=$_GET["lop"];
		$nomor=0;
	    
	    for($nomor=0;$nomor<$batas;$nomor++){echo "$filex[$nomor];";}
	    
		}
		else {echo "nodata !!!";}
		
?>
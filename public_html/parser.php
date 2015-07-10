<?php

	
	if (isset($_GET['q'])) {
		$func=$_GET['q'];
	
		switch ($func){
			case "thumbs":
				thumbs();
				break;
		
			case "micro":
				micro();
				break;
		
			default:
				unset($func);
		}
	}
	
	function thumbs(){
		$url = 'galleri/galleri.xml';
		$xml = simplexml_load_file($url);
		
		print ("<ul id=\"gallerilist\" class=\"thumbs\">");
		foreach($xml -> image as $image){
			print ('<li>');
			printf ("<img id=\"%s\" src=\"galleri/%s\" alt=\"%s\" onclick=\"galleri.showImg('%s')\" />", trim($image -> id), trim($image -> thumb), trim($image -> alt), trim($image -> name));
			print ('</li>');
		}
		echo '</ul>';
	}
	
	function micro(){
		$url = 'galleri/galleri.xml';
		$xml = simplexml_load_file($url);
		
		print("<a href=\"#\" id=\"tumbslink\" onclick=\"galleri.writeThumbs()\">Tilbage til galleri</a>");
		print ("<ul id=\"gallerilist\" class=\"micro\">");
		foreach($xml -> image as $image){
			print ("<li>");
			printf ("<img id=\"%s\" src=\"galleri/%s\" alt=\"%s\" onclick=\"galleri.showImg('%s')\"  />", 
					trim($image -> id) , trim($image -> micro), trim($image -> alt), trim($image -> name));
			print ("</li>");
		}
		print ("</ul>");
	}
	
	function name(){
		$url = 'galleri/galleri.xml';
		$xml = simplexml_load_file($url);
		
		foreach ($xml -> image as $image) {
			echo '<br />';
			echo $image -> name;
			echo '<br />';
			echo $image -> alt;
			echo '<br />';
			echo $image -> title;
			echo '<br />';
			echo '----------------';
		}
	}			
	
?>
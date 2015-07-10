<?php
	require_once 'Page.class.php';
	
	$doc = new Page("Fotogalleri");
		
	print($doc->getTop());
        $doc->prtScript($doc::GALLERIJS);
        $doc->prtScript($doc::JQUERY);
        $doc->prtScript($doc::BOOTSTRAPJS);
	print($doc->getNeck());
	Require_once $doc::MENU; 
		
?>



<?php
    print($doc->getFoot());
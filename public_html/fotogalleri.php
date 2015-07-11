<?php
	require_once 'Page.class.php';
	
	$doc = new Page("Fotogalleri");
		
	print($doc->getTop());
        $doc->prtScript($doc::JQUERY);
        $doc->prtScript($doc::GALLERIJS);
        $doc->prtScript($doc::BOOTSTRAPJS);
	print($doc->getNeck());
	Require_once $doc::MENU; 
		
?>
<div id="topimg"><img src="images/fotogalleri_top.png" alt="" class="center-block" /></div>
        <header>
            <h1>Fotogalleri</h1>
        </header>
        <section>
            <button id="back" type="button" class="btn btn-default">Tilbage til galleri</button>
            <div id="galleri"></div>
            <div id="image" ></div>
        </section>
<noscript>Fotogalleriet kr&aelig;ver javascript</noscript>


<?php
    print($doc->getFoot());
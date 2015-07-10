<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("Pladser");
	
	print($doc->getTop());
        $doc->prtScript($doc::MAILJS);
        $doc->prtScript($doc::JQUERY);
        $doc->prtScript($doc::BOOTSTRAPJS);        
	print($doc->getNeck());
	require_once $doc::MENU;
	

?>
<div id="topimg"><img src="images/fotogalleri_top.png" alt="" class="center-block" /></div>
		<header>
                    <h1>Ans&oslash;gning om pladser</h1>
		</header>
<section>
    <p>
        <strong> HUSK at ved h&aelig;fte et billede af b&aring;den sammen med pdf, dette er vigtigt</strong>
    </p>
    <h2>Brugsanvisning</h2>
    <p>
    <ul class="genericlist">
        <li>
        Skemaet kr&aelig;ver Adobe Reader eller tilsvarende program til at &aring;bne pdf
        Adobe Reader kan hentes <a href="http://get.adobe.com/dk/reader/" target="Adobe - Adobe Reader. Download af gratis PDF-fremviser"> her</a>            
        </li>
        <li>Hent vores skema <a href="files/AANAnsoegninomplads.pdf" target="AANAnsoegningomplads"> her</a> og gem det p&aring; computeren, derefter udfyldes det</li>
        <li>Opret e-mail og vedh&aelig;ft pdf og billede af b&aring;d</li>
        <li>Send det til fartøjsinspektør Michael Gr&oslash;nne
                            <script>
                            /*<![CDATA[*/
                                    EmailMichael();
                            /*]]>*/
                            </script>             
        </li>
        <li>Vi vender tilbage hurtigst mulig</li>
    </ul>
    </p>
    <h2>Priser</h2>
    <p>
        Kontakt Michael Gr&oslash;nne
    </p>
</section>

<?php
print($doc->getFoot());

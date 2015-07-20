<?php
	require_once 'Page.class.php';
	
	$doc = new Page("Fotogalleri");
		
	print($doc->getTop());
	print($doc->getNeck());
	Require_once $doc::MENU; 
		
?>

<div id="topimg"><img src="images/fotogalleri_top.png" alt="" class="center-block img-responsive" /></div>
        <header>
            <h1>Fotogalleri</h1>
        </header>
        <section>
            <button id="back" type="button" class="btn btn-primary">Tilbage til galleri</button>
            <div id="galleri"></div>
            <div id="image"></div>
        </section>
<noscript>Fotogalleriet kr&aelig;ver javascript</noscript>
<?php
    $doc->prtCommonScripts();
    $doc->prtScript($doc::GALLERIJS);
    ?>
        <script>
        /*<![CDATA[*/
            (function($){
                $(document).ready(function(){
                   $("#fotogalleri").addClass("active"); 
                });
            }(jQuery));
        /*]]>*/
        </script> 
<?php
    print($doc->getFoot());
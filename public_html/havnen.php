<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("Havnen");
	
	print($doc->getTop());
	print($doc->getNeck());	
	require_once $doc::MENU;
	

?>

        <img src="images/havnen_top.png" alt="" class="center-block img-responsive" />
        <header>
                <h1>Havnen</h1>
        </header>
        <section>
            <ul class="genericlist">
                <li>
                    <a href="http://danskehavnelods.dk/#HID=681" target="Den Danske Havnelods">Besejling</a>
                </li>
                <li>
                    <a href="files/havnereglement.pdf">Havnereglement</a>
                </li>
            </ul>

        <noscript>Email adressen kr&aelig;ver javascript</noscript>

        <div id="vandstand">
            <img src="http://ifm.fcoo.dk//asp/oceanMeter.asp?charttype=2&amp;mode=0&amp;type=1&amp;color=1&amp;width=200&amp;header=1&amp;lang=DK&amp;id=AARHUS&amp;user=WARNING_LOW_SEALEVEL&amp;paramId=SeaLvl&amp;aakdom=http://www.aarhusnordhavn.dk" alt="Aktuel vandstand" title="Aktuel vandstand" />
        </div>
        </section>
        <?php $doc->prtCommonScripts();?>
        <script>
        /*<![CDATA[*/
            (function($){
                $(document).ready(function(){
                   $("#havnen").addClass("active"); 
                });
            }(jQuery));
        /*]]>*/
        </script>         
<?php
    print($doc->getFoot());
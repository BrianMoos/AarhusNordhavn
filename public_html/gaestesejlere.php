<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("G&aelig;stesejlere");
	
	print($doc->getTop());
	print($doc->getNeck());	
	require_once $doc::MENU;
	

?>

        <img src="images/gaestesejlere_top.png" alt="" class="center-block img-responsive" />
        <header>
                <h1>G&aelig;stesejlere</h1>
        </header>
        <section>
            <article>
                <p>
                    Som g&aelig;stesejler er du velkommen i Aarhus Nordhavn. Besejlingen af havnen er problemfrit. Se her: 
                    <a href="http://danskehavnelods.dk/#HID=681" target="Den Danske Havnelods">Besejling</a></p>
                <p>
                    Havnen lytter på vhf kanal 09
                </p>
                <h2>Priser gæstesejlere 2014:</h2>
                <ul class="genericlist">
                    <li>
                        B&aring;de &lt; 32 fod: kr. 100,-
                    </li>
                    <li>
                        B&aring;de 32-50 fod: Kr. 150,-
                    </li>
                    <li>
                        B&aring;de &gt; 50 fod: 250,-
                    </li>
                    <li>
                        Tilslutning el: Kr. 20
                    </li>
                    <li>
                        Havnepenge afregnes ved ankomst, se i øvrigt opslag i foreningens montre på kajen
                    </li>
                </ul>

                <h2>Toilet og bad</h2>
                <p>
                    <a href="images/toilet.png">Toilet og bad</a>
                </p>
                <h3>Kort over omr&aring;det</h3>
                <p>
                    <a href="http://findvej.dk/pakkerivej,8000" target="Pakkerivej 8000 Aarhus C">Kort over omr&aring;det ved Aarhus Nordhavn</a>
                </p>
                <h2>Transport til og fra havnen</h2>
                <p>
                    Bycykler: Om sommeren er der placeret bycykler to steder på havnen: <br />
                    P&aring; vestsiden ved gangbroen over jernbanen. <br />
                    P&aring; &oslash;stsiden ved Aarhus Sejlklubs baderum. <br />
                    Se mere her: <a href="http://www.aarhusbycykel.dk">www.aarhusbycykel.dk</a>
                </p>
                <p>
                    Busser: Der k&oslash;rer busser til og fra havnen flere gange i timen.<br />
                    N&aelig;rmeste stoppested: &Oslash;stbanetorvet (skr&aring;t overfor 
                    den gamle station 100 m. fra havnen.) <br />
                    Se mere her: <a href="http://www.midttrafik.dk">www.midttrafik.dk</a>
                </p>
                <h2>Andre faciliteter</h2>
                <p>
                    K&oslash;bmand og m&oslash;ntvask. Altsammen i g&aring;afstand.
                </p>
            </article>
        </section>
    <?php $doc->prtCommonScripts();?>
        <script>
        /*<![CDATA[*/
            (function($){
                $(document).ready(function(){
                   $("#gaestesejlere").addClass("active"); 
                });
            }(jQuery));
        /*]]>*/
        </script>         
<?php
    print($doc->getFoot());

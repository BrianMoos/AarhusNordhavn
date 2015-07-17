<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("Sejlklubben");
	
	print($doc->getTop());
	print($doc->getNeck());	
	require_once $doc::MENU;
	

?> 
        <img src="images/sejlklubben_top.png" alt="" class="center-block img-responsive" />
        <header>
                <h1>Sejlklubben Aarhus Nordhavn</h1>
        </header>
        <div class="row">
            <div class="col-md-6">
		<section id="klubben">
                    <h2>Kontakter</h2>
                        <strong>Havnefoged</strong>    Brian Uller Tlf. 41 82 66 00
                    <p>
                        <strong>Fart&oslash;jsinspekt&oslash;r</strong> Michael Gr&oslash;nne <span class="mail-michael"></span>                      
                    </p>
                    <p>
                        <strong>Elansvarlig</strong> Michael Gr&oslash;nne                       
                    </p>
                    <h2>Bestyrelse</h2>
                    <ul class="genericlist">
                        <li>
                            <strong>Formand</strong> Brian Uller <span class="mail-uller"></span>
                        </li>
                        <li>
                            <strong>N&aelig;stformand</strong> Erik Bjerre <span class="mail-erik"></span>					
                        </li>				
                        <li>
                            <strong>Kasserer</strong> Klaus Gelting <span class="mail-klaus"></span>						
                        </li>
                        <li>
                            Michael Gr&oslash;nne <span class="mail-michael"></span>
                        </li>
                        <li>
                            Kim Christensen <span class="mail-kim"></span>
                        </li>                                        
                    </ul>
                    <h2>Hjemmesiden</h2>
                    <ul class="genericlist">
                        <li>Hjemmesiden er på Github</li>
                        <li><a href="https://github.com/saadanerdetbare/AarhusNordhavn" target="_blank"><img src="./images/GitHub-Mark-32px.png" /> https://github.com/saadanerdetbare/AarhusNordhavn</a></li>
                        <li>Alle forslag, bugs, issues og tilføjelser modtages her. Bidrag og pullrequests er velkomne</li>
                    </ul>
                    <noscript>Email adressen kr&aelig;ver javascript</noscript><br />
                </section>
            </div>
            <div class="col-md-6">
                <section id="stander">
                    <h2>Sejlklubbens stander</h2>
                    <img src="images/aanstander.png" alt="Aarhus Nordhavns stander" title="Aarhus Nordhavns stander" />
                    <ul class="genericlist">
                        <li>
                            <a href="files/vedtaegter.pdf">Sejlklubbens vedt&aelig;gter</a>
                        </li>
                        <li>
                            <a href="files/formandens_Aarsberetning.pdf">Formandens beretning</a>
                        </li>
                        <li>
                            <a href="files/Referat2014.pdf">Referat generalforsamling 2014</a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <?php $doc->prtCommonScripts();?>
        <script>
            /*<![CDATA[*/
            (function($){
                $(document).ready(function(){
                   $("#sejlklubben").addClass("active"); 
                });
            }(jQuery)); 
            /*]]>*/
        </script>
<?php
    print($doc->getFoot());
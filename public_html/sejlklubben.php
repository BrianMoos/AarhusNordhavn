<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("Sejlklubben");
	
	print($doc->getTop());
        $doc->prtScript($doc::MAILJS);
	print($doc->getNeck());	
	require_once $doc::MENU;
	

?>
        <img src="images/sejlklubben_top.png" alt="" class="center-block" />
        <header>
                <h1>Sejlklubben Aarhus Nordhavn</h1>
        </header>
        <div class="row">
            <div class="col-md-6">
		<section id="klubben">
                    <h2>Kontakter</h2>
                        <strong>Havnefoged</strong>    Brian Uller Tlf. 41 82 66 00
                    <p>
                        <strong>Fart&oslash;jsinspekt&oslash;r</strong> Michael Gr&oslash;nne 
                        <script>
                        /*<![CDATA[*/
                                EmailMichael();
                        /*]]>*/
                        </script>                        
                    </p>
                    <p>
                        <strong>Elansvarlig</strong> Michael Gr&oslash;nne
                        <script>
                        /*<![CDATA[*/
                                EmailMichael();
                        /*]]>*/
                        </script>                          
                    </p>
                    <h2>Bestyrelse</h2>
                    <ul class="genericlist">
                        <li>
                            <strong>Formand</strong> Brian Uller
                            <script>
                            /*<![CDATA[*/
                                    EmailUller();
                            /*]]>*/
                            </script>
                        </li>
                        <li>
                            <strong>N&aelig;stformand</strong> Erik Bjerre
                            <script>
                            /*<![CDATA[*/
                                    EmailErik();
                            /*]]>*/
                            </script>						
                        </li>				
                        <li>
                            <strong>Kasserer</strong> Klaus Gelting 
                            <script>
                            /*<![CDATA[*/
                                    EmailKlaus();
                            /*]]>*/
                            </script>						
                        </li>
                        <li>
                            Michael Gr&oslash;nne
                            <script>
                                /*<![CDATA[*/
                                        EmailMichael();
                                /*]]>*/                                                
                            </script>
                        </li>
                        <li>
                            Kim Christensen
                            <script>
                                /*<![CDATA[*/
                                        EmailKim();
                                /*]]>*/                                                
                            </script>
                        </li>                                        
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
<?php
    print($doc->getFoot());
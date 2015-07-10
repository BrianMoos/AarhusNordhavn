<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("Aarhus Nordhavn");
	
	print($doc->getTop());
        $doc->prtScript($doc::MAILJS);
        $doc->prtScript($doc::JQUERY);
        $doc->prtScript($doc::BOOTSTRAPJS);
	print($doc->getNeck());
	require_once $doc::MENU;
	
?>

<img src="images/index_top.png" alt="" class="center-block" />
		<header>
			<h1>Velkommen til sejlklubben Aarhus Nordhavn</h1>
		</header>
		<article>
			<p>
				Aarhus Nordhavn rummer en række af de kvaliteter, som desværre er på retur i mange andre havne.
			</p>
			<p>
				Det er en levende havn med fiskefart&oslash;jer, sejlb&aring;de, motorb&aring;de, tr&aelig;skibe, 
				rob&aring;de og andre mindre fart&oslash;jer - beliggende i g&aring;afstand til Aarhus Midtby
			</p>
			<p>
				Havnen ligger i umiddelbar n&aelig;rhed af flere gode spisesteder.
			</p>
			<p>
				Aarhus Nordhavn er et lille b&aring;delaug med 30 pladser, der lejes af klubbens medlemmer, beliggende 
				inderst i Aarhus Lystb&aring;dehavn t&aelig;t på ophalerbedding, fiskeforretninger, gourmetrestaurant, og 
				andre virksomheder.
			</p>
			<p>
				Pladserne ligger mellem den gamle auktionshal og ophalerbeddingen.Der er som regel ingen problemer med at 
				f&aring; plads, selv i højs&aelig;sonen.
			</p>
			<p>
				I sommers&aelig;sonen er der som regel en kapacitet på 5-10 g&aelig;stesejlere. Vi har plads til store sejlbåde
                                bredde 5 - 6 m. samt sm&aring; sejlb&aring;de med bredde under 3 m. Bassindybde: Over 4 m.
			</p>

			<noscript>Email adressen kr&aelig;ver javascript</noscript><br />
		</article>
<?php
    print($doc->getFoot());
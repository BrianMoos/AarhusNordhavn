<?php
	
	require_once 'Page.class.php';
	
	$doc  = new Page("Links");
	
	print($doc->getTop());
        $doc->prtScript($doc::MAILJS);
	print($doc->getNeck());	
	require_once $doc::MENU;
	

?>
		<img src="images/links_top.png" alt="" class="center-block" />
		<h1>Links</h1>
		<section class="links">
			<h2>Andre sejlklubber</h2>
		<ul class="genericlist">
			<li>
				Aarhus Lystb&aring;dehavn: 
				<a  title="http://www.aarhuslystbaadehavn.dk/" href="http://www.aarhuslystbaadehavn.dk/" >www.aarhuslystbaadehavn.dk</a>
			</li>
			<li>
				&Aring;rhus Sejlklub: 
				<a  title="http://www.aarhussejlklub.dk/" href="http://www.aarhussejlklub.dk/" >www.aarhussejlklub.dk</a>
			</li>
			<li>
				Sejlklubben Bugten: 
				<a  title="http://www.bugten.dk/" href="http://www.bugten.dk/" >www.bugten.dk</a>
			</li>
			<li>
				Aarhus Motorb&aring;ds Klub: 
				<a  title="http://www.aarhusmotorbaadklub.dk/" href="http://www.aarhusmotorbaadklub.dk/" >www.aarhusmotorbaadklub.dk</a>
			</li>
			<li>
				Tr&aelig;skibsforeningen i &Aring;rhus: 
				<a  title="http://www.tsa.dk/" href="http://www.tsa.dk/" >www.tsa.dk</a>
			</li>
			<li>
				B&aring;delauget krogen: 
				<a  title="http://www.krogen.biz/" href="http://www.krogen.biz/" >www.krogen.biz</a>
			</li>
		</ul>
			<h2>Kort over om&aring;det</h2>
			<ul class="genericlist">
				<li>
					Kort over omr&aring;det ved Aarhus Nordhavn: 
                                        <a title="findvej.dk" href="http://findvej.dk/pakkerivej,8000" target="Pakkerivej 8000 Aarhus C">findvej.dk</a>
				</li>
			</ul>			
		</section>
		<section class="links">
			<h2>B&aring;dudstyr og -reparationer: </h2>
			<ul class="genericlist">
				<li>
					AFI Marine: 
					<a title="http://www.afi.dk/" href="http://www.afi.dk/">www.afi.dk</a>
				</li>
				<li>
					Aarhus b&aring;dservice: 
					<a title="http://www.aarhusbaadservice.dk/" href="http://www.aarhusbaadservice.dk/">www.aarhusbaadservice.dk</a>
				</li>
			</ul>
			<h2>L&aelig;s mere om Aarhus</h2>
			<ul class="genericlist">
				<li>
					Visit Aarhus: 
					<a title="http://www.visitaarhus.dk/" href="http://www.visitaarhus.dk/">www.visitaarhus.dk</a>
				</li>
				<li>
					Aarhus kommune: 
					<a title="http://www.aarhus.dk/" href="http://www.aarhus.dk/">www.aarhus.dk</a>
				</li>
			<li>
				&Aring;rhus Trafik Havn: 
				<a  title="http://www.aarhushavn.dk/" href="http://www.aarhushavn.dk/" >www.aarhushavn.dk</a>
			</li>				
			</ul>
		</section>
<?php
    print($doc->getFoot());
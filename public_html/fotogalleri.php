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
        <div class="container" style="padding-top: 60px">
          <div class="row portfolio" id="galleri">

          </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Im the awesome cat!</h4>
                </div>
                <div class="modal-body">
                  <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?42" alt="The awesome description">
                </div>
              </div>
            </div>
          </div>
        </div>
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
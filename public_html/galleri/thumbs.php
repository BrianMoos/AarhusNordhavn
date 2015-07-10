		<div class="fotogalleri thumbs">
			<ul>
				<?php
					$url = 'galleri/galleri.xml';
					$xml = simplexml_load_file($url);
					
					foreach($xml -> image as $image){
						echo '<li>';
						echo '<img src="galleri/' . trim($image -> thumb) . '" alt="' . $image -> alt . '" />';
						echo '</li>';
					}
				?>	
			</ul>
		</div>	
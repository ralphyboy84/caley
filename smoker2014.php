<?php
require_once("header.php");
?>
<h2 class="featurette-heading">Prize Giving 2014</h2>
		<hr class="featurette-divider">
		
		<div id="gallery">
            <div class="album" data-jgallery-album-title="Album 1">
                   <h1>Album 1</h1>
				   
				   <?php
				   
				   for ($x=2;$x<55;$x++) {
						echo "<a href='untitled-$x.jpg' target='_blank'><img src='untitled-$x.jpg' alt='image' /></a>";
				   }
				   
				   ?>
               </div>
		</div>
	  <?php
require_once("footer.php");
?>

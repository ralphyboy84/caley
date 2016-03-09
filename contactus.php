<?php
require_once("header.php");
?>
		<h2 class="featurette-heading">Contact Us</h2>
<hr class="featurette-divider">
<p class="lead">
Caledonia Golf Club<br />
Links Parade<br />
Carnoustie<br />
DD7 7JF<br />
01241 852115<br />
</p>
<hr class="featurette-divider">
        <p class="lead">
			
			<table>
				<tr id='contactName'>
					<td>Name:</td><td><input type='input' id='cname' placeholder='Name' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='contactEmail'>
					<td>Email:</td><td><input type='input' id='cemail' placeholder='Email Address' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='contactComment'>
					<td>Comment:</td><td><textarea id='comment' placeholder='Comment' cols='50' rows='5' class='form-control'></textarea></td>
				</tr>
			</table>
			<br />
			<button class="btn btn-large btn-primary btn-block" type="button" style='width:100px' id='submitContactUsButton'>Submit</button>
		</p>
	  
	  <div id='hiddenContactUsDiv'>
	  </div>
	  
<?php
	  require_once("footer.php");
	  ?>

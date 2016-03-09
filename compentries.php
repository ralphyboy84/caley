<?php
require_once("header.php");
?>

		<h2 class="featurette-heading">Competition Entries 2014</h2>
<hr class="featurette-divider">
        <p class="lead">
			Please enter your name and select which competitions you would like to enter this year. The draw for competitions this year will take place on March 30th and there is a £1 entry fee for every competition.
			<table>
				<tr id='entrantName'>
					<td>Name:</td><td><input type='input' id='name' placeholder='Name' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='entrantEmail'>
					<td>Email:</td><td><input type='input' id='email' placeholder='Email Address' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr>
					<td>Watson Trophy (Championship Singles):</td><td><input type='checkbox' id='watson' /></td>
				</tr>
				<tr>
					<td>TSB Trophy (Burnside Singles):</td><td><input type='checkbox' id='tsb' /></td>
				</tr>
				<tr>
					<td>Donald Robertson Trophy (Buddon Singles):</td><td><input type='checkbox' id='robertson' /></td>
				</tr>
				<tr>
					<td>JP Bruce Trophy (+55 Burnside Singles):</td><td><input type='checkbox' id='bruce' /></td>
				</tr>
				<tr>
					<td>JD Little Tankard (Championship Foursomes):</td><td><input type='checkbox' id='jdlittle' /></td>
				</tr>
				<tr id='jdLittlePartner'>
					<td>Partner:</td><td><input type='input' id='jdlittlepartnerinput' placeholder='JD Little Partner' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr>
					<td>WF Ruark Trophy (Burnside Fourball):</td><td><input type='checkbox' id='ruark' /></td>
				</tr>
				<tr id='wfRuarkPartner'>
					<td>Partner:</td><td><input type='input' id='ruarkpartnerinput' placeholder='WF Ruark Partner' class="input-block-level form-control" value='' /></td>
				</tr>
			</table>
			<br />
			<button class="btn btn-large btn-primary btn-block" type="button" style='width:100px' id='submitCompetitionEntryForm'>Submit</button>
		</p>
	  
	  <div id='hiddenCompetitionEntryForm'>
	  </div>
	  
<?php
	  require_once("footer.php");
	  ?>

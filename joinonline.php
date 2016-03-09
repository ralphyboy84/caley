<?php
require_once("header.php");
?>
		<h2 class="featurette-heading">Join Online</h2>
<hr class="featurette-divider">
<p class="lead">
Joining the "Caley" couldn't be easier. With our new online form you can now do it from the comfort of your living room. All you need to do is fill out the form below, and wait for someone from the club to get in contact with you.
</p>
<hr class="featurette-divider">
        <p class="lead">
			<form id='joinUsForm'>
			<table>
				<tr id='joinNameInputLabel'>
					<td>Name:</td><td><input type='input' id='joinNameInput' name='joinNameInput' placeholder='Name' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinEmailInputLabel'>
					<td>Email:</td><td><input type='input' id='joinEmailInput' name='joinEmailInput' placeholder='Email Address' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinAddressInputLabel'>
					<td>Address:</td><td><textarea id='joinAddressInput' name='joinAddressInput' placeholder='Address' cols='50' rows='5' class='form-control'></textarea></td>
				</tr>
				<tr id='joinPhoneInputLabel'>
					<td>Phone Number:</td><td><input type='input' id='joinPhoneInput' name='joinPhoneInput' placeholder='Phone Number' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinDobInputLabel'>
					<td>Date of Birth:</td><td><input type='text' id='joinDobInput' name='joinDobInput' placeholder='Date of Birth' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinPrevClubsInputLabel'>
					<td>What golf clubs have you previously been a member of?:</td><td><textarea id='joinPrevClubsInput' name='joinPrevClubsInput' placeholder='Clubs previously been a member of' cols='50' rows='5' class='form-control'></textarea></td>
				</tr>
				<tr id='joinSeasonTicketNoInputLabel'>
					<td>Season Ticket Number (if any):</td><td><input type='input' id='joinSeasonTicketNoInput' name='joinSeasonTicketNoInput' placeholder='Season Ticket Number' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinSeasonTicketTypeInputLabel'>
					<td>Season Ticket Type (if any):</td>
					<td>
						<select id='joinSeasonTicketTypeInput' name='joinSeasonTicketTypeInput' class="input-block-level form-control">
							<option value="">Select...</option>
							<option value="3 Course 7 Day">3 Course 7 Day</option>
							<option value="3 Course 5 Day">3 Course 5 Day</option>
							<option value="2 Course 7 Day">2 Course 7 Day</option>
							<option value="2 Course 5 Day">2 Course 5 Day</option>
							<option value="1 Course 7 Day">1 Course 7 Day</option>
							<option value="1 Course 5 Day">1 Course 5 Day</option>
						</select>
					</td>
				</tr>
				<tr id='joinHandicapInputLabel'>
					<td>Current Handicap (if any):</td><td><input type='input' id='joinHandicapInput' name='joinHandicapInput' placeholder='Handicap' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinHomeClubInputLabel'>
					<td>Will the Caledonia Golf Club be your home club?:</td><td><select id='joinHomeClubInput' name='joinHomeClubInput' class="input-block-level form-control"><option value="YES">Yes</option><option value="NO">No</option></select></td>
				</tr>
				<tr id='joinMembershipTypeInputLabel'>
					<td>Membership Category Applied For:</td>
					<td>
						<select id='joinMembershipTypeInput' name='joinMembershipTypeInput' class="input-block-level form-control">
							<option value="Ordinary">Ordinary</option>
							<option value="Senior">Senior (65 plus)</option>
							<option value="Student">Student</option>
							<option value="Junior">Junior (14-18)</option>
							<option value="Juvenile">Juvenile (u14)</option>
							<option value="Country">Country</option>
						</select>
					</td>
				</tr>
				<tr id='joinProposerNameInputLabel'>
					<td>Proposer Name:</td><td><input type='input' id='joinProposerNameInput' name='joinProposerNameInput' placeholder='Proposer Name' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinProposerEmailInputLabel'>
					<td>Proposer Email:</td><td><input type='input' id='joinProposerEmailInput' name='joinProposerEmailInput' placeholder='Proposer Email Address' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinSeconderNameInputLabel'>
					<td>Seconder Name:</td><td><input type='input' id='joinSeconderNameInput' name='joinSeconderNameInput' placeholder='Seconder Name' class="input-block-level form-control" value='' /></td>
				</tr>
				<tr id='joinSeconderEmailInputLabel'>
					<td>Seconder Email:</td><td><input type='input' id='joinSeconderEmailInput' name='joinSeconderEmailInput' placeholder='Seconder Email Address' class="input-block-level form-control" value='' /></td>
				</tr>
			</table>
			</form>
			<br />
			<button class="btn btn-large btn-primary btn-block" type="button" style='width:100px' id='submitJoinUsButton'>Submit</button>
		</p>
	  
	  <div id='hiddenJoinUsDiv'>
	  </div>
	  
<?php
	  require_once("footer.php");
	  ?>

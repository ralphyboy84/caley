$(document).ready(function(){

	$("#joinDobInput").datepicker({ 
		dateFormat: 'dd/mm/yy' ,
		changeMonth: true,
		changeYear: true,
		maxDate: new Date,
		yearRange: '-70 :c',
	});

	$("#submitContactUsButton").click(function(){
		var returnFlag=0;
		
		if (!$("#cname").val()) {
			$("#contactName").addClass("has-error");
			returnFlag=1;
		}	

		if (!$("#cemail").val()) {
			$("#contactEmail").addClass("has-error");
			returnFlag=1;
		}
		
		if (!$("#comment").val()) {
			$("#contactComment").addClass("has-error");
			returnFlag=1;
		}
		
		if (!returnFlag) {
			$("#submitContactUsButton").hide();
			$("#hiddenContactUsDiv").html( "<img src='ajax-loader.gif' alt='image loader' /> Submitting form....");
		
			$.ajax({
				type: "POST",
				url: "dbcontactus.php",
				data: { 
					name: $("#cname").val(), 
					email: $("#cemail").val(), 
					comment: $("#comment").val()
				}
			})

			.done(function( html ) {
				$("#hiddenContactUsDiv").html( html );
			});
		} else {
			$("#hiddenContactUsDiv").html( "<span class='warningText'>You must complete all fields highlighted in red.</span>" );
			return;
		}
	});
	
	$("#jdlittle").click(function(){
		if ($(this).is(":checked")) {
			$("#jdLittlePartner").show();
		} else {
			$("#jdLittlePartner").hide();
		}
	});
	
	$("#ruark").click(function(){
		if ($(this).is(":checked")) {
			$("#wfRuarkPartner").show();
		} else {
			$("#wfRuarkPartner").hide();
		}
	});
	
	//event for when submiting the competition entry form
	$("#submitCompetitionEntryForm").click(function(){
		var returnFlag=0;
		
		if (!$("#name").val()) {
			$("#entrantName").addClass("has-error");
			returnFlag=1;
		}	

		if (!$("#email").val()) {
			$("#entrantEmail").addClass("has-error");
			returnFlag=1;
		}		
				
		if ($("#jdlittle").is(":checked")) {
			if (!$("#jdlittlepartnerinput").val()) {
				$("#jdLittlePartner").addClass("has-error");
				returnFlag=1;
			}
		}
		
		if ($("#ruark").is(":checked")) {
			if (!$("#ruarkpartnerinput").val()) {
				$("#wfRuarkPartner").addClass("has-error");
				returnFlag=1;
			}
		}
		
		compArray = new Array (
			'watson',
			'tsb',
			'robertson',
			'bruce',
			'jdlittle',
			'ruark'
		);
		
		weHaveOneComp = false;
		
		for (x in compArray) {
			if ($("#"+compArray[x]).is(":checked")) {
				weHaveOneComp = 1;
			}
		}

		//if the return flag has been set then exit out
		if (returnFlag == 1) {
			$("#hiddenCompetitionEntryForm").html( "<span class='warningText'>You must complete all fields highlighted in red.</span>" );
			return;
		} else if (!weHaveOneComp) {
			$("#hiddenCompetitionEntryForm").html( "<span class='warningText'>You must select at least one competition to enter.</span>" );
			return;
		} else { //if not then we have values so proceed!!!
		
			$("#submitCompetitionEntryForm").hide();
			$("#hiddenCompetitionEntryForm").html( "<img src='ajax-loader.gif' alt='image loader' /> Submitting form....");	
		
			$.ajax({
				type: "POST",
				url: "dbcompentry.php",
				data: { 
					name: $("#name").val(), 
					email: $("#email").val(), 
					watson: $("#watson").is(":checked"), 
					tsb: $("#tsb").is(":checked"), 
					robertson: $("#robertson").is(":checked"),
					bruce: $("#bruce").is(":checked"),
					jdlittle: $("#jdlittle").is(":checked"),
					jdlittlepartnerinput: $("#jdlittlepartnerinput").val(),
					ruark: $("#ruark").is(":checked"),
					ruarkpartnerinput: $("#ruarkpartnerinput").val()
				}
			})
			
			.done(function( html ) {
				$("#hiddenCompetitionEntryForm").html( html );				
			});
		}
	});
	
	$("#ruarkpartnerinput").change(function(){
		if ($(this).val()) {
			$("#wfRuarkPartner").removeClass("has-error");
		}
	});
	
	$("#name").change(function(){
		if ($(this).val()) {
			$("#entrantName").removeClass("has-error");
		}
	});
	
	$("#email").change(function(){
		if ($(this).val()) {
			$("#entrantEmail").removeClass("has-error");
		}
	});
	
	$("#jdlittlepartnerinput").change(function(){
		if ($(this).val()) {
			$("#jdLittlePartner").removeClass("has-error");
		}
	});
	
	$("#cname").change(function(){
		if ($(this).val()) {
			$("#contactName").removeClass("has-error");
		}
	});
	
	$("#cemail").change(function(){
		if ($(this).val()) {
			$("#contactEmail").removeClass("has-error");
		}
	});
	
	$("#comment").change(function(){
		if ($(this).val()) {
			$("#contactComment").removeClass("has-error");
		}
	});
	
	
	$("#submitJoinUsButton").click(function() {
		mandValues = new Array (
			'joinName',
			'joinEmail',
			'joinAddress',
			'joinPhone',
			'joinDob',
			'joinPrevClubs',
			'joinProposerName',
			'joinSeconderName'
		);
		
		returnFlag = false;
		
		for (x in mandValues) {
			if (!$("#"+mandValues[x]+"Input").val()) {
				$("#"+mandValues[x]+"InputLabel").addClass("has-error");
				returnFlag = 1;
			}
		}
		
		if (returnFlag == 1) {
			$("#hiddenJoinUsDiv").html( "<span class='warningText'>You must complete all fields highlighted in red.</span>" );
			return;
		} else {
			var str = $( "#joinUsForm" ).serialize();
		
			$("#submitJoinUsButton").hide();
			$("#hiddenJoinUsDiv").html( "<img src='ajax-loader.gif' alt='image loader' /> Submitting form....");
			
			$.ajax({
				type: "POST",
				url: "dbjoinus.php",
				data: str
			})
			
			.done(function( html ) {
				$("#hiddenJoinUsDiv").html( html );				
			});
		}
	});
	
	$("#joinNameInput, #joinEmailInput, #joinAddressInput, #joinPhoneInput, #joinDobInput, #joinPrevClubsInput, #joinProposerNameInput, #joinSeconderNameInput").change(function(){
		if ($(this).val()) {
			id = $(this).attr("id");
			$("#"+id+"Label").removeClass("has-error");
		}
	});
});
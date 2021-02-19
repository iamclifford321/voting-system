$(document).ready(function(){
	var positionIsOkay = false;

	
	// display additional Edit modals
	$(document).on('click', '.modal-btnEdit', function(){
		var modalToShow = $(this).attr('custom-data-target');
		$(modalToShow).slideDown();
		$('.coversAllEdit').fadeIn();

	});
	// close addition modals
	$(document).on('click','.custom-close', function(){

		$('.custom-modalEdit').slideUp();
		$('.coversAllEdit').fadeOut();
	});

	// display select range (minimum & maximum)
	$('#typeEdit').on('change',function(){

		if ($(this).val() == 'multi') {
			$('.limitSelect').slideDown();
		}else{
			$('.limitSelect').slideUp();
		}
	});


		//check minimum and maximum value	
	$('[name=minimumEdit],[name=maximumEdit]').on('change',function(){

		if ( $('[name=minimumEdit]').val() != '' && $('[name=maximumEdit]').val() != '' ) {
			
			if ( $('[name=minimumEdit]').val() != 0 && $('[name=maximumEdit]').val() != 0 ) {
				$(this).css('border-color','#a94442')
				if ( parseFloat($('[name=minimumEdit]').val()) <= parseFloat($('[name=maximumEdit]').val()) ) {

					$('[name=minimumEdit],[name=maximumEdit]').css('border-color','#4cae4c')
					positionIsOkay = true;

				}else{
					positionIsOkay = false;
					swal({
		    		    position: 'top',
		    		    type: 'warning',
		    		    title: 'Minimum value should be less or equal to Maximum value!',
		    		    showConfirmButton: true,
		    		    timer: 3500
		    		});
		    		$('[name=minimumEdit],[name=maximumEdit]').css('border-color','#a94442')
				}
			}else{
				positionIsOkay = false;
				swal({
	    		    position: 'top',
	    		    type: 'warning',
	    		    title: 'Value must be greater than 0!',
	    		    showConfirmButton: true,
	    		    timer: 3500
	    		});

				$('[name=minimumEdit],[name=maximumEdit]').css('border-color','#a94442')	    		
			}
			
		}else{
			positionIsOkay = false;
		}
	});
	// check min and max if it has value on blur
	$('[name=minimumEdit],[name=maximumEdit]').on('blur',function(){
		if ($(this).val() == '') {
			$(this).css('border-color','#a94442')
		}
	});


	// party list click function
	$('[name=partylistbtnEdit]').on('click',function(){


		if ( $('#partyNameEdit').val() == '' ) {
			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});
			$( '#partyNameEdit' ).css( 'border-color','#a94442' );
		}else{

			$.ajax({
				url : 'ui/php_files/additional.php',
				method : 'POST',
				data : {
					partyName : $('#partyNameEdit').val(),
					additionName : 'partyList'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('partyList');
						$('.custom-modalEdit').slideUp();
						$('.coversAllEdit').fadeOut();
					}
				}
			})

		}
	});








	// position click function
	$('[name=positiontbtnEdit]').on('click', function(){
		
		if ( $('#positionNameEdit').val() != '' && $('#typeEdit').val() == 'single' ) {
				$.ajax({
					url : 'ui/php_files/additional.php',
					method : 'POST',
					data : {
						position : $('#positionNameEdit').val(),
						type : $('#type').val(),
						max : 0,
						min : 0,
						WhoCan : $('[name=WhoCan]').val(),
						additionName : 'position'
					},
					success : function(response){
						if (response == 'success') {
							getTheAdditional('position');
							$('.custom-modalEdit').slideUp();
							$('.coversAllEdit').fadeOut();
						}
					}
				})

		}else if( $('#positionNameEdit').val() != '' && $('#typeEdit').val() == 'multi' ){
			// multi select
			if ( positionIsOkay == true ) {
				$.ajax({
					url : 'ui/php_files/additional.php',
					method : 'POST',
					data : {
						position : $('#positionNameEdit').val(),
						type : $('#typeEdit').val(),
						max : $('[name=maximumEdit]').val(),
						min : $('[name=minimumEdit]').val(),
						WhoCan : $('[name=WhoCan]').val(),
						additionName : 'position'
					},
					success : function(response){
						if (response == 'success') {
							getTheAdditional('position');
							$('.custom-modalEdit').slideUp();
							$('.coversAllEdit').fadeOut();
						}
					}
				})
			}else{
				swal({
	    		    position: 'top',
	    		    type: 'warning',
	    		    title: 'Complete the given fields',
	    		    showConfirmButton: true,
	    		    timer: 3500
	    		});
	    		$('[name=minimumEdit],[name=maximumEdit]').css('border-color','#a94442')
			}


		}else{
			if ( positionIsOkay == false ) {
				$('[name=minimumEdit],[name=maximumEdit]').css('border-color','#a94442')
			}
			$( '#positionNameEdit' ).css( 'border-color','#a94442' );
				swal({
	    		    position: 'top',
	    		    type: 'warning',
	    		    title: 'Complete the given fields',
	    		    showConfirmButton: true,
	    		    timer: 3500
	    		});
		}
	});


	// room
	$('#saveRoomOrSectionEdit').on('click', function(){
		if ( $('#RoomOrSectionValEdit').val() == '' ) {
			$( '#RoomOrSectionValEdit' ).css( 'border-color','#a94442' );
			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});	
		}else{
			$.ajax({
				url : 'ui/php_files/additional.php',
				method : 'POST',
				data : {
					RoomOrSectionName : $('#RoomOrSectionValEdit').val(),
					additionName : 'roomOrSection'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('roomOrSection');
						$('.custom-modalEdit').slideUp();
						$('.coversAllEdit').fadeOut();
					}
				}
			})
		}
	});


	// major
	$('[name=btnmajorEdit]').on('click', function(){
		
		if ( $('[name=input_majorEdit]').val() == '' ) {
			$( '[name=input_majorEdit]' ).css( 'border-color','#a94442' );
			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});	
		}else{
			$.ajax({
				url : 'ui/php_files/additional.php',
				method : 'POST',
				data : {
					majorName : $('[name=input_majorEdit]').val(),
					additionName : 'major'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('major');
						$('.custom-modalEdit').slideUp();
						$('.coversAllEdit').fadeOut();
					}
				}
			})
		}
	});

// btn course
	$('[name=btncourseEdit]').on('click', function(){
		if ( $('[name=input_courseEdit]').val() == '' ) {
			$( '[name=input_courseEdit]' ).css( 'border-color','#a94442' );
			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});	
		}else{
			$.ajax({
				url : 'ui/php_files/additional.php',
				method : 'POST',
				data : {
					courseName : $('[name=input_courseEdit]').val(),
					additionName : 'course'
				},
				success : function(response){
					if (response == 'success') {
						getTheAdditional('course');
						$('.custom-modalEdit').slideUp();
						$('.coversAllEdit').fadeOut();
					}
				}
			})
		}
	});

//yearlevel
	$('[name=btnyearLevelEdit]').on('click', function(){
		if ( $('[name=input_yearLevelEdit]').val() == '' ) {
			$( '[name=input_yearLevelEdit]' ).css( 'border-color','#a94442' );
			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});	
		}else{
			$.ajax({
				url : 'ui/php_files/additional.php',
				method : 'POST',
				data : {
					yearLevelName : $('[name=input_yearLevelEdit]').val(),
					additionName : 'yearLevel'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('yearLevel');
						$('.custom-modalEdit').slideUp();
						$('.coversAllEdit').fadeOut();
					}
				}
			})
		}	
	});








	// addition getter function
	function getTheAdditional( additionTitle ){

		$('div.coversAllEdit div.custom-modalEdit div.modal-dialog div.modal-content div.modal-body div.box-body div.form-group input.form-control').val('');
		$('div.coversAllEdit div.custom-modalEdit div.modal-dialog div.modal-content div.modal-body div.box-body div.form-group input.form-control').css('border', '1px solid #ccc');
		$.ajax({
			url : 'ui/php_files/additionalGetter.php',
			method : 'POST',
			data : {
				additionTitle : additionTitle
			},
			success : function(response){
				if (additionTitle == 'position') { $('#positionEdit').html( response ); }
				else if (additionTitle == 'partyList') { $('#partylistEdit').html( response ); }
				else if (additionTitle == 'roomOrSection') { $('#roomOrSectionEdit').html( response ); }
				else if (additionTitle == 'yearLevel') { $('#yearLevelEdit').html( response ); }
				else if (additionTitle == 'course') { $('#courseEdit').html( response ); }
				else if (additionTitle == 'major') { $('#majorEdit').html( response ); }

			}
		})
	}


	// update candidate event
	var nForcan = 0;
	$('#saveCandidatesEdit').on('click',function(){

		if ($('[name=identificationEdit]').val() == 'senior') {
			
			if ($('#firstNameEdit').val() == '' ||
			 $('#middleNameEdit').val() == '' ||
			  $('#ageEdit').val() == '' ||
			   $('#sexEdit').val() == '' ||
			    $('#lastNameEdit').val() == '' ||
			     $('#datepickerEdit').val() == '' ||
			      $('#GradeOrYearEdit').val() == '' ||
			       $('#strandEdit').val() == '' ||
			        $('#partylistEdit').val() == null ||
			         $('#positionEdit').val() == null ||
			          $('#roomOrSectionEdit').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});	
			}else{
				$(this).attr('data-dismiss','modal')
				updateCandidate();
			}		

		}else if($('[name=identificationEdit]').val() == 'college'){
			
			if ($('#firstNameEdit').val() == '' ||
			 $('#middleNameEdit').val() == '' ||
			  $('#ageEdit').val() == '' ||
			   $('#sexEdit').val() == '' ||
			    $('#lastNameEdit').val() == '' ||
			     $('#datepickerEdit').val() == '' ||
			      $('#partylistEdit').val() == null ||
			       $('#positionEdit').val() == null ||
			        $('#yearLevelEdit').val() == null ||
			         $('#courseEdit').val() == null ||
			          $('#majorEdit').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});	
			}else{
				$(this).attr('data-dismiss','modal')
				updateCandidate();
			}	
		}else{
	
			if ($('#firstNameEdit').val() == '' ||
			 $('#middleNameEdit').val() == '' ||
			  $('#ageEdit').val() == '' ||
			   $('#sexEdit').val() == '' ||
			    $('#lastNameEdit').val() == '' ||
			     $('#datepickerEdit').val() == '' ||
			      $('#GradeOrYearEdit').val() == '' ||
			       $('#partylistEdit').val() == null ||
			        $('#positionEdit').val() == null ||
			         $('#roomOrSectionEdit').val() == null ) {
					

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});	
			}else{
				$(this).attr('data-dismiss','modal')
				updateCandidate();
			}	
		}
		$('body').css('paddingRight', '0px')

	})

	function updateCandidate(){

		$.ajax({
			url : 'ui/php_files/updateData.php',
			method : 'POST',
			data : {
				id : $('[name=idForCan]').val(),
				type : 'candidate',
				firstName : $('#firstNameEdit').val(),
				middleName : $('#middleNameEdit').val(),
				age : $('#ageEdit').val(),
				sex : $('#sexEdit').val(),
				lastName : $('#lastNameEdit').val(),
				url : $('#urlEdit').val(),
				datepicker : $('#datepickerEdit').val(),
				partylist : $('#partylistEdit').val(),
				position : $('#positionEdit').val(),
				yearLevel : $('#yearLevelEdit').val(),
				course : $('#courseEdit').val(),
				major : $('#majorEdit').val(),
				GradeOrYear : $('#GradeOrYearEdit').val(),
				roomOrSection : $('#roomOrSectionEdit').val(),
				strand : $('#strandEdit').val()
			},
			success : function(response){
				
				if (response == 'success') {
					getAllCandidates();
					nForcan ++;
				    if (nForcan == 2) {
				    	location.reload();
				    }else{
						swal({
						    position: 'top',
						    type: 'success',
						    title: 'Candidate Updated',
						    showConfirmButton: true,
						    timer: 3500
						});	
				    }
					

					$('#saveCandidatesEdit').attr('data-dismiss','');
				}
			}
		})
	};

	// get allcandidates list
	function getAllCandidates(){

		$.ajax({
			url : 'ui/php_files/candidateGetter.php',
			method : 'POST',
			data : {
				// additionTitle : additionTitle
				electionIdHandler : $("#electionIdHandler").attr('span-value')
			},
			success : function(response){
				
				$('#candidatesTable').html(response);
			}
		})
	}




		// Edit event
		var n = 0;
	$('#saveStudentsEdit').on('click', function(){
		

		if ($('[name=identificationEdit]').val() == 'college') {
			
			if ( $('#firstNameEdit').val() == '' ||
			 $('#middleNameEdit').val() == '' ||
			 $('#lastNameEdit').val() == '' ||
			 $('#yearLevelEdit').val() == null ||
			 $('#courseEdit').val() == null ||
			 $('#majorEdit').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});

			}else{
				$(this).attr('data-dismiss','modal')
				updateStudent();
			}

		}else if( $('[name=identificationEdit]').val() == 'senior' ){
		
			if ( $('#firstNameEdit').val() == '' ||
			 $('#middleNameEdit').val() == '' ||
			 $('#lastNameEdit').val() == '' ||
			 $('#GradeOrYearEdit').val() == '' ||
			 $('#strandEdit').val() == '' ||
			 $('#roomOrSectionEdit').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});

			}else{
				$(this).attr('data-dismiss','modal')
				updateStudent();
			}

		}else{

			if ( $('#firstNameEdit').val() == '' ||
			 $('#middleNameEdit').val() == '' ||
			 $('#lastNameEdit').val() == '' ||
			 $('#GradeOrYearEdit').val() == '' ||
			 $('#roomOrSectionEdit').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});

			}else{
				$(this).attr('data-dismiss','modal')
				updateStudent();
			}

		}
	});

// Edit funtion
	function updateStudent(){
				$.ajax({
			url : 'ui/php_files/updateData.php',
			method : 'POST',
			data : {
				id : $('[name=idForCan]').val(),
				type : 'student',
				firstName : $('#firstNameEdit').val(),
				middleName : $('#middleNameEdit').val(),
				lastName : $('#lastNameEdit').val(),
				yearLevel : $('#yearLevelEdit').val(),
				course : $('#courseEdit').val(),
				major : $('#majorEdit').val(),
				GradeOrYear : $('#GradeOrYearEdit').val(),
				roomOrSection : $('#roomOrSectionEdit').val(),
				strand : $('#strandEdit').val()
			},
			success : function(response){
				

				if (response == 'success') {
				    n ++;
				    if (n == 2) {
						swal({

						    position: 'top',
						    type: 'success',
						    title: 'Candidate updated',
						    showConfirmButton: true,
						    timer: 3500

						});
										    	
				    }else{
						swal({

						    position: 'top',
						    type: 'success',
						    title: 'Candidate updated',
						    showConfirmButton: true,
						    timer: 3500

						});
				    }
					$('input.form-control').val('');
					getAllStudent();
					
					$('#saveStudentsEdit').attr('data-dismiss','');
				}
			}
		})
	}

		// student getter
	function getAllStudent(){
		$.ajax({
			url : 'ui/php_files/studentGetter.php',
			method : 'POST',
			data : {
				// additionTitle : additionTitle
				electionIdHandler : $("#electionIdHandler").attr('span-value')
			},
			success : function(response){
				
				$('#studentsTable').html(response);
			}
		})
	}
})
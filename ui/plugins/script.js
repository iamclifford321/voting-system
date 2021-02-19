$(document).ready(function(){
	// variables

	var positionIsOkay = false;
	var fieldsIsOkay = false;
	// getTheAdditional functions
	getTheAdditional('partyList');
	getTheAdditional('position');
	getTheAdditional('roomOrSection');
	getTheAdditional('major');
	getTheAdditional('course');
	getTheAdditional('yearLevel');
	getAllCandidates();
	getAllStudent();
	electionData();
	getAllElectionLists();
	getAllUsers();
	// display additional modals
	$(document).on('click', '.modal-btn', function(){
		var modalToShow = $(this).attr('custom-data-target');
		$(modalToShow).slideDown();
		$('.coversAll').fadeIn();
	});
	// close addition modals
	$(document).on('click','.custom-close', function(){

		$('.custom-modal').slideUp();
		$('.coversAll').fadeOut();
	});

	// display select range (minimum & maximum)
	$('#type').on('change',function(){

		if ($(this).val() == 'multi') {
			$('.limitSelect').slideDown();
		}else{
			$('.limitSelect').slideUp();
		}
	});

	//check minimum and maximum value
	$('[name=minimum],[name=maximum]').on('change',function(){

		if ( $('[name=minimum]').val() != '' && $('[name=maximum]').val() != '' ) {

			if ( $('[name=minimum]').val() != 0 && $('[name=maximum]').val() != 0 ) {
				$(this).css('border-color','#a94442')
				if ( parseFloat($('[name=minimum]').val()) <= parseFloat($('[name=maximum]').val()) ) {

					$('[name=minimum],[name=maximum]').css('border-color','#4cae4c')
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
		    		$('[name=minimum],[name=maximum]').css('border-color','#a94442')
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

				$('[name=minimum],[name=maximum]').css('border-color','#a94442')
			}

		}else{
			positionIsOkay = false;
		}
	})

	// check min and max if it has value on blur
	$('[name=minimum],[name=maximum]').on('blur',function(){
		if ($(this).val() == '') {
			$(this).css('border-color','#a94442')
		}
	});

	// party list click function
	$('[name=partylistbtn]').on('click',function(){


		if ( $('#partyName').val() == '' ) {
			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});
			$( '#partyName' ).css( 'border-color','#a94442' );
		}else{

			$.ajax({
				url : 'ui/php_files/additional.php',
				method : 'POST',
				data : {
					partyName : $('#partyName').val(),
					additionName : 'partyList'
				},
				success : function(response){
					if (response == 'success') {
						getTheAdditional('partyList');
						$('.custom-modal').slideUp();
						$('.coversAll').fadeOut();
					}
				}
			})

		}
	});

	// position click function
	$('[name=positiontbtn]').on('click', function(){

		if ( $('#positionName').val() != '' && $('#type').val() == 'single' ) {
				$.ajax({
					url : 'ui/php_files/additional.php',
					method : 'POST',
					data : {
						position : $('#positionName').val(),
						type : $('#type').val(),
						max : 0,
						min : 0,
						WhoCan : $('[name=WhoCan]').val(),
						additionName : 'position'
					},
					success : function(response){

						if (response == 'success') {
							getTheAdditional('position');
							$('.custom-modal').slideUp();
							$('.coversAll').fadeOut();
						}
					}
				})

		}else if( $('#positionName').val() != '' && $('#type').val() == 'multi' ){
			// multi select
			if ( positionIsOkay == true ) {
				$.ajax({
					url : 'ui/php_files/additional.php',
					method : 'POST',
					data : {
						position : $('#positionName').val(),
						type : $('#type').val(),
						max : $('[name=maximum]').val(),
						min : $('[name=minimum]').val(),
						WhoCan : $('[name=WhoCan]').val(),
						additionName : 'position'
					},
					success : function(response){

						if (response == 'success') {
							getTheAdditional('position');
							$('.custom-modal').slideUp();
							$('.coversAll').fadeOut();
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
	    		$('[name=minimum],[name=maximum]').css('border-color','#a94442')
			}


		}else{
			if ( positionIsOkay == false ) {
				$('[name=minimum],[name=maximum]').css('border-color','#a94442')
			}
			$( '#positionName' ).css( 'border-color','#a94442' );
				swal({
	    		    position: 'top',
	    		    type: 'warning',
	    		    title: 'Complete the given fields',
	    		    showConfirmButton: true,
	    		    timer: 3500
	    		});
		}
	});


	$('#saveRoomOrSection').on('click', function(){
		if ( $('#RoomOrSectionVal').val() == '' ) {
			$( '#RoomOrSectionVal' ).css( 'border-color','#a94442' );
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
					RoomOrSectionName : $('#RoomOrSectionVal').val(),
					additionName : 'roomOrSection'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('roomOrSection');
						$('.custom-modal').slideUp();
						$('.coversAll').fadeOut();
					}
				}
			})
		}
	});



	$('[name=btnmajor]').on('click', function(){

		if ( $('[name=input_major]').val() == '' ) {
			$( '[name=input_major]' ).css( 'border-color','#a94442' );
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
					majorName : $('[name=input_major]').val(),
					additionName : 'major'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('major');
						$('.custom-modal').slideUp();
						$('.coversAll').fadeOut();
					}
				}
			})
		}
	});


	$('[name=btncourse]').on('click', function(){
		if ( $('[name=input_course]').val() == '' ) {
			$( '[name=input_course]' ).css( 'border-color','#a94442' );
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
					courseName : $('[name=input_course]').val(),
					additionName : 'course'
				},
				success : function(response){
					if (response == 'success') {
						getTheAdditional('course');
						$('.custom-modal').slideUp();
						$('.coversAll').fadeOut();
					}
				}
			})
		}
	});
	$('[name=btnyearLevel]').on('click', function(){
		if ( $('[name=input_yearLevel]').val() == '' ) {
			$( '[name=input_yearLevel]' ).css( 'border-color','#a94442' );
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
					yearLevelName : $('[name=input_yearLevel]').val(),
					additionName : 'yearLevel'
				},
				success : function(response){

					if (response == 'success') {
						getTheAdditional('yearLevel');
						$('.custom-modal').slideUp();
						$('.coversAll').fadeOut();
					}
				}
			})
		}
	});

	// addition getter function
	function getTheAdditional( additionTitle ){

		$('div.coversAll div.custom-modal div.modal-dialog div.modal-content div.modal-body div.box-body div.form-group input.form-control').val('');
		$('div.coversAll div.custom-modal div.modal-dialog div.modal-content div.modal-body div.box-body div.form-group input.form-control').css('border', '1px solid #ccc');
		$.ajax({
			url : 'ui/php_files/additionalGetter.php',
			method : 'POST',
			data : {
				additionTitle : additionTitle
			},
			success : function(response){
				if (additionTitle == 'position') { $('#position').html( response ); }
				else if (additionTitle == 'partyList') { $('#partylist').html( response ); }
				else if (additionTitle == 'roomOrSection') { $('#roomOrSection').html( response ); }
				else if (additionTitle == 'yearLevel') { $('#yearLevel').html( response ); }
				else if (additionTitle == 'course') { $('#course').html( response ); }
				else if (additionTitle == 'major') { $('#major').html( response ); }

			}
		})
	}




	// save candidate event
	$('#saveCandidates').on('click',function(){
		if ($('[name=identification]').val() == 'senior') {

			if ($('#firstName').val() == '' || $('#middleName').val() == '' || $('#age').val() == '' || $('#sex').val() == '' || $('#lastName').val() == '' || $('#datepicker').val() == '' || $('#GradeOrYear').val() == '' || $('#strand').val() == '' || $('#partylist').val() == null || $('#position').val() == null || $('#roomOrSection').val() == null ) {
				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});
			}else{
				$(this).attr('data-dismiss','modal')

				sumbitCandidate();
			}

		}else if($('[name=identification]').val() == 'college'){
			if ($('#firstName').val() == '' || $('#middleName').val() == '' || $('#age').val() == '' || $('#sex').val() == '' || $('#lastName').val() == '' || $('#datepicker').val() == '' || $('#partylist').val() == null || $('#position').val() == null || $('#yearLevel').val() == null || $('#course').val() == null || $('#major').val() == null ) {
				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});
			}else{
				$(this).attr('data-dismiss','modal')
				sumbitCandidate();
			}
		}else{
			if ($('#firstName').val() == '' || $('#middleName').val() == '' || $('#age').val() == '' || $('#sex').val() == '' || $('#lastName').val() == '' || $('#datepicker').val() == '' || $('#GradeOrYear').val() == '' || $('#partylist').val() == null || $('#position').val() == null || $('#roomOrSection').val() == null ) {
				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});
			}else{
				$(this).attr('data-dismiss','modal')
				sumbitCandidate();
			}
		}
		$('body').css('paddingRight', '0px')

	})

	function sumbitCandidate(){

		$('div.candidateAll div.custom-modal div.modal-dialog div.modal-content div.modal-body div.box-body div.form-group input.form-control').css('border', '1px solid #ccc');
		$.ajax({
			url : 'ui/php_files/submit.php',
			method : 'POST',
			data : {
				type : 'candidate',
				firstName : $('#firstName').val(),
				middleName : $('#middleName').val(),
				age : $('#age').val(),
				sex : $('#sex').val(),
				lastName : $('#lastName').val(),
				url : $('#url').val(),
				datepicker : $('#datepicker').val(),
				partylist : $('#partylist').val(),
				position : $('#position').val(),
				yearLevel : $('#yearLevel').val(),
				course : $('#course').val(),
				major : $('#major').val(),
				GradeOrYear : $('#GradeOrYear').val(),
				roomOrSection : $('#roomOrSection').val(),
				strand : $('#strand').val()
			},
			success : function(response){
				$('input.form-control').val('');

				if (response == 'success') {
					if ($('#saveCandidates').attr('data-dismiss') == 'modal') {
						$('#saveCandidates').attr('data-dismiss','');
					}else{
						$('#saveCandidates').attr('data-dismiss','modal');
					}
					getAllCandidates();
					swal({
					    position: 'top',
					    type: 'success',
					    title: 'Candidate Registered',
					    showConfirmButton: true,
					    timer: 3500
					});
					$('#saveCandidates').removeClass('data-dismiss');
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

		// get Election list
	function getAllElectionLists(){

		$.ajax({
			url : 'ui/php_files/electionGetter.php',
			method : 'POST',
			data : {
				// additionTitle : additionTitle
				userIdHandler : $("#userIdHandler").attr('span-value'),
				electionIdHandler : $("#electionIdHandler").attr('span-value')
			},
			success : function(response){
				$('#ElectionTable').html(response);
			}
		})
	}



	$(document).on('click','.deleteStudent', function(){
		var studId = $(this).attr('studId');
		// var confirmation = confirm('Do you want to delete this ?')
		swal({
		    position: 'top',
		    type: 'warning',
		    title: 'Are You Sure?',
		    text : "You won't be able to undo this",
		    showCancelButton: true,

		}).then((result) => {
			if (result.value) {

				$.ajax({
					url : 'ui/php_files/deleteAny.php',
					method : 'POST',
					data : {
						id : studId,
						toBeDeleted : 'student'
					},
					success : function(response){

						getAllStudent();
					}
				})
				Swal.fire(
					'Deleted',
					'Data has been deleted',
					'success'
					)
			}
		});


	});

	$(document).on('click','.deleteCandidate', function(){
		var canId = $(this).attr('canId');
		// var confirmation = confirm('Do you want to delete this ?')
		swal({
		    position: 'top',
		    type: 'warning',
		    title: 'Are You Sure?',
		    text : "You won't be able to undo this",
		    showCancelButton: true,

		}).then((result) => {
			if (result.value) {

				$.ajax({
					url : 'ui/php_files/deleteAny.php',
					method : 'POST',
					data : {
						id : canId,
						toBeDeleted : 'candidate'
					},
					success : function(response){
						getAllCandidates();
					}
				})
				Swal.fire(
					'Deleted',
					'Data has been deleted',
					'success'
					)
			}
		});


	});

	$(document).on('click', '.editCandidate', function(){
		var identification = $('#electionFor').attr('span-value');
		var canId = $(this).attr('canId');
		$.ajax({
			url : 'ui/php_files/candidateUpdateTemplate.php',
			method : 'POST',
			data : {
				id : canId,
				identification : identification
			},
			success : function(response){

				$('#edit-modal-candidate').html(response);
			}

		})
	});

	//
	// //
	// ///
	// ////
	// ///// Student
	// /////
	// ////
	// //
	//

	$('#saveStudents').on('click', function(){
		if ($('[name=identification]').val() == 'college') {

			if ( $('#firstName').val() == '' ||
			 $('#middleName').val() == '' ||
			 $('#lastName').val() == '' ||
			 $('#yearLevel').val() == null ||
			 $('#course').val() == null ||
			 $('#major').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});

			}else{
				$(this).attr('data-dismiss','modal')
				submitStudent();
			}

		}else if( $('[name=identification]').val() == 'senior' ){

			if ( $('#firstName').val() == '' ||
			 $('#middleName').val() == '' ||
			 $('#lastName').val() == '' ||
			 $('#GradeOrYear').val() == '' ||
			 $('#strand').val() == '' ||
			 $('#roomOrSection').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});

			}else{
				$(this).attr('data-dismiss','modal')
				submitStudent();
			}

		}else{

			if ( $('#firstName').val() == '' ||
			 $('#middleName').val() == '' ||
			 $('#lastName').val() == '' ||
			 $('#GradeOrYear').val() == '' ||
			 $('#roomOrSection').val() == null ) {

				swal({
				    position: 'top',
				    type: 'warning',
				    title: 'Complete the given fields',
				    showConfirmButton: true,
				    timer: 3500
				});

			}else{
				$(this).attr('data-dismiss','modal')
				submitStudent();
			}

		}
	})

	function submitStudent(){
				$.ajax({
			url : 'ui/php_files/submit.php',
			method : 'POST',
			data : {
				type : 'student',
				firstName : $('#firstName').val(),
				middleName : $('#middleName').val(),
				lastName : $('#lastName').val(),
				yearLevel : $('#yearLevel').val(),
				course : $('#course').val(),
				major : $('#major').val(),
				GradeOrYear : $('#GradeOrYear').val(),
				roomOrSection : $('#roomOrSection').val(),
				strand : $('#strand').val()
			},
			success : function(response){

				if (response == 'success') {

					$('input.form-control').val('');
					getAllStudent();
					swal({

					    position: 'top',
					    type: 'success',
					    title: 'Candidate Registered',
					    showConfirmButton: true,
					    timer: 3500

					});
					$('#saveStudents').attr('data-dismiss','');
					$('#saveStudents').removeClass('data-dismiss');

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

	$(document).on('click', '.editStudent', function(){

		var identification = $('#electionFor').attr('span-value');
		var studId = $(this).attr('studId');

		$.ajax({
			url : 'ui/php_files/studentUpdateTemplate.php',
			method : 'POST',
			data : {
				id : studId,
				identification : identification
			},
			success : function(response){
				$('#edit-modal-student').html(response);
			}

		})
	});

	//inputs in sign in
	// $('input.inputsSign').on( 'blur', function() {
	// 	if ($(this).val() == '') {
	// 		$(this).css('border','1px solid rgb(169, 68, 66)');
	// 		$('#' + $(this).attr('id') + 'Empty').fadeIn();
	// 	}else{
	// 		$(this).css('border','1px solid #ccc');
	// 		$('#' + $(this).attr('id') + 'Empty').fadeOut();
	// 		$('#' + $(this).attr('id') + 'NotEmpty').fadeOut();

	// 	}
	// });


	// password input
	$('#password, #confirmPass').on('blur', function(){
		if ($('#password').val() == '' || $('#confirmPass').val() == '') {
			$('#password, #confirmPass').css('border', '1px solid #ccc')
			$('#passwordNotEmpty, #confirmPassNotEmpty').fadeOut();
			$('#passwordEmpty, #confirmPassEmpty').fadeOut();


			}else{

			if ( $('#password').val() == $('#confirmPass').val() ) {

				$('#password, #confirmPass').css('border', '1px solid rgb(76, 174, 76)')
				$('#passwordEmpty, #confirmPassEmpty').fadeOut();
				$('#passwordNotEmpty, #confirmPassNotEmpty').fadeIn();
			}else{

				$('#password, #confirmPass').css('border', '1px solid rgb(169, 68, 66)')
				$('#passwordEmpty, #confirmPassEmpty').fadeIn();
				$('#passwordNotEmpty, #confirmPassNotEmpty').fadeOut();

			}
		}
	})

	// save users

	$(document).on('click', '#saveUser', function(){
		console.log('Here');
		var inputCount = 1;
		while( inputCount < 6){

			if ($('.inputs' + inputCount).val() == '') {
				$('#' + $('.inputs' + inputCount).attr('id') + 'Empty').fadeIn();
				$('#' + $('.inputs' + inputCount).attr('id')).css('border','1px solid rgb(169, 68, 66)');


			}
			else{

				$('#' + $('.inputs' + inputCount).attr('id') + 'Empty').fadeOut();
				$('#' + $('.inputs' + inputCount).attr('id')).css('border','1px solid #ccc');

			}
			inputCount ++;
		}
		submitUser();
	})

	function submitUser(){

		if ($('.inputs6').val() == '' ||
		 $('.inputs1').val() == '' ||
		  $('.inputs2').val() == '' ||
		   $('.inputs3').val() == '' ||
		    $('.inputs4').val() == '' ||
		     $('.inputs5').val() == '')
		{

			if ($('#password').val() != $('#confirmPass').val()) {

				$('#password, #confirmPass').css('border', '1px solid rgb(169, 68, 66)')
				$('#passwordEmpty, #confirmPassEmpty').fadeIn();
				$('#passwordNotEmpty, #confirmPassNotEmpty').fadeOut();
			}

			swal({
    		    position: 'top',
    		    type: 'warning',
    		    title: 'Complete the given fields',
    		    showConfirmButton: true,
    		    timer: 3500
    		});
		}
		else
		{

			if ($('#password').val() == $('#confirmPass').val()) {
				$('#password, #confirmPass').css('border', '1px solid rgb(76, 174, 76)')
				$('#passwordEmpty, #confirmPassEmpty').fadeOut();
				$('#passwordNotEmpty, #confirmPassNotEmpty').fadeIn();

				$.ajax({
					url : 'ui/php_files/submit.php',
					method : 'POST',
					data : {
						type : 'user',
						firstName : $('#firstName').val(),
						lastName : $('#lastName').val(),
						password : $('#password').val(),
						email : $('#email').val(),

					},
					success : function(response){
						if (response == 'success') {
							location.href = 'electionMain.php'
						}
					}
				})
			}else{
				$('#password, #confirmPass').css('border', '1px solid rgb(169, 68, 66)')
				$('#passwordEmpty, #confirmPassEmpty').fadeIn();
				$('#passwordNotEmpty, #confirmPassNotEmpty').fadeOut();
			}


		}
	}
	// $('.deleteSelected').on('click', function(){

	// 	var count = 1;
	// 	var arrData = [];
	// 	var hiddenCount = $('.hiddenCount').attr('spanValue');
	// 	while( count <= hiddenCount ){
	// 		console.log('.checkboxDeleteStud' + count)
	// 		if ( $('.checkboxDeleteStud' + count).is(true) ) {
	// 			arrData.push( $('.checkboxDeleteStud' + count).val());
	// 			console.log('naa')
	// 		}
	// 		count ++;
	// 	}

	// 	console.log( $('.checkboxDeleteStud' + count) )


	// })




	// login
	$("#logIn").on('click',function(){
		$.ajax({
			url : 'ui/php_files/login.php',
			method : 'POST',
			data : {
				type : 'user',
				userLog : $('#userLog').val(),
				passwordLog : $('#passwordLog').val(),

			},
			success : function(response){



				if (response == 'password') {
					$('#emailEmpty').fadeOut();
					$('#passwordEmpty').fadeIn();
					$('#passwordLog').css('border-color','maroon')
					$('#userLog').css('border-color','#ccc')
				}
				else if(response == 'username'){
					$('#emailEmpty').fadeIn();
					$('#passwordEmpty').fadeOut();
					$('#passwordLog').css('border-color','#ccc')
					$('#userLog').css('border-color','maroon')

				}
				else if(response == 'success'){
					location.href = 'electionMain.php'
				}else if( response == 'successSta'){
					location.href = 'AdminMainPage.php?q=students'
				}
			}
		})
	})

	$('#saveElection').on('click',function(){
		if ($('#schoolName').val() == '') {
			$('#schoolName').css('border-color','maroon');

		}else{
			$.ajax({
					url : 'ui/php_files/submit.php',
					method : 'POST',
					data : {
						type : 'election',
						schoolName : $('#schoolName').val(),
						electionFor : $('#electionFor').val()
					},
					success : function(response){

						if (response == 'success') {

							location.href = 'AdminMainPage.php?q=overall';
						}
					}
				})
		}
	})

	$(document).on('click', '.visitElection', function(){

		$.ajax({

			url : 'ui/php_files/setter.php',
			method : 'POST',
			data : {
				type : 'election',
				setId : $(this).attr('data-id'),
				dataName : $(this).attr('data-name'),
				dataType : $(this).attr('data-type')
			},
			success : function(response){
				if (response == 'success') {
					location.href = 'AdminMainPage.php?q=overall';
				}
			}
		})
	})

	function electionData(){
		$.ajax({
			url : 'ui/php_files/electionTable.php',
			method : 'POST',
			data : {

			},
			success : function(response){
				$('.tableBodyForalection').html(response);
			}
		})
	}
//delete election
	$(document).on('click', '.deleteElection', function(){
		swal({
		    position: 'top',
		    type: 'warning',
		    title: 'Are You Sure?',
		    text : "All DATA under this election will be deleted also",
		    showCancelButton: true,

		}).then((result) => {
			if (result.value) {

				$.ajax({
					url : 'ui/php_files/deleteAny.php',
					method : 'POST',
					data : {
						id : $(this).attr('data-id'),
						toBeDeleted : 'election'
					},
					success : function(response){
						if (response == 'success') {
							electionData();
							getAllElectionLists();
							Swal.fire(
								'Deleted',
								'Data has been deleted',
								'success'
								)
						}else{
							console.log(response)
						}
					}
				})
			}
		});
	})

	$('#saveElectionFrom').on('click',function(){

		if ($('#schoolName').val() == '') {
			$('#schoolName').css('border-color','maroon');

		}else{

			$(this).attr('data-dismiss','modal')
			$.ajax({
					url : 'ui/php_files/submit.php',
					method : 'POST',
					data : {
						type : 'electionFrom',
						schoolName : $('#schoolName').val(),
						electionFor : $('#electionForFrom').val()
					},
					success : function(response){
					console.log(response)

						if (response == 'success') {
							$('input.form-control').val('');
							getAllElectionLists();
							$(this).removeAttr('data-dismiss')
						}
					}
				})
		}
	})

	// Edit clicked
	$(document).on('click', '.EditElection', function(){
		$('#schoolNameEdit').val( $(this).attr('data-name') );
		$('#hiddenIdElection').val($(this).attr('data-id'));
		// electionForEdit
		$.ajax({
			url : 'ui/php_files/getElectionDetails.php',
			method : 'POST',
			data : {
				electionId : $(this).attr('data-id')
			},
			success : function(response){
				console.log(response);
				$('#electionForEdit').html(response);
			}
		})
	})

	$('#saveElectionsEdit').on('click', function(){
		if ($('#schoolNameEdit').val() == '') {
			$('#schoolNameEdit').css('border-color','maroon');

		}else{

			$(this).attr('data-dismiss','modal')
			$.ajax({
				url : 'ui/php_files/updateData.php',
				method : 'POST',
				data : {
					type : 'election',
					id : $('#hiddenIdElection').val(),
					schoolNameEdit : $('#schoolNameEdit').val(),
					electionForEdit : $('#electionForEdit').val()
				},
				success : function(response){

					if (response == 'success') {
						$(this).removeAttr('data-dismiss')
						getAllElectionLists();
					}
				}
			})

		}


	});

	function getAllUsers(){

		$.ajax({
			url : 'ui/php_files/userGetter.php',
			method : 'POST',
			data : {
				// additionTitle : additionTitle
				userIdHandler : $("#userIdHandler").attr('span-value'),
				electionIdHandler : $("#electionIdHandler").attr('span-value')
			},
			success : function(response){

				$('#userTable').html(response);
			}
		})
	}

	$('#saveUserFrom').on('click',function(){
				var inputCount = 1;
		while( inputCount < 6){

			if ($('.inputs' + inputCount).val() == '') {
				$('#' + $('.inputs' + inputCount).attr('id') + 'Empty').fadeIn();
				$('#' + $('.inputs' + inputCount).attr('id')).css('border','1px solid rgb(169, 68, 66)');


			}
			else{

				$('#' + $('.inputs' + inputCount).attr('id') + 'Empty').fadeOut();
				$('#' + $('.inputs' + inputCount).attr('id')).css('border','1px solid #ccc');

			}
			inputCount ++;
		}
		submitUserFrom();
	});
	function submitUserFrom(){

		if ($('.inputs1').val() == '' || $('.inputs3').val() == '' || $('.inputs5').val() == '') {

		}else{
			$('#saveUserFrom').attr('data-dismiss','modal')
			$.ajax({
				url : 'ui/php_files/submit.php',
				method : 'POST',
				data : {
					type : 'userFrom',
					firstName : $('#firstName').val(),
					lastName : $('#lastName').val(),
					email : $('#email').val()
				},
				success : function(response){
					if (response == 'success') {
						$('#saveUserFrom').removeAttr('data-dismiss')
						getAllUsers();
						$('input.form-control').val('');
					}
				}
			})
		}
	}
	$(document).on('click','.deleteUser', function(){


		swal({
		    position: 'top',
		    type: 'warning',
		    title: 'Are You Sure?',
		    text : "You won't be able to undo this",
		    showCancelButton: true,

		}).then((result) => {
			if (result.value) {

				$.ajax({
					url : 'ui/php_files/deleteAny.php',
					method : 'POST',
					data : {
						id : $(this).attr('data-id'),
						toBeDeleted : 'user'
					},
					success : function(response){
						getAllUsers();
					}
				})
				Swal.fire(
					'Deleted',
					'Data has been deleted',
					'success'
					)
			}
		});
	})
	$('#editInfo').on('change', function (){

		// ;

		if ($(this).prop('checked')) {

			$('div#btn-save-info').slideDown();

		}else{

			$('div#btn-save-info').slideUp();

		}

	});

	$('#saveInfo').on('click', function(){
		var i = 1;
		while( i<=4 ){
			if ( $('.texts'+i).val() == '' ) {
				$('.texts'+i).css('border-color' , 'maroon');
			}else{
				$('.texts'+i).css('border-color' , '#ccc');
			}
			i ++;
		}
		submitInfoEdit();
	});

	function submitInfoEdit(){
		if ($('.texts1').val() == '' ||
		 $('.texts2').val() == '' ||
		  $('.texts3').val() == '' ||
		  $('.texts1').val() == '' ) {


		}else{
			//submit

			$.ajax({
				url : 'ui/php_files/updateData.php',
				method : 'POST',
				data : {
					id : '',
					type : 'user',
					firstName : $('#firstName').val(),
					lastName : $('#lastName').val(),
					email : $('#email').val(),
					userName : $('#userName').val()
				},
				success: function(response){
					if (response == 'success') {
						$('.forNameUser').html($('#firstName').val() + ' ' + $('#lastName').val())
						Swal.fire(
						'UPDATED',
						'Data has been updated',
						'success'
						)
					}
				}
			})

		}
	}

	$('#savePass').on('click', function(){

		var i = 1;
		while(i <= 3 ){
			if ($('.pass' + i).val() == '') {

				$('.pass' + i).css('border-color','maroon');

			}else{
				$('.pass' + i).css('border-color','#ccc');
			}
			i ++;
		}
		submitUpdatePass();

	})
	function submitUpdatePass(){

		if ( $('.pass1').val() == '' || $('.pass2').val() == '' || $('.pass3').val() == '') {

		}else{

			$.ajax({
				url : 'ui/php_files/checker.php',
				method : 'POST',
				data : {
					type : 'password',
					passwordOld : $('#passwordOld').val(),

				},
				success: function(response){

					if (response >= 1 ) {
						if ($('#passwordNew').val() == $('#passwordCon').val()) {
							$.ajax({
								url : 'ui/php_files/updateData.php',
								method : 'POST',
								data : {
									id : '',
									type : 'userPass',
									passwordNew : $('#passwordNew').val(),

								},
								success: function(response){

									if (response == 'success') {
										$('#passwordOld').val('');
										$('#passwordNew').val('');
										$('#passwordCon').val('');
										Swal.fire(
										'UPDATED',
										'Data has been updated',
										'success'
										)
									}
								}
							})
						}else{
							$('#passwordNew').css('border-color','maroon');
							$('#passwordCon').css('border-color','maroon');
						}
					}else{
						$('#passwordOld').css('border-color','maroon');

					}
				}
			})


		}
	};

	$(document).on('click', '.theme-box', function(){
		$.ajax({
			url : 'ui/php_files/updateData.php',
			method : 'POST',
			data : {

				type : 'theme',
				ThemeName : $(this).attr('data-theme'),
				id : $('#electionIdHandler').attr('span-value')
			},
			success : function (response){
				if (response == 'success') {
					location.reload();
				}
			}
		})
	})
	$('#signOut').on('click', function(){
		$.ajax({
			url : 'ui/php_files/logout.php',
			method : 'POST',
			data : {

			},
			success :function( response ) {
				if (response == 'success') {
					location.href = 'index.php';
				}
			}
		})
	})
});

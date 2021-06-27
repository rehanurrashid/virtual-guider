// global variable
var manageTimetable;

$(document).ready(function() {
	manageTimetable = $("#manageTimetable").DataTable({
		'ajax': 'TimetableManagement/fetchUserData',
		'orders': []
	});	
});

// function addTimetableModel() 
// {
// 	$("#timetableForm")[0].reset();

// 	//remove textdanger
// 	$(".text-danger").remove();
// 	// remove form-group
// 	$(".form-group").removeClass('has-error').removeClass('has-success');

// 	$("#timetableForm").unbind('submit').bind('submit', function() {
// 		var form = $(this);

// 		// remove the text-danger
// 		$(".text-danger").remove();

// 		$.ajax({
// 			url: form.attr('action'),
// 			type: form.attr('method'),
// 			data: form.serialize(), // /converting the form data into array and sending it to server
// 			dataType: 'json',
// 			success:function(response) {
// 				if(response.success === true) {
// 					$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
// 					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 					  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
// 					'</div>');

// 					// hide the modal
// 					$("#addTimetable").modal('hide');

// 					// update the manageTimetable
// 					manageTimetable.ajax.reload(null, false); 

// 				} else {
// 					if(response.messages instanceof Object) {
// 						$.each(response.messages, function(index, value) {
// 							var id = $("#"+index);

// 							id
// 							.closest('.form-group')
// 							.removeClass('has-error')
// 							.removeClass('has-success')
// 							.addClass(value.length > 0 ? 'has-error' : 'has-success')
// 							.after(value);

// 						});
// 					} else {
// 						$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
// 						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 						  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
// 						'</div>');
// 					}
// 				}
// 			}
// 		});	

// 		return false;
// 	});

// }

// function editTimetable(id = null) 
// {
// 	if(id) {

// 		$("#editTimetableForm")[0].reset();
// 		$('.form-group').removeClass('has-error').removeClass('has-success');
// 		$('.text-danger').remove();

// 		$.ajax({
// 			url: 'TimetableManagement/getSelectedMemberInfo/'+id,
// 			type: 'post',
// 			dataType: 'json',
// 			success:function(response) {
// 				$("#edittime").val(response.t_time);

// 				// $("#editsection").val(response.t_section);

// 				// $("#editday").val(response.t_day);

// 				 $("#editcourse").val(response.t_course);

// 				//$("#editdegree").val(response.t_degree);

// 				//$("#editdepartment").val(response.t_department);

// 				//$("#editsemester").val(response.t_semester);				

// 				$("#editTimetableForm").unbind('submit').bind('submit', function() {
					
// 					var form = $(this);

// 					$.ajax({
// 						url: form.attr('action') + '/' + id,
// 						type: 'post',
// 						data: form.serialize(),
// 						dataType: 'json',
// 						success:function(response) {
// 							if(response.success === true) {
// 								$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
// 								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 								  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
// 								'</div>');

// 								// hide the modal
// 								$("#editTimetableModal").modal('hide');

// 								// update the manageTimetable
// 								manageTimetable.ajax.reload(null, false);



// 							} else {
// 								$('.text-danger').remove()
// 								if(response.messages instanceof Object) {
// 									$.each(response.messages, function(index, value) {
// 										var id = $("#"+index);

// 										id
// 										.closest('.form-group')
// 										.removeClass('has-error')
// 										.removeClass('has-success')
// 										.addClass(value.length > 0 ? 'has-error' : 'has-success')										
// 										.after(value);										

// 									});
// 								} else {
// 									$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
// 									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 									  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
// 									'</div>');
// 								}
// 							}
// 						} // /succes
// 					}); // /ajax

// 					return false;
// 				});
				
// 			}
// 		});
// 	}
// 	else {
// 		alert('error');
// 	}
// }

// function removeTimetable(id = null) 
// {
// 	if(id) {
// 		$("#removeTimeBtn").unbind('click').bind('click', function() {
// 			$.ajax({
// 				url: 'TimetableManagement/remove' + '/' + id,
// 				type: 'post',				
// 				dataType: 'json',
// 				success:function(response) {
// 					if(response.success === true) {
// 						$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
// 						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 						  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
// 						'</div>');

// 						// hide the modal
// 						$("#removeTimetableModal").modal('hide');

// 						// update the manageTimetable
// 						manageTimetable.ajax.reload(null, false); 

// 					} else {
// 						$('.text-danger').remove()
// 						if(response.messages instanceof Object) {
// 							$.each(response.messages, function(index, value) {
// 								var id = $("#"+index);

// 								id
// 								.closest('.form-group')
// 								.removeClass('has-error')
// 								.removeClass('has-success')
// 								.addClass(value.length > 0 ? 'has-error' : 'has-success')										
// 								.after(value);										

// 							});
// 						} else {
// 							$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
// 							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 							  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
// 							'</div>');
// 						}
// 					}
// 				} // /succes
// 			}); // /ajax
// 		});
// 	}
// }
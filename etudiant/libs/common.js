<$(document).ready(function(){
	/* Handling get employee */
	function get_employee() {
		$.ajax({				
			type : 'GET',
			url  : 'response.php?action=list',
			success : function(response){
				response = JSON.parse(response);
				var tr;
		      	$('#emp_body').html('');
		      	$.each(response, function( index, emp ) {
				  tr = $('<tr/>');
		            tr.append("<td>" + emp.employee_name + "</td>");
		            tr.append("<td>" + emp.employee_salary + "</td>");
		            tr.append("<td>" + emp.employee_age + "</td>");

	            	var action = "<td><div class='btn-group' data-toggle='buttons'>";
	            	action += "<a href='#' target='_blank' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#edit_model'>Edit</a>";
	            	action += "<a href='#' target='_blank' class='btn btn-danger btn-xs'>Delete</a>";
		            tr.append(action);
		            $('#emp_body').append(tr);
				});
			}
		});
	}
	
	//initialize method on load
 	function init() {
 		get_employee();
 	}
 	init();
});
$( "#btn_add" ).click(function() {
  ajaxAction('add');
});
	function ajaxAction(action) {
		data = $("#frm_"+action).serializeArray();
		$.ajax({
		  type: "POST",  
		  url: "response.php",  
		  data: data,
		  dataType: "json",       
		  success: function(response)  
		  {
			$('#msg').html('');
		  	if(response.status) {
		  		$('#'+action+'_model').modal('hide');
				$('#msg').html('<div class="alert alert-success">Successfully! added record</div>');
				get_employee();
		  	} else {
		  		$('#msg').html('<div class="alert alert-danger ">Error! to insert record</div>');	
		  	}
			
		  },
		  error: function(jqXHR, textStatus, errorThrown) {
			  $('#msg').html('<div class="alert alert-danger ">Error'+textStatus+'!'+errorThrown);
			}  
		});
	}
$(document).ready(function(){
	
	insert();
	view();
})


function insert(){

	$(document).on('click','#add_user',function(){
		var name=$('#name').val();
		var email=$('#email').val();
		
		$.ajax({
			url: 'helper.php',
			method: 'post',
			data: {user_name:name,user_email:email},
			success: function(data){
				$('#msg').html(data);
				$('#addUser').modal('show');
				$('form').trigger('reset');
				view();
			}
		})		
	})

	$(document).on('click','#btn_close',function(){
		$('#msg').html("");
	})
}


function view(){

	var temp='view';
	$.ajax({


		url: 'helper.php',
		method: 'post',
		data: {view:temp},
		success: function(data){
			
			data = $.parseJSON(data);
			if (data.status=='success') {

				$('#table').html(data.html);
			}
		}
	})
}
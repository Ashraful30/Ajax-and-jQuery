$(document).ready(function(){
	
	insert();
	view();
	edit_user();
	delete_user();
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



function edit_user(){

	$(document).on('click','#edit',function(){
		
		var id=$(this).attr('data-id');
		$.ajax({

			url: 'helper.php',
			method: 'post',
			data: {editID:id},
			dataType: 'JSON',
			success: function(data){
				
				$('#updateID').val(data[0]);
				$('#updateName').val(data[1]);
				$('#updateEmail').val(data[2]);
				$('#updateUser').modal('show');
				
			}
		})
	})


	$(document).on('click','#update_user',function(){

		var id=$('#updateID').val();
		var name=$('#updateName').val();
		var email=$('#updateEmail').val();
		
		$.ajax({
			url: 'helper.php',
			method: 'post',
			data: {update_id:id,update_name:name,update_email:email},
			success: function(data){
				
				$('#updateUser').modal('toggle');
				view();
				$('#update_conf').html(data);
			}
		})		
	})

}




function delete_user(){

	$(document).on('click','#delete',function(){
		
		var id=$(this).attr('data-id');
		$('#del_id').val(id);
		$('#deleteUser').modal('show');
		
	})


	$(document).on('click','#delete_user',function(){


		var id=$('#del_id').val();
		
		$.ajax({
			url: 'helper.php',
			method: 'post',
			data: {delete_id:id},
			success: function(data){
				
				$('#deleteUser').modal('toggle');
				view();
				$('#delete_conf').html(data);
				setTimeout(function() {
			        $(".alert").alert('close');
			    }, 10000);
			}
		})		
	})

}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.css">
	<title>Login</title>
    
</head>

	

<body>
		
	
	<div class="container-fluid">
		
		<div class="row justify-content-center mt-4 mb-4">
			<h4 class="text-warning">We are learning Ajax</h4>
		</div>

		<div class="row justify-content-center mb-4">
			<button class="text-center btn btn-primary" data-toggle="modal" data-target="#addUser">Add User</button>
		</div>
		<div class="row offset-sm-2 col-sm-8" id="update_conf"></div>
		<div class="row offset-sm-2 col-sm-8" id="delete_conf"></div>
		<div class="row offset-sm-2 col-sm-8" id="table">

			
		</div>
	</div>



	<!-- Add User Modal -->

	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" >
				<div class="modal-header" style="border: none;">
					<div class="container">
						<div class="row com-sm-12">
							<h5 class="modal-titles"><i class="fas fa-lg fa-user"></i> Add User</h5>
							<button type="button" class="close pb-4" data-dismiss="modal" >
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
				<div class="modal-body mx-3">
					<p id="msg" class="text-center text-success"></p>
					<form >
	                    <div class="form-group row">
	                        <label for="name" class="col-sm-3 col-from-label">Name</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="name" id="name" placeholder="User Name" required >
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                        <label for="email" class="col-sm-3 col-from-label">Email</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="email" id="email" placeholder="User Email" required >
	                        </div>
	                    </div>
					</form>
					<div class="modal-footer pt-4" style="border-top: none">
			        	<button type="button" class="btn btn-secondary" id="btn_close" data-dismiss="modal">Close</button>
			        	<!-- <button type="submit" name="add" id="add_user" class="btn btn-primary">Add User</button> -->
			        	<button type="button" name="add" id="add_user" class="btn btn-primary">Add User</button>
			        </div>

				</div>
				
			</div>
		</div>
	</div>


	

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>

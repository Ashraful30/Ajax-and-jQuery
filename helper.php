<?php 

	include 'db_connect.php';

	if (isset($_POST['user_name'])) {
		$name=$_POST['user_name'];
		$email=$_POST['user_email'];

		$sql="INSERT INTO user(name,email) values('$name','$email')";
		$res=mysqli_query($conn,$sql);

		if ($res) {
			echo "User info inserted successfully";
		}
		else{
			echo "Error in insertion";	
		}
	}

	if (isset($_POST['view'])) {
		
		$value="";
		$value='<table class="table table-bordered text-center">
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Email</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>';

		$sql="SELECT * FROM user";
		$res=mysqli_query($conn,$sql);

		if ($res) {
			
			while ($row=mysqli_fetch_assoc($res)) {
				
				$value.='<tr>
							<td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['email'].'</td>
							<td><button type="button" class="btn btn-primary" id="edit" data-id='.$row['id'].'><i class="fas fa-edit"></i> Edit</button></td>
							<td><button type="button" class="btn btn-danger" id="delete" data-id='.$row['id'].'><i class="far fa-trash-alt"></i> Delete</button></td>
						</tr>';
			}
			$value.='</table>';
			echo json_encode(['status'=>'success','html'=>$value]);
		}
		else{
			echo "Error in data fetch";	
		}
	}

?>

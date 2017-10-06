<?php 
	include_once 'header.php';
	include_once '../controller/select_users.php';	
 ?>
	
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		
			<?php 


				foreach ($selected_rows as $key => $user_data) 
				{
					echo '<tr>
						<td>'.$user_data['id'].'</td>
						<td>'.$user_data['username'].'</td>
						<td>'.$user_data['email'].'</td>
						<td><a href="edit_users.php"><button class="btn btn-warning">Edit</button></a>&nbsp;<a href="delete_users.php"><button class="btn btn-danger">Delete</button></a></td>
					</tr>';


			    }


			 ?>


		</tbody>
	</table>

<?php include_once 'footer.php'; ?>
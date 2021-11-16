@extends('dashboard.index')

@section('content')
<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Employee Details</h2>
		<a href="/dashboard/employee" class="float-right btn-primary btn"> Back</a>
	</div>


	<div class="card-group">
		<div class="card">

			<center>
			
				<form action="/dashboard/employee/store" method="post" enctype="multipart/form-data" >
					@csrf
					<div class="form-group">
						<div class="card-body">
							<input type="text" class="form-control col-4 " placeholder="Enter Your First Name" name="fname" required="">
							<br>
							<input type="text" class="form-control col-4" placeholder="Enter Last Name" name="lname" required="">
							<br>

							<textarea class="form-control col-4" row="2" placeholder="Company" name="company" required=""></textarea>
							<br> 
							
							<input type="text" class="form-control col-4" placeholder="Enter Email" name="email" required="">
							<br>
							<input type="text" class="form-control col-4" placeholder="Enter Phone" name="phone" required="">
							<br>
							<button class="btn submit btn-primary" type="submit">Add Employee</button>

						</div>

					</div>

				</form>
				
			</center>

		</div>
	</div>	
</div>


@endsection
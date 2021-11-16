@extends('dashboard.index')

@section('content')
<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Companie Details</h2>
		<a href="/dashboard/company" class="float-right btn-primary btn"> Back</a>
	</div>


	<div class="card-group">
		<div class="card">

			<center>
			
				<form action="/dashboard/company/store" method="post" enctype="multipart/form-data" >
					@csrf
					<div class="form-group">
						<div class="card-body">
							<input type="text" class="form-control col-4 " placeholder="Enter Company Name" name="name" required="">
							<br>
							
							<input type="text" class="form-control col-4" placeholder="Enter Phone" name="phone" required="">
							<br> 
							<input type="file" class="form-control col-4 " placeholder="Upload Logo Image" name="logo" required="">
							<br>
							<input type="text" class="form-control col-4" placeholder="Enter Email" name="email" required="">
							<br>
							<textarea class="form-control col-4" row="2" placeholder="Company Website" name="website" required=""></textarea>
							<br>
							<button class="btn submit btn-primary">Add Companie </button>

						</div>

					</div>

				</form>
				
			</center>

		</div>
	</div>	
</div>


@endsection
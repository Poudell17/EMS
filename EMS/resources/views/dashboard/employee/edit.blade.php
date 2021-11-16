@extends('dashboard.index')

@section('content')
<div class="card card-primary">	
	
	
	<h1 class="card-header">EDIT Employee<a href="/dashboard/employee" class="btn btn-primary float-right">Cancel</a>
	</h1>

	@if(Session::get('success'))                  
	<span>{{Session::get('success')}}</span>
	@endif            
	@if(Session::get('fail'))   
	<span>{{Session::get('fail')}}</span>              
	@endif       


	


	<form class="card-body" action="/employeeupdate/{{$data['id']}}"  method="post">



		@csrf
		@method('put')
		@if(Session::get('success'))
		<span>{{Session::get('success')}}</span>
		@endif
		@if(Session::get('fail'))
		<span>{{Session::get('fail')}}</span>
		@endif

		@csrf
		<div class="form-group">
			<div class="card-body">
				<input type="text" class="form-control col-4 " placeholder="Enter Your First Name" name="fname" required="" value="{{ $data['firstname'] }}">
				<br>
				<input type="text" class="form-control col-4" placeholder="Enter Last Name" name="lname" required="" value="{{ $data['lastname'] }}">
				<br>

				<textarea class="form-control col-4" row="2" placeholder="Company" name="company" required="">{{$data['companies']}}</textarea>
				<br> 

				<input type="text" class="form-control col-4" placeholder="Enter Email" name="email" required=""value="{{ $data['email'] }}">
				<br>
				<input type="text" class="form-control col-4" placeholder="Enter Phone" name="phone" required="" value="{{ $data['phone'] }}">
				<br>
				<button class="btn submit btn-primary" type="submit">Add Employee</button>

			</div>

		</div>

	</form>
</div>
</div>
@endsection
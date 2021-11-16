@extends('dashboard.index')


@section('content')

<div class="card card-primary ">
	<div class="success">
	@if(Session::get('success'))                  
		<span>{{Session::get('success')}}</span>
	@endif            
	@if(Session::get('fail'))   
		<span>{{Session::get('fail')}}</span>              
	@endif 
	</div>
	<br>
	<div class="card-header col">
		<h2>Employees</h2>
		<a href="../dashboard/employee/add" class="btn btn-primary float-right">Add New Employee</a>
	</div>


	<div class="card-body">
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					
					<th>Companie</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Action</th>
					
				</tr>
			</thead>
			@foreach($employ as $emp)
			<tbody>
					
				<tr>
					<td>{{$emp['firstname']}} </td>
					<td>{{$emp['lastname']}}</td>
					
					<td>{{$emp['companies']}}</td>
					<td>{{$emp['email']}}</td>
					<td>{{$emp['phone']}}</td>
					<td><a  class="btn btn-primary" href="../dashboard/employeeedit/{{$emp['id']}}">Edit</a>&nbsp&nbsp 
				
					<form action="/empdelete/{{$emp['id']}}" method="post">
        				@csrf
        					@method('delete')
        					<input type="submit"  value="DELETE" class="btn btn-outline-info 	btn-danger">
        			</form>
					
					</td>

				</tr>
				
			</tbody>
			@endforeach
		</table>


	</div>



</div>





@endsection
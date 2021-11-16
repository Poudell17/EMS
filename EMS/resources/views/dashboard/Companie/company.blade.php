@extends('dashboard.index')


@section('content')

<div class="card card-primary ">
	@if(Session::get('success'))                  
        <span>{{Session::get('success')}}</span>
    @endif            
    @if(Session::get('fail'))   
        <span>{{Session::get('fail')}}</span>              
    @endif
	<div class="card-header col">
		<h2>Companies</h2>
		<a href="../dashboard/company/add" class="btn btn-primary float-right">Add New Companie</a>
	</div>


	<div class="card-body">
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Companies</th>
					<th>Email</th>
					<!-- <th>Logo</th> -->
					<th>Website</th>
					<th>Phone</th>
					<th>Action</th>
					
				</tr>
			</thead>
			@foreach($comps as $com)
			<tbody>

				<tr>
					<td>{{$com['companies']}}</td>
					<td>{{$com['email']}}</td>
					<!-- <td>{{$com['logo']}}</td> -->
					<td>{{$com['website']}}</td>
					<td>{{$com['phone']}}</td>
					
					
					<td><a class="btn btn-primary" href="../dashboard/companyedit/{{$com['id']}}">Edit</a>&nbsp&nbsp

					<form action="/delete/{{$com['id']}}" method="post">
        			@csrf
        				@method('delete')
        				<input type="submit"  value="DELETE" class="btn btn-outline-info btn-danger">
        			</form>


					</td>

				</tr>

			</tbody>
			@endforeach
		</table>


	</div>



</div>





@endsection
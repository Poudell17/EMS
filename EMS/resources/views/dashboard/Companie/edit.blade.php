@extends('dashboard.index')


@section('content')

<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Edit Companies Detail</h2>
		<a href="../dashboard/company" class="btn btn-primary float-right">Cancel</a>
	</div>
	@if(Session::get('success'))                  
		<span>{{Session::get('success')}}</span>
	@endif            
	@if(Session::get('fail'))   
		<span>{{Session::get('fail')}}</span>              
	@endif       


	<div class="card-group">
		<div class="card">

			<center>
			
				
				<form action="/companyupdate/{{ $data['id'] }}" method="post" enctype="multipart" >

					@csrf
					@method('put')

					@if(Session::get('success'))
               			<span>{{Session::get('success')}}</span>
        			@endif
        			@if(Session::get('fail'))
                		<span>{{Session::get('fail')}}</span>
        			@endif

        			
        			
					<div class="form-group">
						<div class="card-body">
							<input type="text" class="form-control col-4 " placeholder="Enter Company Name" name="name" value="{{$data['companies']}}" >
							<br>
							
							<input type="text" class="form-control col-4" placeholder="Enter Phone" name="phone" required="" value="{{$data['phone']}}">
							<br> 
							<input type="text" class="form-control col-4"  name="email" required="" placeholder="Enter Email" value="{{$data['email']}}">
							<br>
							<input type="file" class="form-control col-4 " name="pic" placeholder="Upload Logo" required=""  >
							<br>
							
							<textarea class="form-control col-4" row="2"  name="website" required="" >{{$data['website']}}</textarea>
							<br>
							<button class="btn submit btn-primary">Update </button>

						</div>

					</div>
					
				</form>
				

			</center>

		</div>
	</div>



</div>





@endsection
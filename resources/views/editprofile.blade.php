 @extends('layouts.temp')

 @section('content')

 
  

 <div class="container my-5 py-5">
		<div class="main-body">
			<div class="row">
			<form method="POST" action="{{ url('update/profile') }}"  enctype="multipart/form-data">
				@csrf

				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
							<input type="file" name="avatar" id="">
 							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush w-100">
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<input type="text" class="form-contrlo" name="facebook" value="{{$tests->profile->facebook}}">

</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<input type="text" class="form-contrlo" name="youtube" value="{{$tests->profile->youtube}}">

</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<textarea class="form-contrlo" name="about" id="" cols="70" rows="10">
{{$tests->profile->about}}
</textarea>

</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8 my-5">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="name" value="{{$tests->name}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
				<input type="email" name="email" value="{{$tests->email}}">
								</div>
							</div>
					 
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="password" name="password" value="{{$tests->password}}">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
								<button type="submit" class="bg-primary text-light px-5 py-3 border border-none">update</button> 

 								</div>
							</div>
						</div>
					</div>
 					</div>
</form>
				</div>
			</div>
		</div>
	</div>



 @endsection
  </body>
</html>
 


<!-- 


<div class="container my-5 py-5">
		<div class="main-body">
			<div class="row">
				<form method="POST" action="{{ url('update/profile') }}"  enctype="multipart/form-data">
				@csrf

				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">

							<div class="d-flex flex-column align-items-center text-center">
							<input type="file" name="avatar" id="">
				
  							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush w-100">
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<input type="text" class="form-contrlo" name="facebook" value="{{$tests->profile->facebook}}">

</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<input type="text" class="form-contrlo" name="youtube" value="{{$tests->profile->youtube}}">

</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<textarea class="form-contrlo" name="about" id="" cols="70" rows="10">
{{$tests->profile->about}}
</textarea>

</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="name" value="{{$tests->name}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                  
				<input type="email" name="email" value="{{$tests->email}}">

 								</div>
							</div>
					 
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                  
								<input type="password" name="password" value="{{$tests->password}}">

 								</div>
							</div>
					 
					 
							</div>
							 
 								
							</div>
						</div>
					</div>
 					</div>
					 <button type="submit">update</button> 
					 
					 
					</form>
				</div>
			</div>
		</div>
		
	</div>
 -->
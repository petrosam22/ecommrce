 @extends('layouts.temp')

 @section('content')
  <div class="container my-5 py-5">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="{{asset($profiles->profile->avatar)}}" alt="Admin" class=" rounded-2px w-75">
 							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush w-100">
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h5>{{$profiles->profile->facebook}}</h5>

</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h5>{{$profiles->profile->youtube}}</h5>

</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h5>{{$profiles->profile->about}}</h5>

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
								<h4 class="text-dark">
									{{$profiles->name}}
</h4>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<h4 class="text-dark">
									{{$profiles->email}}
</h4>
								</div>
							</div>
					 
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Type</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<h4 class="text-dark">
									{{$profiles->tybe}}
</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<!-- <input type="button" class="btn btn-primary px-4" value="Save Changes"> -->
									<button class="btn btn-primary w-50 px-4">
									<a href="/profile/edit/{{$profiles->id}}" class="text-light text-decoration-none fs-4">Edit</a>
 									
									
									</button>
								</div>
							</div>
						</div>
					</div>
 					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

  </body>
</html>
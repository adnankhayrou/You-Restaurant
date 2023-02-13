<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>
    
    <div class="row items-center me-0">
        <h1 class="col fw-bold ms-5 mt-5">All Meals</h1>
       
        <button class="col-4 me-5 mt-5 btn btn-primary w-auto" href="#modal-meal" data-bs-toggle="modal"><b>+ </b> Add a Meal</button>
        </div>
    <div class="container pt-5 table-responsive">
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
            <!-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> -->
                

                <table class="table table-responsive bg-white rounded">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Descriptio</th>
                        <th scope="col">Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                    @foreach ($meals as $meal)
                      <tr>
                        <td>{{$count}}</td>
                        <td>{{$meal->name}}</td>
                        <td><img class="rounded" src="{{asset('/storage/'.$meal->image)}}" width="100" height="60"></td>
                        <td><span class="d-inline-block text-truncate" style="max-width: 150px;">{{$meal->description}}</span></td>
                        <td>{{$meal->date}}</td>
                        <td><a href="Edit/{{$meal->id}}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="DeleteMeal/{{$meal->id}}" class="text-decoration-none text-danger fw-bold">delete</a></td>
                      </tr>
                      
                       
                      @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                 </table> 
                
           </div>
        <!-- </div> -->
    <!-- </div> -->
<!-- add meal form -->
	<div  class="modal fade" id="modal-meal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="SaveMeal" method="POST" id="form" enctype="multipart/form-data">
                 @csrf
					<div class="modal-header">
						<h5 class="modal-title fw-bold">New Meal</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="name" class="form-control rounded" />
                                <small class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>

                            <div class="mb-3">
                                <label for="image" class="col-form-label" id="image">Image</label>
                                <input type="file" class="form-control border rounded" id="images" name="image" >
                                <small class="text-danger"> 
                                    @error('image')
                                    {{ $message }}
                                @enderror
                                </small>
                            </div>
                
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control border rounded" name="description" rows="7"></textarea>
                                <small class="text-danger">
                                    @error('description')
                                    {{ $message }}
                                @enderror
                                </small>
							</div>

                            <div class="mb-3">
								<label class="form-label">Date</label>
								<input type="date" name="date" class="form-control rounded" />
                                <small class="text-danger">
                                    @error('date')
                                    {{ $message }}
                                @enderror</small>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="/dashboard" class="btn btn-white border" >Cancel</a>
						<button type="submit" class="btn btn-primary text-light bg-primary">Add Meal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="{{ asset('js/script.js') }}"></script>
</x-app-layout>

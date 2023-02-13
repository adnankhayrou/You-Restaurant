<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="container items-center">
        <h1 class="col fw-bold mt-3 mb-2 text-center fs-2">Edit Meal</h1>
        </div>
    <!-- edit meal form -->
    <div class="container pt-3 w-50 bg-white rounded">
        <form action="EditMeal/{{$meals->id}}" method="POST" id="form" class=" pb-2" enctype="multipart/form-data">
            @csrf
               
               <div class="modal-body">
       
            <input type="hidden" name="id" >
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control rounded" value="{{$meals->name}}" required/>
                <small class="text-danger">
                    @error('name')
                    {{ $message }}
                @enderror</small>
            </div>

            <img class="rounded" src="{{asset('/storage/'.$meals->image)}}" width="100" height="50">

           <div class="mb-3">
             <label for="image" class="col-form-label" id="image">Image</label>
             <input type="file" class="form-control border rounded" id="images" name="image" required>
             <small class="text-danger">
                @error('image')
                {{ $message }}
            @enderror</small>
           </div>
           
            <div class="mb-0">
                <label class="form-label">Description</label>
                <textarea class="form-control border rounded" name="description" rows="7" >{{$meals->description}}</textarea>
                <small class="text-danger">
                    @error('description')
                    {{ $message }}
                @enderror</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control rounded" value="{{$meals->date}}" required/>
                <small class="text-danger">
                    @error('date')
                    {{ $message }}
                @enderror</small>
            </div>
                   
            </div>
            <div class="modal-footer">
                <a href="/dashboard" class="btn btn-white border" >Cancel</a>
                <button type="submit" class="btn btn-primary ms-2 text-light bg-primary">Save Change</button>
            </div>
         </form>   

           </div>
        </div>

	
</x-app-layout>
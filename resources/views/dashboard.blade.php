<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="table table-responsive">
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
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><img class="rounded" src="{{asset('images/82263.jpg')}}" width="100" height="60"></td>
                        <td>hbhcbjbdbdhhdbhch</td>
                        <td>12/34/2023 14:12:46</td>
                        <td><a href="" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td><img class="rounded" src="{{asset('images/85305.jpg')}}" width="100" height="60"></td>
                        <td>hbhcbjbdbdhhdbhch</td>
                        <td>12/34/2023 14:12:46</td>
                        <td><a href="" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td><img class="rounded" src="{{asset('images/265693.png')}}" width="100" height="60"></td>
                        <td>hbhcbjbdbdhhdbhch</td>
                        <td>12/34/2023 14:12:46</td>
                        <td><a href="" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Bird</td>
                        <td><img class="rounded" src="{{asset('images/521718.jpg')}}" width="100" height="60"></td>
                        <td>hbhcbjbdbdhhdbhch</td>
                        <td>12/34/2023 14:12:46</td>
                        <td><a href="" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                      </tr>
                    </tbody>
                  {{-- </table> --}}
                
            </div>
        </div>
    </div>
</x-app-layout>

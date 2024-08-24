<x-teacher-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form class="row g-3" action="{{ route('teacher.ashish') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname"
                                placeholder="Full Name">
                        </div>
                        <div class="col-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="adderss"
                                placeholder="1234 Main St">
                        </div>
                        <div class="col-6">
                            <label for="phone" class="form-label">Phone </label>
                            <input type="number" class="form-control" name="phone" id="phone"
                                placeholder="+977 1234567890">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="City Name">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="number" class="form-control" name="zip_code" id="inputZip"
                                placeholder="00000">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Full Name</th>
                            <th scope="col" class="text-center">Address</th>
                            <th scope="col" class="text-center">Phone</th>
                            <th scope="col" class="text-center">Zip</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($teacher)
                            <!-- Check if teacher data is available -->
                            <tr>
                                <td class="text-center">{{ $teacher->fullname }}</td>
                                <td class="text-center">{{ $teacher->address }}</td>
                                <td class="text-center">{{ $teacher->phone }}</td>
                                <td class="text-center">{{ $teacher->zip_code }}</td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No data available</td>
                            </tr>
                        @endif
                    </tbody>
                </table>



                </table>


            </div>
        </div>
    </div>
</div>



  


</x-teacher-app-layout>

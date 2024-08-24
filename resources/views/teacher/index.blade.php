

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
                            <th scope="col" class="text-center">City</th>
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
                                <td class="text-center">{{ $teacher->city }}</td>
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

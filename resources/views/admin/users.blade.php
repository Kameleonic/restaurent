<x-app-layout>

</x-app-layout>

<head>

    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')
        <div class="mx-auto dataTables_wrapper w-1/2 my-10">
            <table class="bg-gray-700 rounded-md dataTable shadow-md text-center">

                <tr class="thead">
                    <th class="p-3 border-b-3 border-gray-300">Name</th>
                    <th class="p-3 border-b-3 border-gray-300">Email</th>
                    <th class="p-3 border-b-3 border-gray-300">Action</th>
                </tr>
                @foreach ($data as $data)
                    <tr class="text-center">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        @if ($data->usertype == '0')
                            <td><a href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                        @else
                            <td><a class="text-danger">Not Allowed</a></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    <!-- container-scroller -->
    @include('admin.adminscripts')


</body>

</html>

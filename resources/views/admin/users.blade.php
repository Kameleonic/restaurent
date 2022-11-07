<x-portal-layout>

</x-portal-layout>

<head>

    @include('admin.admincss')
</head>

<body>
    @include('admin.navbar')

    <div class="container-scroller">
        <div class="page ml">
            <div class="relative rounded-lg top-60 p-5 right-[-60px]">
                <table class="bg-gray-400 text-center">

                    <tr>
                        <th class="p-3 border-b-2 border-gray-700">Name</th>
                        <th class="p-3 border-b-2 border-gray-700">Email</th>
                        <th class="p-3 border-b-2 border-gray-700">Action</th>
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
    </div>
    <!-- container-scroller -->
    @include('admin.adminscripts')


</body>

</html>

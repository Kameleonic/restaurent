<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

{{-- Styling --}}

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <!-- main-panel ends -->
        <div style="position: relative; top: 60px; right: -150px;">
            <form action="{{ url('/create-menu-item') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-control">
                    <label for="">Image</label>
                    <input style="color:slategrey" type="file" name="image">
                </div>
                <div class="form-control">
                    <label for="">Title</label>
                    <input style="color:slategrey" type="text" name="title" placeholder="Start typing...">
                </div>
                <div class="form-control">
                    <label for="">Description</label>
                    <input style="color:slategrey" type="text" name="description"
                        placeholder="Enter a description...">
                </div>
                <div class="form-control">
                    <label for="">Price</label>
                    <input style="color:slategrey" type="num" name="price" placeholder="Enter a price...">
                </div>
                <div>
                    <input type="submit" class="btn" value="Save">
                </div>
            </form>

            <div>
                <table class="bg-black border text-xl border-white rounded-lg">
                    <tr>
                        <th class="p-4 border-b-2 border-white">Food Item</th>
                        <th class="p-4 border-b-2 border-white">Price</th>
                        <th class="p-4 border-b-2 border-white">Description</th>
                        <th class="p-4 border-b-2 border-white">Image</th>
                        <th class="p-4 border-b-2 border-white">Actions</th>
                    </tr>
                    @foreach ($data as $data)
                        <tr class="mx-4">
                            <td class="my-1 text-lg">{{ $data->title }}</td>
                            <td class="my-1 text-lg">{{ $data->price }}</td>
                            <td class="my-1 text-lg">{{ $data->description }}</td>
                            <td class="my-1 text-lg"><img class="w-10 h-10 rounded-full m-auto"
                                    src="/foodimage/{{ $data->image }}"></td>
                            <td class="my-1 text-lg">
                                <a href="{{ url('/edit-item', $data->id) }}">Edit</a>/
                                <a href="{{ url('/delete-menu-item', $data->id) }}">Delete</a>
                            </td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

</html>

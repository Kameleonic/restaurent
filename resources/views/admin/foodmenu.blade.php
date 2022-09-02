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
            <div class="modal fade" id="addMenuItemModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                data-bs-backdrop="static" aria-hidden="true">
                <div class="modal-dialog border-2 border-accent rounded">
                    <div class="modal-content">
                        <div class="bg-ui-dark">


                            <div class="p-2 text-right">
                                <button class="close" data-bs-dismiss="modal">&#10006;
                                </button>
                            </div>



                            <form class="form" action="{{ url('/create-menu-item') }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf

                                <div class="flex bg-accent-fade p-3 flex-col justify-center">
                                    <div class="flex flex-col my-2">

                                    </div>
                                    <div class="align-items-center flex flex-row my-2">
                                        <label for="image"></label>
                                        <input class="" style="color:slategrey" type="file" name="image">
                                        <span class="text-lg text-ui-dark" for="price">£</span>
                                        <input class="rounded-md ml-1 text-gray-800" type="number" name="price"
                                            placeholder="Price" step="0.01">
                                    </div>
                                    <div class="flex flex-col my-2">
                                        <label for="title"></label>
                                        <input class="rounded-md text-gray-800 " type="text" name="title"
                                            placeholder="Title">
                                    </div>
                                    <div class="flex flex-col my-2">
                                        <label for="description"></label>
                                        <textarea class="text-gray-800 rounded-md" maxlength="200" placeholder="Enter a description..." name="description"></textarea>
                                    </div>

                                </div>
                                <div class="flex justify-center">
                                    <div class="my-2">
                                        <input type="submit" class="btn btn-accent" value="Save">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="btn btn-accent transition duration-150" data-bs-toggle="modal"
                    data-bs-target="#addMenuItemModal">
                    <i class="bi-plus-circle me-2"></i> Add
                </a>
            </div>

            <div>
                <table id="menu_items" class="dataTable bg-ui-dark text-white text-lg rounded-lg shadow">
                    <thead class=" border-b-2 border-white">
                        <th class="p-4 border-b-2 border-white">Food Item</th>
                        <th class="p-4 border-b-2 border-white">Price</th>
                        <th class="p-4 border-b-2 border-white">Description</th>
                        <th class="p-4 border-b-2 border-white">Image</th>
                        <th class="p-4 border-b-2 border-white">Actions</th>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

</html>

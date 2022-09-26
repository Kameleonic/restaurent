<x-app-layout>

</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>
    @include('admin.navbar')



    <!-- BEGIN - Add Food Item Modal -->
    <div class="modal fade" id="addMenuItemModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog border-2 border-accent rounded">
            <div class="modal-content">
                <div class="bg-slate-800">

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
    <!-- END- Add Food Item Modal -->


    <!-- main-panel ends -->
    <div class="page ml">
        <div class="my-20 mx-10">
            <div class="flex flex-col">
                <div class="flex-1">
                    <div
                        class="flex flex-row justify-between border-t-2 mb-0 border-l-2 border-r-2 bg-accent border-accent rounded-t-md pl-4 pt-3 pr-3">
                        <div class="text-xxl font-bold mt-1 mx-2  text-white">Food Items Menu
                        </div>
                        <div class="flex gap-1 text-sm space-y-1">
                            <div style="padding-top: 2px; padding-bottom: 2px;"
                                class="mr-3 flex px-1 rounded-md align-items-center border-2 lg:w-[110px] justify-content-center border-blue-300 shadow-md font-semibold bg-slate-600">
                                <a href="#" class="" data-bs-toggle="modal"
                                    data-bs-target="#addMenuItemModal">
                                    <x-lucide-plus-square class="h-5 w-5 text-white" />
                                </a>
                                <div>Add Item</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-2 border-accent bg-accent rounded-b p-4">
                        <div
                            class="flex flex-1 flex-col justify-between bg-ui-dark-glow rounded border border-slate-300 text-ui-dark">



                            <table id="foodItemsTable" class="bg-ui-dark-glow text-white text-lg rounded-lg shadow">

                                <thead class="border-b-2 bg-slate-800 border-accentfade">
                                    <th class="py-4 border-b-2 font-bold pl-2">
                                        <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Food Item</div>
                                    </th>
                                    <th class="py-4 border-b-2 font-bold pl-2">
                                        <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Price</div>
                                    </th>
                                    <th class="py-4 border-b-2 font-bold pl-2">
                                        <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Description
                                        </div>
                                    </th>
                                    <th class="py-4 border-b-2 font-bold pl-2">
                                        <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Image</div>
                                    </th>
                                    <th class="py-4 border-b-2 font-bold pl-2">
                                        <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Actions</div>
                                    </th>
                                </thead>
                                <tbody>

                                    @foreach ($data as $data)
                                        <tr class="mx-4">
                                            <td class="trow my-1 text-lg">{{ $data->title }}</td>
                                            <td class="trow my-1 text-lg">{{ $data->price }}</td>
                                            <td class="trow my-1 text-lg">{{ $data->description }}</td>
                                            <td class="trow my-1 text-lg"><img class="w-10 h-10 rounded-full m-auto"
                                                    src="/foodimage/{{ $data->image }}"></td>
                                            <td class="trow my-1 text-lg">
                                                <a href="{{ url('/edit-item', $data->id) }}">Edit</a>/
                                                <a href="{{ url('/delete-menu-item', $data->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

</html>

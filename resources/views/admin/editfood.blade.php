<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

{{-- Styling --}}
<style>

</style>

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <!-- main-panel ends -->
        <div class="">

            <form enctype="multipart/form-data" action="{{ url('/update', $data->id) }}"
                class="mt-10 mx-auto border-2 border-accent rounded-xl" method="POST">

                @csrf

                <div class="flex flex-col font-weight-bold text-white text-center text-lg bg-accent rounded-t-lg">
                    <label class="underline">Current Image</label>
                    <img class="m-3 align-self-center h-32 w-32 rounded-lg" src="/foodimage/{{ $data->image }}">
                </div>
                <div class="flex flex-col bg-accent-fade">
                    <div class="mt-2 file-input">
                        <input type="file" name="image" id="image" class="font-semibold file">
                        <label class="mx-auto" for="image">Upload..</label>
                    </div>
                    <div class="align-self-end py-2 px-2">
                        <label class="font-semibold text-gray-800" for="price">Price</label> <br>
                        <span class="text-gray-800 font-semibold">£</span>
                        <input step="0.01" class="form-input w-16" style="color:slategrey" type="number"
                            name="price" value="{{ $data->price }}">
                    </div>
                    <div class="py-2 px-2">
                        <label class="font-semibold text-gray-800" for="title">Title</label> <br>
                        <input class="form-input" style="color:slategrey" type="text" name="title"
                            value="{{ $data->title }}">
                    </div>
                    <div class="py-2 px-2">
                        <label class="font-semibold text-gray-800" for="description">Description</label> <br>
                        <input class="form-input" style="color:slategrey" type="text" name="description"
                            value="{{ $data->description }}">
                    </div>

                </div>
                <div class="flex flex-row px-2 py-1 justify-content-evenly bg-accent rounded-b-lg">
                    <a href="{{ url('/foodmenu') }}" class="btn btn-accent transition duration-300">Cancel
                    </a>
                    <button type="submit" class="btn btn-accent transition duration-300">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- container-scroller -->
    @include('admin.adminscripts')

</body>

</html>

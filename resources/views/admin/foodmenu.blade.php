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
            <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">

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
        </div>
    </div>

    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

</html>

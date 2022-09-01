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
    </div>
    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

</html>

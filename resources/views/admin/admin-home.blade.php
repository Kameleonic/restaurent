<x-portal-layout>

</x-portal-layout>

<!DOCTYPE html>
<html lang="en">

{{-- Styling --}}

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="flex flex-row">
        @include('admin.navbar')
        <!-- main-panel ends -->
        @include('admin.dashboard')
    </div>
    <div class="flex flex-row">

    </div>
    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

</html>

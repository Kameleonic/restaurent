<div style="background-color: #fb5849;"
    class="min-h-screen flex flex-col bg-gray-200 shadow-lg left-content sm:justify-center items-center pt-6 sm:pt-0 ">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-lg overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

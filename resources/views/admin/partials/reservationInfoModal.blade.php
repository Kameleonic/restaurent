<x-app-layout>

</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>



    <div class="container-scroller">
        @include('admin.navbar')
        <!-- main-panel ends -->
        <!-- Modal -->

        <div class="mx-auto w-3/4 pl-lg-3" style="position: relative; top: 60px;">
            <div class="flex flex-col">
                <div class="flex-1">
                    <div
                        class="flex flex-row justify-between border-t-2 border-l-2 border-r-2 bg-accent border-accent rounded-t-md p-3">
                        <div class="text-2xl font-bold mt-1 mb-3 underline text-white">Reservation information.
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="flex border-2 border-accent bg-accent-fade rounded-b p-4">
                        <div
                            class="flex flex-1 flex-col justify-between bg-slate-200 rounded border border-slate-300 text-ui-dark p-2 text-center">

                            <div class="flex flex-col mx-auto font-normal text-ui-dark">
                                <div class="flex flex-row gap-4">
                                    <div class="flex flex-col"><label class="mt-2 mb-1" for="">Customer
                                            Name:</label>
                                        <div class="p-2 border border-accent-fade my-2 text-lg rounded-md">
                                            {{ $reservation->name }}
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="mt-2 mb-1" for="">Email Address:</label>
                                        <div class="p-2 border border-accent-fade my-2 text-lg rounded-md">
                                            {{ $reservation->email }}
                                        </div>
                                    </div>
                                </div>

                                <label class="mt-2 mb-1" for="">Contact Number:</label>
                                <div class="p-2 border border-accent-fade my-2 text-lg rounded-md">
                                    {{ $reservation->phone }}
                                </div>
                                <label class="mt-2 mb-1" for="">Date Requested:</label>
                                <div class="p-2 border border-accent-fade my-2 text-lg rounded-md">
                                    {{ $reservation->date }}
                                </div>
                                <label class="mt-2 mb-1" for="">Time Requested:</label>
                                <div class="p-2 border border-accent-fade my-2 text-lg rounded-md">
                                    {{ $reservation->time }}
                                </div>
                                <label class="mt-2 mb-1" for="">Reservation Notes:</label>
                                <div class="p-2 border border-accent-fade my-2 text-lg rounded-md">
                                    {{ $reservation->message }}
                                </div>

                            </div>

                            <div class="text-sm">Date
                                Created:{{ $reservation->created_at }}</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.adminscripts')
</body>

</html>

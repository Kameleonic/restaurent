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
                        class="flex flex-row justify-between border-t-2 mb-0 border-l-2 border-r-2 bg-accent border-accent rounded-t-md pl-4 pt-3">
                        <div class="text-xl font-bold mt-1 mx-2  text-white">Reservation information.
                        </div>
                        <div class="bg-slate-200 rounded-lg shadow-md">
                            @if (is_null($reservation->confirmed))
                                <div class="flex gap-1 text-blue-500 text-sm">
                                    Awaiting
                                    <x-lucide-megaphone class="w-4 text-white" />
                                </div>
                            @elseif ($reservation->confirmed == true)
                                <div class="flex gap-1 text-green-500 text-sm">Confirmed
                                    <x-lucide-check class="w-4 text-white" />
                                </div>
                            @elseif ($reservation->confirmed == 'declined')
                                <div class="flex gap-1 text-red-500 text-sm">Declined
                                    <x-lucide-x class="w-4 text-white" />
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="flex border-2 border-accent bg-accent rounded-b p-4">
                        <div
                            class="flex flex-1 flex-col justify-between bg-ui-dark-glow rounded border border-slate-300 text-ui-dark p-2 text-center">

                            <div
                                class="flex lg:flex-row sm:flex-col sm:justify-center lg:justify-content-start gap-5 font-normal text-ui-dark">
                                <div class="flex flex-col mx-4 lg:w-1/3">
                                    <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg"
                                        for="">Customer
                                        Name:</label>
                                    <div class="border input-blank border-accent-fade text-lg rounded-md">
                                        {{ $reservation->first_name . ', ' . $reservation->last_name }}
                                    </div>

                                    <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg" for="">Email
                                        Address:
                                    </label>
                                    <div class="border input-blank border-accent-fade text-lg rounded-md">
                                        {{ $reservation->email }}
                                    </div>
                                    <div class="flex flex-row gap-1 justify-between">
                                        <div class="flex flex-col flex-1">
                                            <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg"
                                                for="">Contact
                                                Number:</label>
                                            <div class="border input-blank border-accent-fade text-lg rounded-md">
                                                {{ $reservation->phone }}
                                            </div>
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg"
                                                for="">No. of Guests:</label>
                                            <div class="border input-blank border-accent-fade text-lg rounded-md">
                                                {{ $reservation->guest_count }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-row gap-1 justify-between">
                                        <div class="flex flex-col flex-1">
                                            <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg"
                                                for="">Date
                                                Requested:</label>
                                            <div class="border input-blank border-accent-fade text-lg rounded-md">
                                                {{ $reservation->date }}
                                            </div>

                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg"
                                                for="">Time
                                                Requested:</label>
                                            <div class="border input-blank border-accent-fade text-lg rounded-md">
                                                {{ $reservation->time }}
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="flex flex-col flex-1 justify-between mx-4">
                                    <div class="flex flex-col">
                                        <label class="mt-2 mb-1 text-slate-200 font-semibold text-lg"
                                            for="">Reservation
                                            Notes:</label>
                                        <div class="border textarea-blank border-accent-fade text-lg rounded-md">
                                            {{ $reservation->message }}
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mb-2">
                                        <a class="btn button btn-accent">Decline</a>
                                        <a href="{{ url('confirm-reservation', $reservation->id) }}"
                                            class="btn btn-accent">Confirm</a>

                                    </div>
                                </div>


                            </div>
                            <div class="flex flex-row justify-content-around">
                                <div class="text-sm text-white font-monospace">Date
                                    Created:{{ $reservation->created_at }}</div>
                                <div class="flex flex-col text-sm text-white font-monospace">

                                    <div>
                                        Updated At:{{ $reservation->updated_at }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.adminscripts')
</body>

</html>

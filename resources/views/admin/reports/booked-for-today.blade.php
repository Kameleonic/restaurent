<x-app-layout>

</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>
    @include('admin.navbar')


    <div class="page ml">
        <div class="mx-10">
            <div class="flex mt-4">
                <form action="{{ url('/reservations') }}">
                    @csrf
                    @method('post')
                    <button type="submit" class="btn btn-accent">
                        < Back </button>
                </form>
            </div>
            <div class="my-20">
                <div class="flex flex-col">
                    <div class="flex-1 ">
                        <div
                            class="flex flex-row justify-between border-t-2 mb-0 border-l-2 border-r-2 bg-accent border-accent rounded-t-md pl-4 pt-3">
                            <div class="text-xxl font-bold mt-1 mx-2  text-white">Reservations booked for today.
                            </div>
                            <button type="button" class="mr-5 text-white hover:text-white-50" data-bs-toggle="modal"
                                data-bs-target="#modelId" aria-label="Close">
                                <x-lucide-settings style="height: 28px; width: 28px;" class="" />
                            </button>
                        </div>


                        <div class="flex flex-col border-2 border-accent bg-accent rounded-b p-4">
                            <div
                                class="flex flex-1 flex-col justify-between bg-ui-darkGlow rounded border border-slate-300 text-ui-dark">
                                <table id="reservationsBookedForToday"
                                    class="bg-ui-dark-glow border-4 border-slate-800 rounded-lg shadow text-lg text-white">

                                    <thead class=" border-b-2 bg-slate-800 border-accentfade">
                                        <th class="border-b-2 font-bold pl-2">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">First Name</div>
                                        </th>
                                        <th class="border-b-2  font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">No. of Guests</div>
                                        </th>
                                        <th class="border-b-2 font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Date</div>
                                        </th>
                                        <th class="border-b-2 font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Time</div>
                                        </th>
                                        {{-- <th class="border-b-2 font-bold border-accentfade">
                                        <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Status</div>
                                    </th> --}}
                                        <th class="border-b-2 font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Allergies</div>
                                        </th>
                                        <th class="border-b-2 font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Actions</div>
                                        </th>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $r)
                                            <tr class="mx-4">
                                                <td class="trow my-1 text-lg p-2">{{ $r->first_name }}</td>
                                                <td class="trow my-1 text-lg ">{{ $r->guest_count }}</td>
                                                <td class="trow my-1 text-lg">
                                                    {{ $r->date }}
                                                </td>
                                                <td class="trow my-1 text-lg">
                                                    {{ $r->time }}
                                                </td>
                                                {{-- <td class="trow my-1 text-lg">
                                                @if (is_null($reservation->confirmed))
                                                    <div class="flex gap-1 text-blue-400 text-xs ">
                                                        <div style="padding-top: 2px; padding-bottom: 2px;"
                                                            class="flex px-1 rounded-md border-2 lg:w-[110px] justify-content-center border-blue-300 shadow-md font-semibold bg-slate-600">
                                                            Awaiting
                                                            <x-lucide-megaphone class="w-3 h-3 text-blue-400 " />
                                                        </div>
                                                    </div>
                                                @elseif ($reservation->confirmed == 'confirmed')
                                                    <div class="flex gap-1 text-green-400 text-xs">
                                                        <div style="padding-top: 2px; padding-bottom: 2px;"
                                                            class="rounded-md lg:w-[110px] border-green-300 shadow-md table-badge">
                                                            Confirmed
                                                            <x-lucide-check class="w-3 h-3 text-green-400" />
                                                        </div>
                                                    </div>
                                                @elseif ($reservation->confirmed == 'declined')
                                                    <div class="flex gap-1 text-red-400 text-xs">
                                                        <div style="padding-top: 2px; padding-bottom: 2px;"
                                                            class="flex px-1 rounded-md border-2 lg:w-[110px] justify-content-center border-red-300 shadow-md font-semibold bg-slate-600">
                                                            Declined
                                                            <x-lucide-x class="w-3 h-3 text-red-400" />
                                                        </div>
                                                @endif
                                            </td> --}}
                                                <td class="trow my-1 text-lg">
                                                    {{ $r->allergies }}
                                                </td>
                                                <td class="trow my-1 w-10 text-lg pt-2">
                                                    <div class="flex flex-row justify-content-evenly ">
                                                        <div class="mx-1">


                                                            <form class="contents" method="post"
                                                                action="{{ url('confirm-reservation', $r->id) }}">
                                                                @method('post')
                                                                @csrf
                                                                <button type="submit" class="">
                                                                    <x-lucide-check
                                                                        class="rounded-full w-5 h-5 p-1 bg-green-300 text-green-900" />
                                                            </form>
                                                        </div>
                                                        <div class="mx-1">

                                                            <form class="contents" method="post"
                                                                action="{{ url('awaiting-reservation', $r->id) }}">
                                                                @method('post')
                                                                @csrf
                                                                <button type="submit" class="">
                                                                    <x-lucide-megaphone
                                                                        class="rounded-full w-5 h-5 p-1 bg-blue-300 text-blue-900" />
                                                            </form>
                                                        </div>
                                                        <div class="mx-1">
                                                            <form class="contents" method="post"
                                                                action="{{ url('decline-reservation', $r->id) }}">
                                                                @method('post')
                                                                @csrf
                                                                <button type="submit" class="">
                                                                    <x-lucide-x
                                                                        class="rounded-full w-5 h-5 p-1 bg-red-300 text-red-900" />
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
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
    </div>


    <!-- Button trigger modal -->
    <!-- Button trigger modal -->






    <script>
        $('#reservationsBookedForToday').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>
    <!-- container-scroller -->
    @include('admin.adminscripts')
</body>

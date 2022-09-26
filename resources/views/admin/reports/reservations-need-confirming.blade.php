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
                <a href="{{ url('portal/reservations') }}">
                    <button type="button" class="btn btn-accent">
                        < Back </button>
                </a>
            </div>
            <div class="my-20">
                <div class="flex flex-col">
                    <div class="flex-1 ">
                        <div
                            class="flex flex-row justify-between border-t-2 mb-0 border-l-2 border-r-2 bg-accent border-accent rounded-t-md pl-4 pt-3">
                            <div class="text-xxl font-bold mt-1 mx-2  text-white">Reservations need confirming
                            </div>
                            <button type="button" class="mr-5 text-white hover:text-white-50" data-bs-toggle="modal"
                                data-bs-target="#modelId" aria-label="Close">
                                <x-lucide-settings style="height: 28px; width: 28px;" class="" />
                            </button>
                        </div>


                        <div class="flex flex-col border-2 border-accent bg-accent rounded-b p-2">
                            <div
                                class="flex flex-1 flex-col justify-between bg-ui-darkGlow rounded border border-slate-300 text-ui-dark p-3">
                                <div id="needConfirmingAlert"
                                    class="justify-between transition alert alert-dark mt-2 flex flex-row gap-4 ">
                                    <div class="flex flex-col gap-2 text-lg text-slate-800 font-semibold">
                                        <div>These Reservations Need To Be
                                            Checked Before Confirming
                                            or
                                            Declining...
                                            <br>
                                        </div>
                                        <div class="font-bold">-- Checklist --</div>
                                        <div>
                                            * Date Requested
                                            <br>
                                            * Time Requested
                                            <br>
                                            * Amount of Guests
                                            <br>
                                            * Allergies - Make A Note
                                            <br>
                                        </div>
                                    </div>
                                    <div id="needConfirmingAlertCloseBtn" class="text-xl text-slate-800 font-bold">
                                        &times;</div>
                                </div>
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
                                        <th class="border-b-2 font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Allergies</div>
                                        </th>
                                        <th class="border-b-2 font-bold border-accentfade">
                                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Information</div>
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
                                                <td class="trow my-1 text-lg">
                                                    @if ($r->allergies == null)
                                                        No Allergies
                                                    @else
                                                        {{ $r->allergies }}
                                                    @endif

                                                </td>
                                                <td class="trow my-1 text-lg">
                                                    More Info!
                                                    {{-- <div class="flex flex-row justify-content-evenly ">
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
                                                    </div> --}}
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

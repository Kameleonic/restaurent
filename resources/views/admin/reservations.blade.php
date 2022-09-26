<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')

    <div class="page ml">
        <div class="mx-5 my-5">
            <div class="flex flex-row justify-content-between mb-2 text-lg font-semibold border-b-2 border-accentfade">
                <div>
                    Date: {{ \Carbon\Carbon::parse($todaysDate)->format('l, d F Y') }}
                </div>
                <div>
                    Time: {{ \Carbon\Carbon::now()->addHour()->format('H:m') }}
                </div>
            </div>


            <div class="grid grid-cols-12 p-4 gap-4 bg-slate-700/60 rounded-md shadow border-2 border-accentfade my-4">

                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow p-3">
                    <div class="card-body text-center font-semibold">
                        <div class="text-xl">
                            Total Reservations Booked
                            <br>

                        </div>
                        <div class="flex justify-center mt-2 mb-3">
                            <x-lucide-calendar class="h-8 w-8 text-center " />
                        </div>
                        <div class="flex font-bold justify-content-center align-items-end mt-2">
                            <a class="text-white no-underline" href="/portal/reports/reservations-booked-for-today">
                                <div class="flex text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                    {{ $reservationsCount }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow p-3">
                    <div class="card-body text-center font-semibold">
                        <div class="text-xl">
                            Reservations Today
                            <br>

                        </div>
                        <div class="flex justify-center mt-2 mb-3">
                            <x-lucide-calendar class="h-8 w-8 text-center " />
                        </div>
                        <div class="flex font-bold justify-content-center align-items-end mt-2">
                            <a class="text-white no-underline" href="/portal/reports/reservations-booked-for-today">
                                <div class="flex text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                    {{ $reservationsToday }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow p-3">
                    <div class="card-body text-center font-semibold">
                        <div class="text-xl">
                            Reservations Tomorrow
                            <br>

                        </div>
                        <div class="flex justify-center mt-2 mb-3">
                            <x-lucide-calendar class="h-8 w-8 text-center " />
                        </div>
                        <div class="flex font-bold justify-content-center align-items-end mt-2">
                            <a class="text-white no-underline" href="/portal/reports/reservations-booked-for-today">
                                <div class="flex text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                    {{ $reservationsTomorrow }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow p-3">
                    <div class="card-body text-center font-semibold">
                        <div class="text-xl">
                            Reservations Need Confirming
                            <br>

                        </div>
                        <div class="flex justify-center mt-2 mb-3">
                            <x-lucide-calendar class="h-8 w-8 text-center " />
                        </div>
                        <div class="flex font-bold justify-content-center align-items-end mt-2">
                            <a class="text-white no-underline" href="/portal/reports/reservations-need-confirming">
                                <div class="flex text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                    {{ $reservationsNeedConfirming }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 p-4 gap-4 bg-slate-700/60 rounded-md shadow border-2 border-accentfade my-4">

                <table id="reservationsTable"
                    class="col-span-12 bg-ui-dark/80 border-4 border-slate-800 rounded-lg shadow text-lg text-white">


                    <thead class=" border-b-2 bg-slate-800 border-accentfade">
                        <th class="border-b-2 font-bold pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Status</div>
                        </th>
                        <th class="border-b-2 font-bold pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Name</div>
                        </th>
                        <th class="border-b-2  font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Guest Count</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Date Requested</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Time Requested</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Allergies</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Actions</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">
                                Remove
                            </div>
                        </th>
                    </thead>

                    <tbody>

                        @foreach ($reservations as $r)
                            <tr class="mx-4">
                                <td class="trow my-1 text-lg p-2">
                                    @if ($r->confirmed == 'confirmed')
                                        <div class="flex">
                                            <x-lucide-circle-dot class="w-5 h-5 text-green-500" />
                                        </div>
                                    @elseif($r->confirmed == 'declined')
                                        <div class="flex">
                                            <x-lucide-circle-dot class="w-5 h-5 text-red-500" />
                                        </div>
                                    @else
                                        <div class="flex">
                                            <x-lucide-circle-dot class="w-5 h-5 text-blue-500" />
                                        </div>
                                    @endif
                                </td>
                                <td class="trow my-1 text-lg p-2">{{ $r->first_name }}</td>
                                <td class="trow my-1 text-lg ">{{ $r->guest_count }}</td>
                                <td class="trow my-1 text-lg">
                                    {{ $r->date }}
                                </td>
                                <td class="trow my-1 text-lg">
                                    {{ $r->time }}
                                </td>
                                <td class="trow my-1 text-lg">
                                    {{ $r->allergies }}
                                </td>
                                <td class="trow my-1 text-lg">
                                    View Info
                                </td>
                                <td class="trow my-1 text-lg text-center">
                                    <x-lucide-trash class="h-6 w-6 text-red-600" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @include('admin.adminscripts')

</body>

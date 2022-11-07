<x-portal-layout>
</x-portal-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')


    <div class="page ml">
        <div class="mx-5 my-5">
            <div
                class="flex flex-row align-items-baseline justify-content-between mb-2 text-lg font-semibold border-b-2 border-accentfade">
                <div class="w-1/4 text-left">
                    Date: {{ \Carbon\Carbon::parse($todaysDate)->format('l, d F Y') }}
                </div>
                <div class="text-5xl text-center">Reservations</div>
                <div class="w-1/4 text-right">
                    Time: {{ \Carbon\Carbon::now()->addHour()->format('H:m') }}
                </div>
            </div>


            <div class="dash-card rounded-md shadow border-2">

                <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-6 xl:grid-cols-12">
                    <a class="col-span-3 dash-panel transition duration-300 no-underline" href="">
                        <div class="">
                            <div class="card-body text-center font-semibold">
                                <div class="text-xl lg:text-lg xl:text-xl">
                                    Total Booked
                                    <br>

                                </div>
                                <div class="flex justify-center mt-2 mb-3">
                                    <x-lucide-calendar class="h-8 w-8 text-center " />
                                </div>
                                <div class="flex font-bold justify-content-center align-items-end mt-2">

                                    <div class="flex text-xl lg:text-lg xl:text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                        {{ $reservationsCount }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col-span-3 dash-panel transition duration-300 no-underline"
                        href="/portal/reports/reservations-booked-for-today">
                        <div class="">
                            <div class="card-body text-center font-semibold">
                                <div class="text-xl lg:text-lg xl:text-xl">
                                    Booked For Today
                                    <br>

                                </div>
                                <div class="flex justify-center mt-2 mb-3">
                                    <x-lucide-calendar class="h-8 w-8 text-center " />
                                </div>
                                <div class="flex font-bold justify-content-center align-items-end mt-2">

                                    <div class="flex text-xl lg:text-lg xl:text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                        {{ $reservationsToday }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col-span-3 dash-panel transition duration-300 no-underline"
                        href="/portal/reports/reservations-booked-for-today">
                        <div class="">
                            <div class="card-body text-center font-semibold">
                                <div class="text-xl lg:text-lg xl:text-xl">
                                    Total For Tomorrow
                                    <br>

                                </div>
                                <div class="flex justify-center mt-2 mb-3">
                                    <x-lucide-calendar class="h-8 w-8 text-center " />
                                </div>
                                <div class="flex font-bold justify-content-center align-items-end mt-2">

                                    <div class="flex text-xl lg:text-lg xl:text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                        {{ $reservationsTomorrow }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col-span-3 dash-panel transition duration-300 no-underline"
                        href="/portal/reports/reservations-need-confirming">
                        <div class="">
                            <div class="card-body text-center font-semibold">
                                <div class="text-xl lg:text-lg xl:text-xl">
                                    Need Confirming
                                    <br>

                                </div>
                                <div class="flex justify-center mt-2 mb-3">
                                    <x-lucide-calendar class="h-8 w-8 text-center " />
                                </div>
                                <div class="flex font-bold justify-content-center align-items-end mt-2">

                                    <div class="flex text-xl lg:text-lg xl:text-xl bg-ui-darkGlow px-4 py-3 rounded-md">
                                        {{ $reservationsConfirmed }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>


                </div>
            </div>
            <div class="dash-card sm:grid-cols-3 lg:grid-cols-6 xl:grid-cols-12 rounded-md shadow border-2">

                <table id="reservationsTable"
                    class="col-span-12 bg-ui-dark/80 border-4 border-slate-800 rounded-lg shadow text-lg text-white">
                    <div class="sm:col-span-1 lg:col-span-6 xl:col-span-12 text-xl font-semibold">{{ $dataTableTitle }}
                    </div>


                    <thead class=" border-b-2 bg-slate-800 border-accentfade">
                        <th class="border-b-2 font-bold pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Status</div>
                        </th>
                        <th class="border-b-2 font-bold pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Name</div>
                        </th>
                        <th class="border-b-2  font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Guest #</div>
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
                                            <x-lucide-circle-dot class="w-5 h-5 text-green-500 w-[30px]" />
                                        </div>
                                    @elseif($r->confirmed == 'declined')
                                        <div class="flex">
                                            <x-lucide-circle-dot class="w-5 h-5 text-red-500 w-[30px]" />
                                        </div>
                                    @else
                                        <div class="flex">
                                            <x-lucide-circle-dot class="w-5 h-5 text-blue-500 w-[30px]" />
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
                                    <form action="/portal/reservation/{{ $r->id }}">
                                        @method('GET')
                                        @csrf
                                        <button type="submit">
                                            View Info
                                        </button>
                                    </form>
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

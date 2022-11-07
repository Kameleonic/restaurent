<x-portal-layout>
</x-portal-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')

    <div class="page ml">
        <div class="mx-5 my-5">
            <div class="flex flex-row justify-content-between mb-4 text-lg font-semibold border-b-2 border-accentfade">
                <div>
                    Date: {{ \Carbon\Carbon::parse($todaysDate)->format('l, d F Y') }}
                </div>
                <div>
                    Time: {{ \Carbon\Carbon::now()->addHour()->format('H:m') }}
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow">
                    <div class="card-body text-center font-semibold">
                        <div class="my-2 text-xl">
                            Total Reservations Booked.
                        </div>
                        <div class="flex font-bold justify-content-center align-items-center my-2">
                            <div class="flex text-xl bg-slate-600 px-4 py-3 rounded-md">{{ $reservationsCount }}</div>

                        </div>
                    </div>
                </div>
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow p-3">
                    <div class="card-body text-center font-semibold">
                        <div class="text-xl">
                            Reservations Today.
                            <br>

                        </div>
                        <div class="flex justify-center mt-2 mb-3">
                            <x-lucide-calendar class="h-8 w-8 text-center " />
                        </div>
                        <div class="flex font-bold justify-content-center align-items-end mt-2">
                            <a class="text-white no-underline" href="/portal/reports/reservations-booked-for-today">
                                <div class="flex text-xl bg-slate-600 px-4 py-3 rounded-md">{{ $reservationsToday }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow">
                    <div class="card-body text-center font-semibold">
                        <div class="my-2 text-xl">
                            Reservations Tomorrow.
                        </div>
                        <div class="flex font-bold justify-content-center align-items-center">
                            <div class="flex text-xl bg-slate-600 px-4 py-3 rounded-md">{{ $reservationsTomorrow }}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-span-3 bg-ui-dark/80 rounded-md shadow">
                    <div class="card-body text-center font-semibold">
                        <div class="my-2 text-xl">
                            Total Confirmed Reservations.
                        </div>
                        <div class="flex font-bold justify-content-center align-items-center my-2">
                            <div class="flex text-xl bg-slate-600 px-4 py-3 rounded-md">{{ $reservationsConfirmed }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.adminscripts')
</body>

<x-app-layout>

</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Body
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.navbar')
        <!-- main-panel ends -->
        <!-- Modal -->


        <div class="mx-auto w-3/4 pl-lg-3" style="position: relative; top: 60px;">
            <div class="flex flex-col">
                <div class="flex-1">
                    <div
                        class="flex flex-row justify-between border-t-2 mb-0 border-l-2 border-r-2 bg-accent border-accent rounded-t-md pl-4 pt-3">
                        <div class="text-xl font-bold mt-1 mx-2  text-white">Reservations waiting to be confirmed.
                        </div>
                        <button type="button" class="mr-5 text-white hover:text-white-50" data-bs-toggle="modal"
                            data-bs-target="#modelId" aria-label="Close">
                            <x-lucide-settings style="height: 28px; width: 28px;" class="" />
                        </button>
                    </div>


                    <div class="flex border-2 border-accent bg-accent rounded-b p-4">
                        <div
                            class="flex flex-1 flex-col justify-between bg-ui-dark-glow rounded border border-slate-300 text-ui-dark p-2">
                            <table id="menu_items" class="bg-ui-dark-glow text-white text-lg rounded-lg shadow">

                                <thead class=" border-b-2 border-white">
                                    <th class="py-4 border-b-2 border-accent-fade pl-2">First Name</th>
                                    <th class="py-4 border-b-2 border-accent-fade">Guest No.</th>
                                    <th class="py-4 border-b-2 border-accent-fade">Date</th>
                                    <th class="py-4 border-b-2 border-accent-fade">Time</th>
                                    <th class="py-4 border-b-2 border-accent-fade">Status</th>
                                    <th class="py-4 border-b-2 border-accent-fade">More Info</th>
                                    <th class="py-4 border-b-2 border-accent-fade">Actions</th>
                                </thead>
                                <tbody>

                                    @foreach ($reservations as $reservation)
                                        <tr class="mx-4">
                                            <td class="trow my-1 text-lg p-2">{{ $reservation->first_name }}</td>
                                            <td class="trow my-1 text-lg ">{{ $reservation->guest_count }}</td>
                                            <td class="trow my-1 text-lg">
                                                {{ \Carbon\Carbon::parse($reservation->date)->format('D, d M Y') }}
                                            </td>
                                            <td class="trow my-1 text-lg">
                                                {{ \Carbon\Carbon::parse($reservation->time)->format('m:Ha') }}
                                            </td>
                                            <td class="trow my-1 text-lg">
                                                @if (is_null($reservation->confirmed))
                                                    <div class="flex gap-1 text-blue-400 text-sm ">
                                                        <div style="padding-top: 2px; padding-bottom: 2px;"
                                                            class="flex px-2 rounded-md border-2 lg:w-[110px] justify-content-center border-blue-300 shadow-md font-semibold bg-slate-600">
                                                            Awaiting
                                                            <x-lucide-megaphone class="w-5 h-5 text-blue-400 " />
                                                        </div>
                                                    </div>
                                                @elseif ($reservation->confirmed == 'confirmed')
                                                    <div class="flex gap-1 text-green-400 text-sm">
                                                        <div style="padding-top: 2px; padding-bottom: 2px;"
                                                            class="flex px-2 rounded-md border-2 lg:w-[110px] justify-content-center border-green-300 shadow-md font-semibold bg-slate-600">
                                                            Confirmed
                                                            <x-lucide-check class="w-5 h-5 text-green-400" />
                                                        </div>
                                                    </div>
                                                @elseif ($reservation->confirmed == 'declined')
                                                    <div class="flex gap-1 text-red-400 text-sm">
                                                        <div style="padding-top: 2px; padding-bottom: 2px;"
                                                            class="flex px-2 rounded-md border-2 lg:w-[110px] justify-content-center border-red-300 shadow-md font-semibold bg-slate-600">
                                                            Declined
                                                            <x-lucide-x class="w-5 h-5 text-red-400" />
                                                        </div>
                                                @endif
                                            </td>
                                            <td class="trow my-1 text-lg">

                                                <form class="contents" method="post"
                                                    action="{{ url('reservation', $reservation->id) }}">
                                                    @method('get')
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-accent py-1 align-baseline">View
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="trow my-1 w-10 text-lg pt-2">
                                                <div class="flex flex-row justify-content-evenly ">
                                                    <div class="mx-1">


                                                        <form class="contents" method="post"
                                                            action="{{ url('confirm-reservation', $reservation->id) }}">
                                                            @method('post')
                                                            @csrf
                                                            <button type="submit" class="">
                                                                <x-lucide-check
                                                                    class="rounded-full w-5 h-5 p-1 bg-green-300 text-green-900" />
                                                        </form>
                                                    </div>
                                                    <div class="mx-1">

                                                        <form class="contents" method="post"
                                                            action="{{ url('awaiting-reservation', $reservation->id) }}">
                                                            @method('post')
                                                            @csrf
                                                            <button type="submit" class="">
                                                                <x-lucide-megaphone
                                                                    class="rounded-full w-5 h-5 p-1 bg-blue-300 text-blue-900" />
                                                        </form>
                                                    </div>
                                                    <div class="mx-1">
                                                        <form class="contents" method="post"
                                                            action="{{ url('decline-reservation', $reservation->id) }}">
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

        <!-- Button trigger modal -->
        <!-- Button trigger modal -->






        <script>
            $('#viewReservationModal').on('show.bs.modal', event => {
                var button = $(event.relatedTarget);
                var modal = $(this);
                // Use above variables to manipulate the DOM

            });
        </script>
        <!-- container-scroller -->
        @include('admin.adminscripts')
</body>

</html>

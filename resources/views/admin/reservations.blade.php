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
                            class="flex flex-1 flex-col justify-between bg-ui-dark-glow rounded border border-slate-300 text-ui-dark p-2 text-center">
                            <table id="menu_items" class="bg-ui-dark-glow text-white text-lg rounded-lg shadow">

                                <thead class=" border-b-2 border-white">
                                    <th class="p-4 border-b-2 border-accent-fade">Name</th>
                                    <th class="p-4 border-b-2 border-accent-fade">Guest No.</th>
                                    <th class="p-4 border-b-2 border-accent-fade">Date</th>
                                    <th class="p-4 border-b-2 border-accent-fade">Time</th>
                                    <th class="p-4 border-b-2 border-accent-fade">More Info</th>
                                </thead>
                                <tbody>

                                    @foreach ($reservations as $reservation)
                                        <tr class="mx-4">
                                            <td class="trow my-1 text-lg">{{ $reservation->name }}</td>
                                            {{-- <td class="trow my-1 text-lg">{{ $reservations->email }}</td>
                                <td class="trow my-1 text-lg">{{ $reservations->phone }}</td> --}}
                                            <td class="trow my-1 text-lg">{{ $reservation->guest_count }}</td>
                                            <td class="trow my-1 text-lg">{{ $reservation->date }}</td>
                                            <td class="trow my-1 text-lg">{{ $reservation->time }}</td>
                                            {{-- <td class="trow my-1 text-lg">{{ $reservations->message }}</td>
                                <td class="trow my-1 text-lg">{{ $reservations->created_at }}</td>
                                <td class="trow my-1 text-lg">{{ $reservations->updated_at }}</td> --}}
                                            <td class="trow my-1 text-lg">
                                                <form class="contents" method="post"
                                                    action="{{ url('reservation', $reservation->id) }}">
                                                    @method('get')
                                                    @csrf
                                                    <button type="submit" class="btn btn-accent py-1">More Info
                                                    </button>
                                                </form>
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

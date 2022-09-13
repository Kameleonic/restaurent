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


        <div class="mx-auto" style="position: relative; top: 60px;">
            <div>
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

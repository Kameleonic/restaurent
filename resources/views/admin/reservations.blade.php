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
                <table id="menu_items" class="bg-ui-dark text-white text-lg rounded-lg shadow">

                    <thead class=" border-b-2 border-white">
                        <th class="p-4 border-b-2 border-white">Name</th>
                        <th class="p-4 border-b-2 border-white">Guest No.</th>
                        <th class="p-4 border-b-2 border-white">Date</th>
                        <th class="p-4 border-b-2 border-white">Time</th>
                        <th class="p-4 border-b-2 border-white">Actions</th>
                        <th class="p-4 border-b-2 border-white">More Info</th>
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
                                    <a href="{{ url('/edit-item', $reservation->id) }}">Edit</a>/
                                    <a href="{{ url('/delete-menu-item', $reservation->id) }}">Delete</a>
                                </td>
                                <td class="trow my-1 text-lg">
                                    <form class="contents" method="post"
                                        action="{{ url('reservation', $reservation->id) }}">
                                        @method('get')
                                        @csrf
                                        <button type="submit" class="edit_btn"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="var(--user-accent-color)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
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

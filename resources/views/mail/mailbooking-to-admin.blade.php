


  <h1>Booking No ### : {{ $booking_id }}</h1>


<table border="1">
        <tr>
            <th>Name Customer</th>
            <th>Phone Customer</th>
            <th>Email Customer</th>

            <th>Name Room</th>
            <th>Type Room</th>
            <th>Arrival Date</th>
            <th>Depature Date</th>
        </tr>

        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>

            <td>{{ $name }}</td>
            <td>{{ $room_type }}</td>
            <td>{{ $arrival_date }}</td>
            <td>{{ $depature_date }}</td>
        </tr>


</table>

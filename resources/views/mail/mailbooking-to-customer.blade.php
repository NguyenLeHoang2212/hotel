<h1>Booking Success ### </h1>


{{-- <table border="1">
        <tr>
            <th>Name Room</th>

            <th>Type Room</th>
            <th>Total</th>

            <th>Arrival Date</th>
            <th>Depature Date</th>
        </tr>

        <tr>
            <td>{{ $name }}</td>
            <td>{{ $room_type }}</td>
            <td>{{ $total }}</td>

            <td></td>
            <td></td>
        </tr>


</table> --}}

    <h3>To: {{ $user->email }}</h3>
    <h3> From: Colina Resolt - Hotel</h3>
    <h3>Subject: Booking success</h3>
    
    <p>Dear {{ $user->name }} from Colina Resolt - Hotel,</p>

    <p>You have booked a {{ $name }} ({{$room_type }}) with prices {{ $total }} success</p>
    <p>Check-in date  : {{ $arrival_date }}</p>

    <p>Check-out date : {{ $depature_date }}</p>

    <p>Please, could you confirm your booking? Let we know if you need any further information.

    <p>Thank you.</p>

    <p>Kind regards,</p>

    <p>Colina Resolt - Hotel</p>

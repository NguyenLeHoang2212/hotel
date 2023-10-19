









    <h3>To: Colina Resolt - Hotel </h3>
    <h3>From :  {{ $user->email }} </h3>
    <h3>Subject: Booking room in Colina Resolt - Hotel </h3>
    
    <p>Dear Colina Resolt - Hotel,</p>

    <p>I would like to reserve an accessible {{ $name }} ({{ $room_type }})  on  {{ $arrival_date }} and {{ $depature_date }} . Could I have a quiet room with a view if possible, please?</p>

    <p>I will arrive at about 12 a.m and I have an early meeting the next morning, so please could you leave an iron and ironing board in the room?</p>


    <p>Please could you confirm the booking? Let me know if you need any further information.</p>

    <p>Many thanks.</p>

    <p>With kind regards,</p>

    <p>{{ $user->name }}</p>
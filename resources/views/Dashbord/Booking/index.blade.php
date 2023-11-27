<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books</title>
</head>
<body>
    <table border="1">
        <th>id</th>
        <th>user_id</th>
        <th>room_id</th>
        <th>services_id</th>
        <th>date_from</th>
        <th>date_to</th>
        <th>member_number</th>
        <th>total_amount</th>
        <th>Delet</th>
        <th>update</th>
        @foreach ($Bookings as $Booking)
        <tr>
            <td>{{ $Booking->id }}</td>
            <td><img src="https://drive.google.com/file/d/1tULdulr9z9R3-jTCppL7tejbhVHQtysd/view?usp=drive_link" alt=""></td>
            <td>{{ $Booking->user_id  }}</td>
            <td>{{ $Booking->room_id }}</td>
            <td>{{ $Booking->services_id }}</td>
            <td>{{ $Booking->date_from }}</td>
            <td>{{ $Booking->date_to }}</td>
            <td>{{ $Booking->member_number }}</td>
            <td>{{ $Booking->total_amount }}</td>
            <td>
                <form action="{{ route('delete.Booking',$Booking->id ) }}" method="post">
                    @csrf
                    <input type="hidden" name="Booking_id" value="{{ $Booking->id }}">
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="{{ route('edit.Booking', $Booking->id ) }}">edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    <img src="https://drive.google.com/file/d/1tULdulr9z9R3-jTCppL7tejbhVHQtysd/view" alt="img from drive">

</body>
</html>

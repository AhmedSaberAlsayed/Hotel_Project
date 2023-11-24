<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <th>id</th>
        <th>room_number</th>
        <th>room_type</th>
        <th>room_cost</th>
        <th>room_availability</th>
        <th>Delet</th>
        <th>update</th>
        @foreach ($Rooms as $Room)
        <tr>
            <td>{{ $Room->id }}</td>
            <td>{{ $Room->room_number  }}</td>
            <td>{{ $Room->room_type }}</td>
            <td>{{ $Room->room_cost }}</td>
            <td>{{ $Room->room_availability }}</td>
            <td>
                <form action="{{ route('delete.room',$Room->id ) }}" method="post">
                    @csrf
                    <input type="hidden" name="Room_id" value="{{ $Room->id }}">
                    <button type="submit">Delete</button>
                </form> 
            </td> 
            <td>
                <a href="{{ route('edit.room', $Room->id ) }}">edit</a> 
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
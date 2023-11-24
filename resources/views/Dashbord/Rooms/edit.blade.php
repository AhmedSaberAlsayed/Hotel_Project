<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('errors'))
    @foreach (Session::get('errors')->all() as $error)
    <h4 style="background: red; color:aliceblue;">{{ $error }}</h4>
    @endforeach
    @endif
    
    <form action="{{route('update.room',$Room->id)}}" method="post">
        @csrf
        <input type="number" name="room_number" placeholder="room_number" value="{{$Room->room_number }}">
        <input type="text" name="room_type" placeholder="room_type" value="{{$Room->room_type}}">
        <input type="text" name="room_cost" placeholder="room_cost" value="{{$Room->room_cost}}">
        <input type="number" name="room_availability" placeholder="room_availability" value="{{$Room->room_availability }}">
        <button type="submit">update</button>
    </form>
</body>
</html>

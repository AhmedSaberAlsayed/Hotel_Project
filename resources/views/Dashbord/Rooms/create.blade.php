<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create employee</title>
</head>
<body>
    <form action="{{ route('store.room') }}" method="post">
        @csrf
        <input type="number" name="room_number" placeholder="room_number">
        <input type="text" name="room_type" placeholder="room_type">
        <input type="text" name="room_cost" placeholder="room_cost">
        <input type="number" name="room_availability" placeholder="room_availability">
        <button type="submit">done</button>
    </form>
</body>
</html>
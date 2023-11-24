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
    
    <form action="{{route('update.services',$services->id)}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{$services->name }}">
        <input type="text" name="describtion" placeholder="describtion" value="{{$services->describtion}}">
        <input type="text" name="service_cost" placeholder="service_cost" value="{{$services->service_cost}}">
        <button type="submit">update</button>
    </form>
</body>
</html>

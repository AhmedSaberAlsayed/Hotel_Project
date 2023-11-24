<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create employee</title>
</head>
<body>
    <form action="{{ route('store.services') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" >
        <input type="text" name="describtion" placeholder="describtion" >
        <input type="text" name="service_cost" placeholder="service_cost" >
       
        <button type="submit">done</button>
    </form>
</body>
</html>
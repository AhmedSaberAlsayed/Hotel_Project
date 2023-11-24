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
        <th>name of service</th>
        <th>describtion of service</th>
        <th>cost of service</th>
        <th>Delet</th>
        <th>update</th>
        @foreach ($services as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->name  }}</td>
            <td>{{ $service->describtion }}</td>
            <td>{{ $service->service_cost }}</td>
           
            <td>
                <form action="{{ route('delete.services',$service->id ) }}" method="post">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit">Delete</button>
                </form> 
            </td> 
            <td>
                <a href="{{ route('edit.services', $service->id ) }}">edit</a> 
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
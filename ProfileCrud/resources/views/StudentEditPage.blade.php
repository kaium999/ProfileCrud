<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/edit" method="post" enctype="multipart/form-data">
        @csrf
       {{-- @method('PUT')--}}
        <div>
            <input type="hidden" name="id" value="{{$data->id}}" >
        </div>
        <div>
            <input type="name" name="name" value="{{$data->name}}" >
        </div>
        <div>
        <input type="name" name="email" value="{{$data->email}}" >
        </div>
        <div>
            <input type="name" name="phone" value="{{$data->phone}}" >
            </div>
        <div>
            <input type="name" name="address" value="{{$data->address}}" >
        </div>
        <div>
            <input type="file" name="image" >
            <img src="{{asset('public/Image/'.$data->profileImage)}}" weight="70px" height="70px" alt="image">
        </div>
        
        <div>
            <input type="submit" value="update data" >
        </div>
    </form>
</body>
</html>






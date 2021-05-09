<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>
</head>
<body>
    <h1>เกี่ยวกับผู้พัฒนาเว็บ</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, vitae? Rem ut reiciendis quod, aliquid itaque animi? Quo quidem cum similique vero voluptas sed ipsum sit, rem veritatis? At, nemo.</p>
    
    <p>ที่อยู่ : {{$address}}</p>
    <p>เบอร์ติดต่อ : {{$tel}}</p>
    <p>email : {{$email}}</p>
    <p>{{$error}}</p>
    <p>{{$status}}</p>

    <a href="{{url('/')}}">Home</a>
    <a href="{{route('admin')}}">Admin</a>
    <a href="{{route('mem')}}">Member</a>
    <a href="{{route('about')}}">About</a>
</body>
</html>
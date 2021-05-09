<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>
</head>
<body>
    <?php
        $user = "kongruksiam";
        $arr  = array("Home", "Member", "About", "Contact");
    ?>

    @if($user == "kongruksiam")
        <h1>ยินดีตอยรับแอดมิน {{$user}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, vitae? Rem ut reiciendis quod, aliquid itaque animi? Quo quidem cum similique vero voluptas sed ipsum sit, rem veritatis? At, nemo.</p>
        <h1>{{$user}}</h1>
    @else
        <h1>ผู้ใช้ท่านนี้ไม่ได้เป็นแอดมิน</h1>
    @endif

    @foreach($arr as $menu)
        <a href="">{{$menu}}</a>
    @endforeach

    <ul>
    @for($i=1; $i<=5; $i++)
        <li>{{$i}}</li>
    @endfor
    </ul>


</body>
</html>
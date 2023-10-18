<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 @php
    $i=1;
    $a = "hello world";
    @endphp

    @for($i=1;$i<10;$i++){
        <h2>{{$a}}</h2>
    }
    @endfor
    @include('hello')
   
    
    
</body>
</html>
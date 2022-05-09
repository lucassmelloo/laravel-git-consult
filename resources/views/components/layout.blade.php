<!DOCTYPE html>
<html lang="en" style="
    margin:0;
    min-width: 100%;
    min-height: 100%;
    padding: 5rem">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="{{asset('css/app.css')}}">
    <link rel = "stylesheet" href="./layout.css">
    <title>git.Consult</title>
</head>
<body style = "
    background: rgb(255,200,0);
    background: linear-gradient(124deg, rgba(255,200,0,1) 0%, rgba(155,255,255,1) 100%);
    margin:0;
    display:block;
    min-width: 100%;
    min-height: 100%;
    justify-content:center;
    align-items: center;">
        <div class="container" style = "
            background-color: rgb(255, 255, 255 );
            border-radius: 16px;
            padding:1.5rem;
        ">
            <h1 style="text-align: center">{{$title}}</h1>
            {{$slot}}
        </div>        
</body>
</html>
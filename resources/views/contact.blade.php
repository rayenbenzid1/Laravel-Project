<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('layouts/navbar')

    <h1>this is a contact page</h1>
    <p>{{$message}}</p>
    @if($message == 'hello')
        <p>yes it is hello</p>
    @else
        <p>no it is not hello</p>
    @endif
    @if(count($details) > 0)
        <ul>
            @foreach($details as $detail)
                <li>{{$detail}}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
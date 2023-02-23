<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body
    style="font-family: 'Open Sans', sans-serif; margin: 0px; padding: 0px; background-color: #f8f8f8; font-size: 14px">
    <div style="background-color: #fff;
    display: block;
    margin: 0 auto;
    max-width: 640px;
    min-height: 120px;
    width: 94%;
    ">
        <div style="display:block; width: 100%;">
            <img src="{{ url('/static/images/email_header.png') }}" alt="" style="display:block; width: 100%;">
        </div>
        <div style="padding: 32px;">
            @section('content')
            @show
        </div>
    </div>

</body>

</html>

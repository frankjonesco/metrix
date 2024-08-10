<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('images/truecrimemetrix-ico-32x32.png')}}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    {{-- @vite('resources/css/app.css') --}}

    <link href="{{ asset('build/assets/app-CX6wZprs.css')}}"  rel="preload" as="style" onload="this.rel='stylesheet'">
    <script src="{{ asset('build/assets/app-I5i9CKeh.js') }}" defer></script>

</head>

<body>
    <main>
        {{$slot}}
    </main>
</body>
</html>
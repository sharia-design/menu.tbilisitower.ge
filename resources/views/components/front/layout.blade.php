<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <style>
        a {
            color: black;
        }
        a:hover {
            color: blue;
        }
        body {
            padding: 11px 69px;
        }

    </style>


</head>

<body>


    {{-- Content --}}

    <main>

        <x-front.flash />

        {{ $slot }}

    </main>

    {{-- #end Content --}}


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <title> To-Do {{isset($titlePage) ? " | ".$titlePage  : ""}} </title>
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <a href="{{route('home')}}">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo image">
            </a>
        </div>
        <div class="content">
            <nav>
                {{$btn ?? null}}
            </nav>

            <main>
                {{$slot}}
            </main>
    </div>
    </div>

</body>

</html>
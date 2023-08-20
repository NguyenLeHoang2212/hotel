<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        header {
            background-color: blueviolet;
        }

        aside {
            float: left;
            background-color: green;
            width: 20%;
        }

        .content {
            float: left;
            background-color: blue;
            width: 80%;
        }

        footer {
            clear: both;
            background-color: blueviolet;
        }
    </style>
</head>

<body>
    @include('client.pages.header')
    <main>
        <div class="nav">Navigation</div>
        <aside>
            @section('side-bar')
                Side bar Layout Master
            @show
        </aside>
        <div class="content">
            @yield('content')
            @yield('test')
        </div>
    </main>
    @include('client.pages.footer')
</body>

</html>

@yield('js-custom')

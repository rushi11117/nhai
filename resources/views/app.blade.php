<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add jQuery and Bootstrap JS (Popper.js is required for Bootstrap dropdowns) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <style>
        /* If you want to exclude specific elements from being affected, you can override the font size for those elements */
        /* For example, to exclude headings (h1, h2, h3, etc.), you can do the following */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            /* Reset font size to the default size */
        }



        .body {
            font-size: 30%;
            /* height: 100vh; */
            display: flex;
            /* flex-direction: column; */
            zoom: 70%;
            -moz-transform: scale(0.7);
            /* Firefox */
            transform: scale(0.7);
        }

        .header {
            background-color: #f8f9fa;
            /* border-top: 1px solid #000;
            border-bottom: 1px solid #000; */
            padding: 1px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        .container {
            /* flex-grow: 1;
            overflow-y: auto; */
            padding-top: 20px;
            /* Adjust to match the header height */
        }

        .footer {
            background-color: #f8f9fa;
            border-top: #000;
            border-bottom: 1px solid #000;
            padding: 10px 0;
            padding-bottom: 0px;
            padding-bottom: 10px;
            height: 5%;
            /* position: fixed; */
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <div>
        <div class="header ">
            @include('header')
        </div>

        <div class="container mt-4">
            @yield('content')
        </div>

        <div class="footer">
            @include('footer')
        </div>
    </div>
</body>

</html>
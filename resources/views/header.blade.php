<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #header {
            background-color: #f8f9fa;

        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse offcanvas-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contribute">Contribute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        $(document).ready(function() {
            $('[data-toggle="offcanvas"]').on('click', function() {
                $('.offcanvas-collapse').toggleClass('open');
            });
        });
    </script>
</body>

</html>
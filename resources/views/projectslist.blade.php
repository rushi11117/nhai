<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects List</title>
    <style>
        .container {
            width: 100%;
        }

        .card1 {
            padding: 5px;
        }
    </style>
</head>

<body>
    @extends('app')
    @section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">
                Projects
            </h5>
            <table class="table table-striped">
                <tbody>
                    <tr><x-project-table-card /></tr>
                    <tr><x-project-table-card /></tr>
                    <tr><x-project-table-card /></tr>
                    <tr><x-project-table-card /></tr>
                    <tr><x-project-table-card /></tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('app') {{-- Assuming you have a master layout file --}}

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to NHAI Project Management</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Projects
                    </div>
                    <div class="card-body">
                        <p>Manage and view your NHAI projects here.</p>
                        <a href="{{url('/')}}/project" class="btn btn-primary">View Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Tasks
                    </div>
                    <div class="card-body">
                        <p>Manage tasks and assignments for your projects.</p>
                        <a href="" class="btn btn-primary">View Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>
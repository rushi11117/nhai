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

        .details {
            border: 1px solid antiquewhite;
            position: relative;
            width: 40%;
        }

        .scrollable-container {
            max-height: 100px;
            /* Adjust this value as needed */
            overflow-y: auto;
        }



        .container {
            display: flex;
            /* Use flexbox to create a flexible container */
        }

        .column {
            /* Each column takes up equal space */
            padding: 10px;
            /* Optional padding for spacing between columns */
            border: 1px solid #ccc;
            /* Optional border for visual separation */
        }
        
        .images {
            width: 40%;
        }

        .btn-div {
            padding: 3px;
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
                    @foreach ($projects as $project)
                    <tr>
                        <div class="card child card1">
                            <h5 class="card-header ">
                                Sr.No ({{$project->project_id}})
                            </h5>
                            <div class="container">
                                <div class="card-body details column">
                                    <div>
                                        Name : {{$project->project_name}}
                                    </div>
                                    <div>
                                        Location : {{$project->project_location}}
                                    </div>
                                    <div>
                                        <div class="mt-6">
                                            Description:
                                            <p class="scrollable-container">
                                                {{$project->project_description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column card-body actions">
                                    <div class="btn-div">
                                        <button class="btn btn-danger" onclick="{{url('/delete')}}/{{$project->project_id}}">
                                            Delete
                                        </button>
                                    </div>
                                    <div class="btn-div">
                                        <button class="btn btn-warning">
                                            Edit
                                        </button>
                                    </div>
                                    <div class="btn-div">
                                        <button class="btn btn-primary">
                                            View
                                        </button>
                                    </div>
                                </div>
                                <div class="column images">
                                    Images Here
                                </div>
                            </div>

                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>
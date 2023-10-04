<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .group-sep {
            padding-bottom: 10px;
            border-bottom: 2px solid #000;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputContainer = document.getElementById('input-container');
            const addOrganizationButton = document.getElementById('add-organization');

            addOrganizationButton.addEventListener('click', function() {
                // Create a new div with the input field
                const newDiv = document.createElement('div');
                newDiv.className = 'card-body';

                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'organizations[]';
                input.className = 'form-control';
                input.required = true;

                // Append the input field to the new div
                newDiv.appendChild(input);

                // Append the new div to the container
                inputContainer.appendChild(newDiv);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('is_hybrid_immunity');
            const conditionalDiv = document.getElementById('organizations-container');

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    conditionalDiv.style.display = 'block';
                } else {
                    conditionalDiv.style.display = 'none';
                }
            });
        });
        //Image Array Handler 

        $(function() {
            $(this).on('click', '#add-product-image', function() {
                var form = '<div class="form-group"><div class="Image-upload"><span class="image-option-close">&times;</span><label for="product_images" class="">Upload Image</label><input type="file" id="product_images" accept="image/*" name="product_images[]" onchange="readURL(this);"></div></div>';
                $('.product-image').append(form)
            });

            $(this).on('click', '.image-option-close', function() {
                var target_input = $(this).parent();
                target_input.remove();
            })
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var newimage = $('#image').clone()
                        .attr('src', e.target.result);
                    $('.product-image').prepend(newimage)


                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>

<body>
    @extends('app')

    @section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Create a New Project
            </div>
            <div class="card-body">
                <form action="{{url('/')}}/contribute" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group card">
                        <div class="card-header">
                            <label for="project_name ">Project Name</label>
                        </div>
                        <div class="card-body">
                            <input type="text" name="project_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group card">
                        <div class="card-header">
                            <label for="project_location">Project Location</label>
                        </div>
                        <div class="card-body">
                            <input type="text" name="project_location" class="form-control">

                        </div>
                    </div>

                    <div>
                        <div class="form-group card" style="z-index: 1">
                            <div class="card-header">
                                <label for="project_shapefile">Shapefile</label>
                            </div>
                            <div class="card-body">
                                <input type="file" name="project_shapefile" class="form-control-file">
                            </div>
                        </div>
                    </div>


                    <div class="card form-group">
                        <div class="form-check" style="padding: 30px ; padding-bottom:5px ; padding-top:5px">
                            <div class="card-header">
                                <input type="checkbox" name="is_hybrid_immunity" class="form-check-input" id="is_hybrid_immunity" style="padding: 10px;">
                                <label class="form-check-label" style="padding: 5px;" for="is_hybrid_immunity">Is Hybrid Immunity?</label>
                            </div>
                        </div>

                        <!-- If Hybrid immunity show input for organizations involved -->
                        <div class="form-group" id="organizations-container" style="display: none ; padding: 10px">
                            <div class="card-header">
                                <label for="organizations">Organizations</label>
                            </div>
                            <div>
                                <div id="input-container" class="card-body">
                                    <div class="card-body">
                                        <input type="text" name="developer_authority[]" class="form-control" required>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" id="add-organization">Add Organization</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>


                    <div class="form-group card ">
                        <div class="card-header">
                            <label for="date_to_start_timeline">Date To Start Timeline</label>
                        </div>
                        <div class="card-body">
                            <input type="date" name="date_to_start_timeline" class="form-control">
                        </div>
                    </div>
                    <div class="form-group card" style="flex-direction: row;">
                        <div class="card-header">
                            <label for="project_description">Description</label>
                        </div>
                        <div class="card-body">
                            <textarea name="project_description" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Project</button>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')

    @endsection

</body>

</html>
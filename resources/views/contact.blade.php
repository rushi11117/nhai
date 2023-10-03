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
        <h1>Contact Us</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Information</h5>
                        <p class="card-text">
                            You can reach us via the following contact information:
                        <ul>
                            <li>
                                Email:
                                <a href="mailto:rti@nhai.com">
                                    rti@nhai.com
                                </a>
                            </li>
                            <li>
                                Phone:
                                <a href="#">
                                    +1 (123) 456-7890
                                </a>
                            </li>
                            <li>
                                <div>
                                    HQ Address: :
                                    <a href="https://t.ly/fyvRo">
                                        123 Highway Ministry, Rajpath , New Delhi, India 100 001
                                    </a>
                                </div>
                                <div style="padding: 20px;">
                                    <a href="https://www.google.com/maps/place/Ministry+Of+Road+Transport+And+Highways/@28.4448812,77.0160596,2972m/data=!3m1!1e3!4m10!1m2!2m1!1sministry+of+highways+delhi!3m6!1s0x390d186a0e488297:0x309696c8126c7e4a!8m2!3d28.444959!4d77.038231!15sChptaW5pc3RyeSBvZiBoaWdod2F5cyBkZWxoaeABAA!16s%2Fg%2F11pkb7myzp?entry=ttu">
                                        Regional Office
                                    </a>
                                </div>

                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Form</h5>
                        <p class="card-text">Fill out the form below to get in touch with us:</p>
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" rows="4" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


</body>

</html>
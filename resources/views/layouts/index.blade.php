<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">
    <link href="/img/favicon.ico" rel="shortcut icon">

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="/css/app.css">

    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    
</head>
<body>

    <div class="mx-5 mt-5 mb-2">
        <a href="/" class="">
            <button class="btn btn-outline-dark circle"><</button>
            <span class="text-dark">Retour au Site Imperial</span> 
        </a>
    </div>
    <div class="container">
        <div class="row m-0 mb-5">
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/about" class="btn btn-dark rounded text-center w-75 display-5">About</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/services" class="btn btn-dark rounded text-center w-75">Services</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/portfolio" class="btn btn-dark rounded text-center w-75">Portfolio</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/testimonials" class="btn btn-dark rounded text-center w-75">Testimonials</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/team" class="btn btn-dark rounded text-center w-75">Team</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/contact" class="btn btn-dark rounded text-center w-75">Contact</a>
            </div>
        </div>

        @yield('content')

    </div>
    
</body>
</html>


















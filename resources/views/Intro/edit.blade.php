<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>About</title>
</head>
<body>
    <a href="/" class="btn btn-outline-dark circle mx-5 mt-5 mb-2"><</a>
    <h1 class="text-center mt-3">About</h1>
    <div class="container">
        <div class="row m-0">
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/about" class="btn btn-dark rounded text-center w-75 display-5">About</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/services" class="btn btn-dark rounded text-center w-75">Services</a>
            </div>
            <div class="col-4 p-0 d-flex justify-content-center my-2">
                <a href="/portfolio" class="btn btn-dark rounded text-center w-75">Portfolio</a>
            </div>
        </div>
        <div class="row m-0">
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

        {{-- Crud --}}
        <div class="row m-0 mt-3 border-bottom">
            <div class="col-2">id</div>
            <div class="col-5 text-center">image</div>
            <div class="col-5 text-center">Actions</div>
        </div>
        <form action="/about/create" method="post">
            @csrf
            <div class="row m-0 border-bottom">
                <div class="col-2">1</div>
                <div class="col-5">
                    <img src="img/about-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-5">
                    @if ($intros)
                        
                    @endif
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
            </div>
        </form>

    </div>
</body>
</html>
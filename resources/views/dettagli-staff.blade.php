<!doctype html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Custom CSS -->

            <link rel="stylesheet" href="./style.css">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
            <!-- FONTAWESOME -->

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

            <title>araMovies</title>
        </head>
        <body style="background-color: black !important;">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="fas fa-film p-1"></i>araMovies</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a id="chisiamo"class="nav-link" href="#">Chi siamo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eventi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Contatti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Media</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row justify-content-center align-items-center bg-dark text-center">
                    <div class="col-12 col-md-6 text-light">
                        <h3>Per Saperne di piú</h3>
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="row justify-content-center align-items-center">

                

                    <div class="col-12 col-lg-3 p-3">

                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"></div>
                        <!-- <img src="https://randomuser.me/api/portraits/women/2.jpg" class="card-img-top" alt="..."> -->
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{$taff["id"] }}</div>
                         <img src="..." class="card-img-top" alt="..."> 

                            <div class="card-body">
                                <h5 class="card-title">{{$taff["name"] }}</h5>
                                <h5 class="card-title">{{$taff["surname"] }}</h5>
                                <p class="card-text">etá    {{$taff["age"] }}</p>
                                <p class="card-text">io mi occupo di  {{$taff["role"] }}</p>
                                <a href="#"><i class="bi bi-twitter text-light"></i></a>
                                <a href="#"><i class="bi bi-facebook text-light"></i></a>
                                <a href="#"><i class="bi bi-instagram text-light"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-light"></i></a>
                            </div>
                        </div>


                        </div>
                    </div>

                </div>
            </div>



            <footer class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-3 text-light">
                        <ul>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                        </ul>
                    </div>
                    <div class="col-3 text-light">
                        <ul>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                        </ul>
                    </div>
                    <div class="col-3 text-light">
                        <ul>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                        </ul>
                    </div>
                    <div class="col-3 text-light">
                        <ul>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                        </ul>
                    </div>
                </div>
            </footer>

                    


                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
    </html>

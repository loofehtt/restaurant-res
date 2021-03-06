<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div class="main">
        <div class="header container-fluid p-0 position-fixed">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                <div class="container w-75">
                    <a class="navbar-brand m-0 " href="index.php">
                        <img class="img-fluid" src="./assets/images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="categories.php">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="foods.php">Foods</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="#">Content</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="body">
            <div class="categories">
                <div id="explore-food">
                    <div class="container">
                        <div class="row mt-5">
                            <h2 class="text-center fw-bold ef-fz">Explore Foods</h2>
                        </div>
                        <div class="row justify-content-around ms-auto me-auto mt-4 mb-5 w-75">
                            <div class="col-lg-4 col-12 text-center mb-4 form-floating">
                                <img src="./assets/images/pizza.jpg" class="img-fluid br-15" alt="...">
                                <h3 class="text-white text-cuatoi">Pizza</h3>
                            </div>
                            <div class="col-lg-4 col-12 text-center mb-4 form-floating">
                                <img src="./assets/images/burger.jpg" class="img-fluid br-15" alt="...">
                                <h3 class="text-white text-cuatoi">Burger</h3>
                            </div>
                            <div class="col-lg-4 col-12 text-center mb-4 form-floating">
                                <img src="./assets/images/momo.jpg" class="img-fluid br-15" alt="...">
                                <h3 class="text-white text-cuatoi">Momo</h3>
                            </div>
                            <div class="col-lg-4 col-12 text-center mb-4 form-floating">
                                <img src="./assets/images/other.jpg" class="img-fluid br-15" alt="...">
                                <h3 class="text-white text-cuatoi">Other</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer col-12 ms-0 me-0 mt-3">
            <div class="row justify-content-center">
                <a class="text-center" href="">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a class="insta text-center ms-4 me-4" href="">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a class="text-center" href="">
                    <i class="fab fa-twitter-square"></i>
                </a>
            </div>
            <div class="row text-center">
                <p>All right reserved. Design By <a class="mytext" href="http://cse.tlu.edu.vn/">CSE.TLU</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
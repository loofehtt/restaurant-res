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
            <div class="food-search row m-0">
                <div class="col-6">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-search" type="submit">Search</button>
                    </form>
                </div>
            </div>

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
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 foods-menu">
                <div class="row m-0">
                    <h2 class="text-center mt-5">Food Menu</h2>
                </div>

                <div class="row justify-content-center w-75 ms-auto me-auto">
                    <div class="col-lg-5 col-11 d-flex flex-row card br-15 m-4">
                        <div class="food-menu-img mt-3">
                            <img src="./assets/images/menu-burger.jpg" alt="" class="card-img-top br-15">
                        </div>

                        <div class="card-body">
                            <h4>Food Title</h4>
                            <p class="card-text fs-5">$2.3</p>
                            <p class="card-text fs-5">
                                Made with Italian Sauce, Chicken, and organice vegetables.
                            </p>

                            <a href="order.html" class="btn btn-search">Order Now</a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-11 d-flex flex-row card br-15 m-4">
                        <div class="food-menu-img mt-3">
                            <img src="./assets/images/menu-burger.jpg" alt="" class="card-img-top br-15">
                        </div>

                        <div class="card-body">
                            <h4>Food Title</h4>
                            <p class="card-text fs-5">$2.3</p>
                            <p class="card-text fs-5">
                                Made with Italian Sauce, Chicken, and organice vegetables.
                            </p>

                            <a href="order.html" class="btn btn-search">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-11 d-flex flex-row card br-15 m-4">
                        <div class="food-menu-img mt-3">
                            <img src="./assets/images/menu-burger.jpg" alt="" class="card-img-top br-15">
                        </div>

                        <div class="card-body">
                            <h4>Food Title</h4>
                            <p class="card-text fs-5">$2.3</p>
                            <p class="card-text fs-5">
                                Made with Italian Sauce, Chicken, and organice vegetables.
                            </p>

                            <a href="order.html" class="btn btn-search">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-11 d-flex flex-row card br-15 m-4">
                        <div class="food-menu-img mt-3">
                            <img src="./assets/images/menu-burger.jpg" alt="" class="card-img-top br-15">
                        </div>

                        <div class="card-body">
                            <h4>Food Title</h4>
                            <p class="card-text fs-5">$2.3</p>
                            <p class="card-text fs-5">
                                Made with Italian Sauce, Chicken, and organice vegetables.
                            </p>

                            <a href="order.html" class="btn btn-search">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="row m-0">
                    <a class="mytext text-center text-decoration-none mb-5">See All Foods</a>
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

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
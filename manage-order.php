<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col">
                    <ul class="nav justify-content-center bg-light border-bottom border-1 border-dark">
                        <li class="nav-item">
                            <a href="manage-home.php" class="nav-link fs-5 fw-bold">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="manage-user.php" class="nav-link fs-5 fw-bold">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="manage-categories.php" class="nav-link fs-5 fw-bold">Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="manage-foods.php" class="nav-link fs-5 fw-bold">Food</a>
                        </li>
                        <li class="nav-item">
                            <a href="manage-order.php" class="nav-link fs-5 fw-bold">Order</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link fs-5 fw-bold">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="mt-4 mb-5">
                <h1 class="">Manage Order</h1>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Food</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr>
                        <td scope="row">1.</td>
                        <td>Mixed Pizza</td>
                        <td>10.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td class="text-success">Delivered</td>
                        <td>Jana Bush</td>
                        <td>0342298409</td>
                        <td>loofehtt@gmail.com</td>
                        <td>Ha Nam</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Order</button>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">1.</td>
                        <td>Best Burger</td>
                        <td>4.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td class="text-success">Delivered</td>
                        <td>the loof</td>
                        <td>0342298409</td>
                        <td>loofehtt@gmail.com</td>
                        <td>Ha Nam</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Order</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1.</td>
                        <td>Sadeko Momo</td>
                        <td>6.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td class="text-success">Delivered</td>
                        <td>Jana loof</td>
                        <td>0342298409</td>
                        <td>loofehtt@gmail.com</td>
                        <td>Ha Nam</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Order</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="admin-footer text-center mt-5">
            <p>2021 all right reserved. Design By <a href="http://cse.tlu.edu.vn/">CSE.TLU</a></p>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
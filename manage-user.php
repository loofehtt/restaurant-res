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
        <div class="container w-75">
            <div class="mt-4 mb-5">
                <h1 class="">Manage User</h1>
            </div>
            <div class="ms-0 mt-4">
                <button type="button" class="btn btn-primary">Add User</button>

            </div>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr>
                        <td scope="row">1.</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">2.</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">3.</td>
                        <td>Larry the Bird</td>
                        <td>TLB</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
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
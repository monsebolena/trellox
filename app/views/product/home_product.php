<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/product.js" defer></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-3x fa-shop"></i>Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 500px;">
                    <li class="nav-item">
                        <a href="<?= base_url() ?>provider">
                            <div>
                                <i class="fa-solid fa-3x fa-building"></i>
                                <p>Providers</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>customer">
                            <div>
                                <i class="fa-solid fa-3x fa-circle-user"></i>
                                <p>Customer</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>product">
                            <div>
                                <i class="fa-solid fa-3x fa-shop"></i>
                                <p>Products</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>sale">
                            <div>
                                <i class="fa-brands fa-3x fa-salesforce"></i></i>
                                <p>Sales</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <BR></BR>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">New Product</span>
        </nav>
        <form id="form">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Product name" required>
                </div>
                <div class="form-group col-12">
                    <label for="street">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Product Description">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="inputAddress">Categoria</label>
                    <select class="form-control" id="category" required>
                        <option selected>Choose...</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Provider</label>
                    <select class="form-control" id="provider" required placeholder="Choose...">
                        <option selected>Choose...</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="stock">Stock</label>
                    <input required type="number" step="0.1" min="0" class="form-control" id="stock"
                        placeholder="Stock">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="price">Price</label>
                    <input required type="number" min="0" step="0.1" class="form-control" id="price"
                        placeholder="Price">
                </div>
            </div>


            <button type="submit" class="btn col-12 btn-primary">Save</button>
        </form>
        <hr>
        <h3>Last Created Products</h3>
        <div class="table-responsive">
            <table class="table table-dark table-striped w-auto mx-auto">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Provider</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody id="products">

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
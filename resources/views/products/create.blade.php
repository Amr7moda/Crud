<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('products.create') }}">Create
                            Product </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Show Products</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image" required>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>

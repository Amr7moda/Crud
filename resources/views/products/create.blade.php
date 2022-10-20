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
                    <input type="file" name="file" required>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>

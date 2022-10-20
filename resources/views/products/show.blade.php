<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>sss</h1>
    <div class="container">
        <div class="row">
            <form action="{{ route('products.update', $products->id) }}">
                <div class="form-group mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="{{ $products->name }}" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" class="form-control" value="{{ $products->price }}" name="price" required>
                </div>
                @csrf
                <button class="btn btn-success m-2">update</button>
            </form>

        </div>
    </div>


</body>

</html>

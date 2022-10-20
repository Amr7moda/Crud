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
    <div class="container m-5 p-4">
        <div class="row m-3 text-center">
            @foreach ($products as $product)
                <div class="col-3 m-1 shadow border">
                    <img src="app/public/product/{{ $product->image }}" alt="">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->price }}</p>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger m-1">delete</button>
                    </form>
                    <form action="{{ route('products.edit', $product->id) }}">
                        <button class="btn btn-success m-2">update</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>



</body>

</html>

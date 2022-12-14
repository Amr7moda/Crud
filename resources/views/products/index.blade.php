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

                <ul class="navbar-nav position-absolute end-0">
                    @if (Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <h5>Welcome,{{ Auth::user()->name }}</h5>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="container m-5 p-4">
        <div class="row m-3 text-center">
            @foreach ($products as $product)
                <div class="col-3 m-1 shadow border">
                    <img src="/uploads/{{ $product->image }}" width="250" alt="">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->price }}</p>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        @if (Auth::user()->role == 'admin')
                            <button class="btn btn-danger m-1">delete</button>
                        @endif
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

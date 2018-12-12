<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/">Zakumi</a>
        
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/products">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <a href="{{ url('/products') }}">
            <span class="glyphicon glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            Back
        </a>
        <div class="row">
            <div class="col-sm-4 product-card">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Giá: {{ $product->price }}</p>
                <p>Số lượng: {{ $product->quantity }}</p>
            </div>
        </div>
    </div>

    <footer class="footer font-fig bg-dark">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://lequyettien.blogspot.com"> Le Quyet Tien</a>
        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
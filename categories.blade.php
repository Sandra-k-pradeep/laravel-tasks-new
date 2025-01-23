<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products Page</h1>
    <ul>
        <li><a href="{{ route('products.show', ['id' => 1]) }}">Product 1</a></li>
        <li><a href="{{ route('products.show', ['id' => 2]) }}">Product 2</a></li>
        <li><a href="{{ route('products.show', ['id' => 3]) }}">Product 3</a></li>
    </ul>
</body>
</html>

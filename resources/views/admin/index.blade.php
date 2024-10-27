<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
</head>
<body>
    <div class="header">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" value="Logout">
        </form>
    </div>

    <div class="container">
        <div class="sidebar">
            <h2>Admin Menu</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="{{ route('manageuser') }}">Users</a></li>
                {{-- <li><a href="#">Categories</a></li> --}}
                <li><a href="{{ route('admin.products.manageproducts') }}">Manage All Products</a></li>
                {{-- <li><a href="#">Settings</a></li>
                <li><a href="#">Reports</a></li> --}}
            </ul>
        </div>
    
        <div class="content">
            <h1>Admin Dashboard</h1>
            <p>Welcome to the admin panel.</p>
        </div>
    </div>

    <script src="{{ asset('admin/script.js') }}"></script>
</body>
</html>


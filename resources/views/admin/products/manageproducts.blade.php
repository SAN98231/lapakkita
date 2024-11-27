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
                <li><a href="/admin/dashboard">Dashboard</a></li>
                <li><a href="{{ route('manageuser') }}">Users</a></li>
                <li><a href="{{ route('admin.products.manageproducts') }}">Manage All Products</a></li>
                {{-- <li><a href="#">Reports</a></li> --}}
            </ul>
        </div>

        <div class="content">
            <h1 class="text-center mb-4">Manage Products</h1>

            <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('admin.products.create') }}'">Add Product +</button>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                   {{ $message }}
                </div>                
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Seller</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                     <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: auto;">
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->user->name }}</td>
                    <td>{{ $product->user->email }}</td>
                    <td>{{ $product->user->phone }}</td>
                    <td>{{ $product->user->address }}</td>
                    <td>{{ $product->created_at->format('Y-m-d') }}</td>
                    <td>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                        </form>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                  </tr>   
                    @endforeach
                </tbody>
              </table >

        </div>
    </div>

    <script src="{{ asset('admin/script.js') }}"></script>
</body>
</html>
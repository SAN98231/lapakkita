<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <li><a href="#">Reports</a></li>
            </ul>
        </div>


        <div class="content">
            <h1 class="text-center mb-4">User Data</h1>

            <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('adduser') }}'">Add User +</button>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                   {{ $message }}
                </div>                
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($adminmanageuser as $row)
                     <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>0{{ $row->phone }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->password }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>
                        <div style="display: flex">
                            <a href="/admin/deleteuser/{{ $row->id }}" class="btn btn-danger">Delete</a>
                            <a href="/admin/edituserdata/{{ $row->id }}" class="btn btn-warning" style="margin-left: 20px">Edit</a>
                         </div>
                        
                    </td>
                  </tr>   
                    @endforeach
                  
                </tbody>
              </table>

        </div>
    </div>

    <script src="{{ asset('admin/script.js') }}"></script>
</body>
</html>
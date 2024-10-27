<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Edit User Data</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form -->
                        <form action="{{ route('updateuserdata', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{ $data->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $data->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhone1" class="form-label">Phone</label>
                                <input type="tel" name="phone" class="form-control" id="exampleInputPhone1" value="{{ $data->phone }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress1" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputAddress1" value="{{ $data->address }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{ $data->password }}">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Show Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Edit User</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('manageuser') }}'">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

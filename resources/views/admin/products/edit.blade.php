<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form -->
                        <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="4" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image</label>
                                <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                <small class="form-text text-muted">Current image: {{ $product->image }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Assigned User</label>
                                <select name="user_id" class="form-select" id="user_id" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $product->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Update Product</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('admin.products.manageproducts') }}'">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

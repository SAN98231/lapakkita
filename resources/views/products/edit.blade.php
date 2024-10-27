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
                        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="productName" value="{{ $product->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="productDescription" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="productQuantity" class="form-label">Quantity</label>
                                <input type="number" name="quantity" class="form-control" id="productQuantity" value="{{ $product->quantity }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" id="productPrice" value="{{ $product->price }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Product Image</label>
                                <input type="file" name="image" class="form-control" id="productImage">
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 150px;">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Update Product</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('products.index') }}'">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

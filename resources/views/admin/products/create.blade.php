<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- Card -->
      <div class="card">
        <div class="card-header text-center">
          <h4>Add Product</h4>
        </div>
        <div class="card-body">
          <!-- Form -->
          <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" id="productName" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="productDescription" rows="3" required></textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="productQuantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="productQuantity" required>
                @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" id="productPrice" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image (SVG only)</label>
                <input type="file" name="image" class="form-control" id="productImage" accept=".svg" required>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="userId" class="form-label">User </label>
                <select name="user_id" class="form-select" id="userId" required>
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Add Product</button>
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
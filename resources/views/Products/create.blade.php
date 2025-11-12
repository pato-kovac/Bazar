<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vytvoriť produkt</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4 text-center">Pridať nový produkt</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
      @csrf
      <div class="mb-3">
        <label class="form-label">Kategória</label>
        <input type="text" name="product_category" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Názov produktu</label>
        <input type="text" name="product_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Popis produktu</label>
        <textarea name="product_description" class="form-control" rows="4" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Cena</label>
        <input type="text" name="product_price" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Id vydavateľa</label>
        <input type="num" name="publisher_id" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Obrázok produktu</label>
        <input type="file" name="product_images[]" multiple required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-4">Pridať produkt</button>
        <a href="/" class="btn btn-secondary px-4 ms-2">Späť</a>
      </div>
    </form>
  </div>
</body>
</html>
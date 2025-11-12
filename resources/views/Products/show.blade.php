<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <title>{{ $product->product_name }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
  <style>
    .thumbnail-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      cursor: pointer;
      transition: transform 0.2s, border 0.2s;
    }
    .thumbnail-img:hover {
      transform: scale(1.05);
      border: 2px solid #007bff;
    }
  </style>
</head>
<body class="bg-light">
  @include('inc.header')

  <div class="container py-5">
    <div class="card shadow-sm p-4">
      <div class="row g-4">

        <div class="col-md-6 text-center">
          @php
            $images = json_decode($product->product_images) ?? [];
          @endphp

          <img id="mainImage" 
               src="{{ asset('storage/' . ($images[0] ?? 'img/Product-placeholder.png')) }}" 
               class="img-fluid rounded mb-3" 
               alt="{{ $product->product_name }}"
               style="max-height: 400px; object-fit: cover;">

          @if(count($images) > 1)
            <div class="d-flex gap-2 justify-content-center flex-wrap">
              @foreach($images as $img)
                <img src="{{ asset('storage/' . $img) }}" 
                     class="img-thumbnail thumbnail-img"
                     alt="Thumbnail"
                     onclick="changeMainImage('{{ asset('storage/' . $img) }}')">
              @endforeach
            </div>
          @endif
        </div>

        <div class="col-md-6">
          <h2 class="fw-bold">{{ $product->product_name }}</h2>
          <p class="text-muted">{{ $product->product_category }}</p>
          <h4 class="text-danger mb-3">{{ $product->product_price }} €</h4>
          <p>{{ $product->product_description }}</p>

<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-envelope"></i> Kontaktovať predajcu
    </button>
</form>

        </div>

      </div>
    </div>
  </div>

  <script>
    function changeMainImage(newSrc) {
      const mainImage = document.getElementById('mainImage');
      mainImage.src = newSrc;
      mainImage.classList.add('fade');

      setTimeout(() => {
        mainImage.classList.remove('fade');
      }, 200);
    }
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Košík – Bajoš</title>  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
</head>
<body class="bg-light">
  @include('inc.header')

  <section class="container my-5">
  <h2 class="fw-bold mb-4 text-center text-md-start">Váš košík</h2>

  @if(empty($cart))
    <div class="text-center py-5">
      <p class="fs-5 text-muted mb-3">Váš košík je prázdny.</p>
      <a href="{{ url('/') }}" class="btn btn-primary px-4">Pokračovať v nakupovaní</a>
    </div>
  @else
    <!-- Cart Table -->
    <div class="table-responsive bg-white rounded-4 shadow-sm p-2 p-md-3">
      <table class="table align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>Produkt</th>
            <th class="text-center">Množstvo</th>
            <th class="text-end">Cena</th>
            <th class="text-end">Spolu</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($cart as $item)
            <tr>
              <td class="d-flex align-items-center gap-2">
                <a href="{{ route('products.show', $item['id']) }}" class="text-decoration-none text-dark d-flex align-items-center gap-2 flex-grow-1">
                  <img src="{{ $item['image'] ? asset('storage/' . $item['image']) : asset('img/Product-placeholder.png') }}" 
                       alt="{{ $item['name'] }}" 
                       class="img-thumbnail"
                       style="width: 50px; height: 50px; object-fit: cover;">
                  <span class="fs-7">{{ $item['name'] }}</span>
                </a>
              </td>
              <td class="text-center">
                <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="d-flex justify-content-center gap-1">
                  @csrf
                  @method('PATCH')
                  <button name="action" value="decrease" class="btn btn-outline-secondary btn-sm">−</button>
                  <input type="text" name="quantity" class="form-control text-center" style="width: 40px;" value="{{ $item['quantity'] }}">
                  <button name="action" value="increase" class="btn btn-outline-secondary btn-sm">+</button>
                </form>
              </td>
              <td class="text-end fs-7">{{ number_format($item['price'], 2, ',', ' ') }} €</td>
              <td class="text-end fw-bold fs-7">{{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} €</td>
              <td class="text-end">
                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-outline-danger">Odstrániť</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Summary -->
    <div class="row mt-4 justify-content-center justify-content-md-end">
      <div class="col-12 col-md-5">
        <div class="bg-white rounded-4 shadow-sm p-3 p-md-4">
          <h5 class="fw-bold mb-3">Zhrnutie objednávky</h5>
          <div class="d-flex justify-content-between mb-2 fs-7">
            <span>Medzisúčet</span>
            <span>{{ number_format($totalPrice, 2, ',', ' ') }} €</span>
          </div>
          @php
            $shipping = $totalPrice > 0 ? 3.00 : 0;
            $grandTotal = $totalPrice + $shipping;
          @endphp
          <div class="d-flex justify-content-between mb-3 fs-7">
            <span>Doprava</span>
            <span>{{ number_format($shipping, 2, ',', ' ') }} €</span>
          </div>
          <hr>
          <div class="d-flex justify-content-between mb-4 fw-bold fs-6">
            <span>Spolu</span>
            <span>{{ number_format($grandTotal, 2, ',', ' ') }} €</span>
          </div>
          <a href="#" class="btn btn-primary w-100">Pokračovať k pokladni</a>
        </div>
      </div>
    </div>
  @endif
</section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
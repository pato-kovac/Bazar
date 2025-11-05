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
    <h2 class="fw-bold mb-4">Váš košík</h2>

    <!-- If cart is empty -->
    @if (false) <!-- Replace with your actual condition -->
      <div class="text-center py-5">
        <p class="fs-5 text-muted mb-3">Váš košík je prázdny.</p>
        <a href="{{ url('/') }}" class="btn btn-primary px-4">Pokračovať v nakupovaní</a>
      </div>
    @else
      <!-- Cart table -->
      <div class="table-responsive bg-white rounded-4 shadow-sm p-3">
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
            <!-- Example product row -->
            <tr>
              <td class="d-flex align-items-center gap-3">
                <img src="{{ asset('img/sample-product.jpg') }}" alt="Produkt" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                <span>Produkt 1</span>
              </td>
              <td class="text-center">
                <div class="input-group input-group-sm justify-content-center" style="max-width: 100px;">
                  <button class="btn btn-outline-secondary">−</button>
                  <input type="text" class="form-control text-center" value="1">
                  <button class="btn btn-outline-secondary">+</button>
                </div>
              </td>
              <td class="text-end">10,00 €</td>
              <td class="text-end fw-bold">10,00 €</td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-danger">Odstrániť</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Summary -->
      <div class="row mt-4 justify-content-end">
        <div class="col-md-5">
          <div class="bg-white rounded-4 shadow-sm p-4">
            <h5 class="fw-bold mb-3">Zhrnutie objednávky</h5>
            <div class="d-flex justify-content-between mb-2">
              <span>Medzisúčet</span>
              <span>10,00 €</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span>Doprava</span>
              <span>3,00 €</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-4 fw-bold">
              <span>Spolu</span>
              <span>13,00 €</span>
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
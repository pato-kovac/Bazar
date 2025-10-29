<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bajoš</title>  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
</head>
<body class="bg-light">
  @include('inc.header')
  <section class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0 px-5">
          <h1 class="fw-bold text-primary mb-3">Aplikácia, ktorá vám zruinuje život</h1>
          <p class="text-secondary fs-5 mb-4">
            Stiahnite si našu novú aplikáciu a nikdy nezmeškáte výhodnú ponuku.
          </p>
          <a href="#" class="btn btn-primary px-4 py-2">Stiahnuť aplikáciu</a>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
          <img src="{{ asset('img/LogoPhone-left.png') }}" alt="Logo" 
               class="img-fluid" 
               style="max-height: 300px; width: auto;">
        </div>
      </div>
    </div>
  </section>
  <section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap container">
      <h2 class="m-0 fw-bold fs-4 fs-sm-3 fs-md-2">Odporúčané</h2>
      <a href="#" class="text-decoration-none d-flex align-items-center mt-2 mt-sm-0">
        <h5 class="text-primary m-0 me-2 fs-6 fs-sm-5 fs-md-4">Zobraziť všetko</h5>
        <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" 
            d="M2.19994 0.78799C2.08669 0.664866 1.95011 0.565465 1.79813 0.495561C1.64615 0.425657 1.4818 0.386642 1.31461 0.38078C1.14743 0.374919 0.980747 0.402329 0.824244 0.461418C0.66774 0.520508 0.524535 0.610099 0.402942 0.72499C0.156695 0.957933 0.0121165 1.2785 0.000512231 1.61727C-0.011092 1.95604 0.111212 2.28574 0.340942 2.53499L5.92694 8.57999L0.340942 14.626C0.111517 14.8752 -0.0105971 15.2047 0.00100528 15.5432C0.0126076 15.8817 0.156994 16.2021 0.402942 16.435C0.524514 16.5497 0.667655 16.6392 0.824064 16.6982C0.980474 16.7572 1.14704 16.7846 1.3141 16.7787C1.48117 16.7728 1.64541 16.7339 1.7973 16.6641C1.94919 16.5942 2.08571 16.495 2.19894 16.372L8.59194 9.45299C8.81077 9.21492 8.93222 8.90335 8.93222 8.57999C8.93222 8.25663 8.81077 7.94506 8.59194 7.70699L2.19994 0.78799Z" 
            fill="var(--primary-blue)" />
        </svg>
      </a>
    </div>
    <hr class="mb-4">
    <div class="d-flex flex-nowrap overflow-auto" style="padding-left: 0.5rem; padding-right: 0.5rem; gap: 1rem;">
      @for ($i = 0; $i < 50; $i++)
        <div class="flex-shrink-0" style="width: 50%; max-width: 200px;">
          @include('inc.product-card')
        </div>
      @endfor
    </div>
  </section>

  <section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap container">
      <h2 class="m-0 fw-bold fs-4 fs-sm-3 fs-md-2">Új</h2>
      <a href="#" class="text-decoration-none d-flex align-items-center mt-2 mt-sm-0">
        <h5 class="text-primary m-0 me-2 fs-6 fs-sm-5 fs-md-4">Zobraziť všetko</h5>
        <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" 
            d="M2.19994 0.78799C2.08669 0.664866 1.95011 0.565465 1.79813 0.495561C1.64615 0.425657 1.4818 0.386642 1.31461 0.38078C1.14743 0.374919 0.980747 0.402329 0.824244 0.461418C0.66774 0.520508 0.524535 0.610099 0.402942 0.72499C0.156695 0.957933 0.0121165 1.2785 0.000512231 1.61727C-0.011092 1.95604 0.111212 2.28574 0.340942 2.53499L5.92694 8.57999L0.340942 14.626C0.111517 14.8752 -0.0105971 15.2047 0.00100528 15.5432C0.0126076 15.8817 0.156994 16.2021 0.402942 16.435C0.524514 16.5497 0.667655 16.6392 0.824064 16.6982C0.980474 16.7572 1.14704 16.7846 1.3141 16.7787C1.48117 16.7728 1.64541 16.7339 1.7973 16.6641C1.94919 16.5942 2.08571 16.495 2.19894 16.372L8.59194 9.45299C8.81077 9.21492 8.93222 8.90335 8.93222 8.57999C8.93222 8.25663 8.81077 7.94506 8.59194 7.70699L2.19994 0.78799Z" 
            fill="var(--primary-blue)" />
        </svg>
      </a>
    </div>
    <hr class="mb-4">
    <div class="d-flex flex-nowrap overflow-auto" style="padding-left: 0.5rem; padding-right: 0.5rem; gap: 1rem;">
      @for ($i = 0; $i < 50; $i++)
        <div class="flex-shrink-0" style="width: 50%; max-width: 200px;">
          @include('inc.product-card')
        </div>
      @endfor
    </div>
  </section>
  <h1 class="text-center mb-5">footer absolutne pokazi responzivitu nemoze tam byt</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
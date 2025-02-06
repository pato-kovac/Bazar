<link rel="stylesheet" href="{{ asset('css/variables.css') }}">

<style>
  .product-card {
      width: 180px;
      height: 293px;
      padding: 8px;
      background: var(--white);
      border-radius: 4px;
      display: inline-flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      gap: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  .product-image-container {
      align-self: stretch;
      flex: 1 1 0;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      gap: 10px;
  }
  .product-image {
      align-self: stretch;
      flex: 1 1 0;
      border-radius: 4px;
  }
  .product-info {
      align-self: stretch;
      height: 62px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
  }
  .product-details {
      align-self: stretch;
      height: 62px;
      padding: 0 8px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      gap: 18px;
  }
  .product-title {
      align-self: stretch;
      color: var(--dark-gray);
      font-size: 12px;
      font-family: Arial, sans-serif;
      font-weight: 400;
      line-height: 16px;
      word-wrap: break-word;
  }
  .product-location {
      align-self: stretch;
      color: var(--dark-gray);
      font-size: 10px;
      font-family: Arial, sans-serif;
      font-weight: 400;
      line-height: 12px;
      word-wrap: break-word;
  }
  .product-pricing {
      align-self: stretch;
      height: 46px;
      padding: 6px 8px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: flex-start;
  }
  .product-old-price {
      align-self: stretch;
      height: 14px;
      color: var(--dark-gray);
      font-size: 12px;
      font-family: Arial, sans-serif;
      font-weight: 400;
      text-decoration: line-through;
      line-height: 14px;
      word-wrap: break-word;
  }
  .product-new-price {
      align-self: stretch;
      height: 20px;
      color: var(--red);
      font-size: 18px;
      font-family: Arial, sans-serif;
      font-weight: 400;
      line-height: 22px;
      word-wrap: break-word;
  }
  .product-button {
      align-self: stretch;
      height: 31px;
      padding: 8px 45px;
      background: var(--primary-blue);
      border-radius: 4px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-decoration: none;
  }
  .product-button-text {
      text-align: center;
      color: var(--white);
      font-size: 13px;
      font-family: Arial, sans-serif;
      font-weight: 400;
      line-height: 14.95px;
      word-wrap: break-word;
  }
</style>

<body>
  <div class="product-card">
    <div class="product-image-container">
        <img class="product-image" src="{{ asset('img/Product-placeholder.png') }}" />
    </div>
    <div class="product-info">
        <div class="product-details">
            <div class="product-title"><b>Patrik Rakovický, oblek pánsky, modrý</b></div>
            <div class="product-location">Dunajská Streda 929 01</div>
        </div>
    </div>
    <div class="product-pricing">
        <div class="product-old-price">6,39 €</div>
        <div class="product-new-price"><b>4,19 €</b></div>
    </div>
    <a href="#" class="product-button">
        <div class="product-button-text"><b>Mám záujem</b></div>
    </a>
  </div>
</body>

<div class="card border-0 shadow-sm h-100 p-3 rounded-2">
  <div class="d-flex flex-column align-items-center text-center h-100">
    <div class="w-100 mb-3">
      @php
        $images = json_decode($product->product_images) ?? [];
        $mainImage = $images[0] ?? 'img/Product-placeholder.png';
      @endphp
      <img src="{{ asset('storage/' . $mainImage) }}" alt="{{ $product->product_name }}"
        alt="{{ $product->product_name }}"
        class="img-fluid rounded"
        style="object-fit: cover; width: 100%; aspect-ratio: 1/1;">
    </div>
    <div class="w-100 text-start" style="flex-grow: 1">
      <h6 class="fw-bold mb-1 text-dark fs-7">
        {{ $product->product_name }}
      </h6>
      <p class="mb-2 text-muted fs-8">
        {{ $product->product_category }}
      </p>  
      <div>
        <div class="fw-bold text-danger fs-5">
          {{ $product->product_price }} €
        </div>
      </div>
    </div>
    <div class="mt-3 w-100">
      <a href="#" class="btn w-100 text-white fw-semibold bg-primary rounded-2">
        Mám záujem
      </a>
    </div>
  </div>
</div>
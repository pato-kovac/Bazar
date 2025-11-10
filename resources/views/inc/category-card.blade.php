<a href="#" class="text-decoration-none category-card">
  <div class="card text-center border-0 shadow-sm h-100 transition">
    <div class="card-body d-flex flex-column justify-content-center align-items-center py-4">
      <img src="{{ asset('img/Product-placeholder.png') }}" 
           alt="Kategória" 
           class="mb-3" 
           style="width: 60px; height: 60px; object-fit: fill;">
      <h6 class="fw-semibold text-primary mb-0">Obleky</h6>
    </div>
  </div>
</a>

<style>
.category-card .card {
  transition: all 0.3s ease;
  border-radius: 12px;
}

.category-card:hover .card {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.category-card img {
  transition: transform 0.3s ease;
}

.category-card:hover img {
  transform: scale(1.05);
}
</style>
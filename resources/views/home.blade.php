@extends('layouts.main')
@include('partials.navbar')

@section('container')
        <div class="container">
        {{-- Slideshow --}}
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/slide/flanel.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/slide/kulit.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/slide/slide1.png" class="d-block w-100 h-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h1>{{ $title }}</h1>
          <hr class="mb-5">
          @if($barang->count())
          <div class="row">
          @foreach($barang as $barangs)
          <div class="col-sm-3 mb-2">
          <a href="/detail/{{$barangs->slug}}" class="text-decoration-none text-dark">
          <div class="card" style="width: 12rem;">
                @if ($barangs->image)
                    <img src="{{ asset('storage/' . $barangs->image) }}" alt="{{ $barangs->category->name }}" class="img-fluid mt-3">
                @else
                  <img src="img/slide/flane;.png" class="card-img-top" alt="{{$barangs->image}}">
                @endif
          
          <div class="card-body">
              <p class="card-text mb-1">{{$barangs->nama_barang}}</p>
              <h5 class="card-title">Rp. {{$barangs->harga}},-</h5>
              <small class="text-secondary">{{$barangs->category->nama}}</small>
          </div>
          </div>
          </a>
          </div>
          @endforeach
          </div>
          @else
          <p class="text-center fs-3">Barang tidak ditemukan</p>
          @endif
        </div>
      </div> 
    </div>
    <div class="d-flex justify-content-center mt-5">
    {{$barang->links()}}
    </div>
</div>

<footer class="footer mt-5">
  <div class="ft">
      <div class="row justify-content-center">
              <div class="footer-col">
                <h4>Team</h4>
                <ul>
                  <li><a href="...">Aku</a></li>
                </ul>
              </div>
              <div class="footer-col">
                  <h4>Kategori</h4>
                  <ul>
                    @foreach($category as $categories)
                        <li><a href="?category={{$categories->slug}}">{{$categories->nama}}</a></li>
                    @endforeach
                  </ul>
              </div>
              <div class="footer-col">
                <h4>Ikuti kami</h4>
                  <div class="social-links">
                    <a href="..."><i class="fab fa-facebook-f"></i></a><br>
                    <a href="..."><i class="fab fa-twitter"></i></a><br>
                    <a href="..."><i class="fab fa-instagram"></i></a>
                  </div>
             </div>
             <div class="container px-4 px-lg-5 mt-1">
               <hr class="text-white">
               <p class="text-white text-center">Copyright &copy; Made With Heart</p>
             </div>
      </div>
    </div>
</footer>

@endsection
</body>
</html>
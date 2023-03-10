@extends('dashboard.layouts.main')

@section('container')
    <h1 class="mt-4 mb-2">Data Barang</h1>
    <hr class="mb-4">

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{session('success')}}
      </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
              <th scope="col">Total</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cart as $carts)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$carts->nama_produk}}</td>
                <td>{{$carts->jumlah}}</td>
                <td>@money($carts->subtotal)</td>
                <td></td>
                <td>
                    <form action="/dashboard/cart/{{$carts->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus {{$carts->nama_produk}}?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>@money($total)</td>
            <td></td>
          </tbody>
        </table>
        </div>    

        <p>Alamat saat ini : {{auth()->user()->alamat}}</p>

      <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Metode Pembayaran
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Online Payment</a></li>
        <li><a class="dropdown-item" href="#">ATM</a></li>
      </ul>
    </div>

    <div class="dropdown mt-4">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Pilih Kurir
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">JNE</a></li>
        <li><a class="dropdown-item" href="#">Sicepat</a></li>
        <li><a class="dropdown-item" href="#">GRAB</a></li>
        <li><a class="dropdown-item" href="#">Gosend</a></li>
      </ul>
    </div>  

    <a href="" class="btn btn-success mt-4">CHECKOUT</a>

@endsection
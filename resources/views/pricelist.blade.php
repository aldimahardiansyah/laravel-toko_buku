@extends('layouts/main')

@section('container')

<div class="row row-cols-1 row-cols-md-4 g-4">

    @foreach ($books as $book)

    <div class="col">
      <div class="card">
        <img src="{{ url("storage/pictures/book/" . $book['cover'] . ".jpg") }}" class="card-img-top" alt="gambar {{ $book['judul'] }}">
        <div class="card-body">
          <h5 class="card-title mb-0">{{ $book['judul'] }}</h5>
          <small class="card-text text-muted">Oleh: {{ $book['penulis'] }}</small>
          <h6 class="card-text text-danger mt-2">Harga: Rp. {{ $book['harga'] }}</h6>
        </div>
      </div>
    </div>

    @endforeach

</div>

@endsection
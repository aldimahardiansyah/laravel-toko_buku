@extends('layouts/main')

@section('container')

<div class="row row-cols-1 row-cols-md-6 g-4">

    @foreach ($books as $book)

    <div class="col">
      <div class="card">
        <img src="{{ url("storage/pictures/book/" . $book['cover'] . ".jpg") }}" height="220em" class="card-img-top" alt="gambar {{ $book['judul'] }}">
        <div class="card-body">
          <h5 class="card-title mb-0" style="font-size: 0.9em">{{ $book['judul'] }}</h5>
          <small class="card-text text-muted p-0" style="font-size: 0.7em;">Oleh: {{ $book['penulis'] }}</small>
          <h6 class="card-text text-danger mt-2" style="font-size: 0.8em">Harga: Rp. {{ $book['harga'] }}</h6>
        </div>
      </div>
    </div>

    @endforeach

</div>

@endsection
@extends('layout/main')

@section('title', 'Daftar Barang')

@section('container')
<div class="container ">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-5">Daftar Barang</h1>

      <a href="/items/create" class="btn btn-primary my-3">Tambah Data</a>

      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      
      <ul class="list-group">
        @foreach ($items as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $item->name}}
          <a href="/items/{{ $item->id }}" class="badge badge-info">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
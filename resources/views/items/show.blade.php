@extends('layout/main')

@section('title', 'Detail Barang')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $item->name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $item->quantity }}</h6>
          <p class="card-text">{{ $item->price }}</p>
          <p class="card-text">{{ $item->manufacturer }}</p>
          
          <a href="{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
          <!-- harus menggunakan button sehingga lebih aman, apalagi kalo ada orang jail yang ngetikin url dan idnya -->
          <form action="{{ $item->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/items" class="card-link">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
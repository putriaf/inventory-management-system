@extends('layout/main')

@section('title', 'Form Ubah Data Barang')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Form Ubah Data Barang</h1>

      <form method="POST" action="/items/{{ $item->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="name">Item Name</label>
          <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" placeholder="Masukkan name" name="name" value="{{ $item->name }}">
          @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control @if($errors->has('quantity')) is-invalid @endif" id="quantity" placeholder="Masukkan quantity" name="quantity" value="{{ $item->quantity }}">
          @if ($errors->has('quantity'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('quantity') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" class="form-control" id="price" placeholder="Masukkan price" name="price" value="{{ $item->price }}">
        </div>
        <div class="form-group">
          <label for="manufacturer">Manufacturer</label>
          <input type="text" class="form-control" id="quantity" placeholder="Masukkan manufacturer" name="manufacturer" value="{{ $item->manufacturer }}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data!</button>
      </form>

    </div>
  </div>
</div>
@endsection
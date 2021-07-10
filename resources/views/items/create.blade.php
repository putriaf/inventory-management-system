@extends('layout/main')

@section('title', 'Form Tambah Data Barang')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Form Tambah Data Barang</h1>

      <form method="POST" action="/items">
        @csrf
        <div class="form-group">
          <label for="name">name</label>
          <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" placeholder="Masukkan name" name="name" value="{{ old('name') }}">
          @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <label for="quantity">quantity</label>
          <input type="text" class="form-control @if($errors->has('quantity')) is-invalid @endif" id="quantity" placeholder="Masukkan quantity" name="quantity" value="{{ old('quantity') }}">
          @if ($errors->has('quantity'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('quantity') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <label for="price">price</label>
          <input type="text" class="form-control" id="price" placeholder="Masukkan price" name="price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
          <label for="manufacturer">manufacturer</label>
          <input type="text" class="form-control" id="quantity" placeholder="Masukkan manufacturer" name="manufacturer" value="{{ old('manufacturer') }}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
      </form>

    </div>
  </div>
</div>
@endsection
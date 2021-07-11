@extends('layout/main')

@section('title', 'Manta | Your Reliable Inventory Manager ')

@section('container')
<div class="container">
  <div class="row">
    <div class="greetings col-6">
        <h1>Hello, Mantanians!</h1>
        <p>Grab your easy and light management system for any need!</p>
        <a href="#" class="">Start Now</a>
    </div>
    <div class="jumbo-img col-6 d-flex justify-content-end">
      <img src="{{ asset('/img/jumbotron.png') }}" alt="" width="450">
    </div>
  </div>
</div>
@endsection
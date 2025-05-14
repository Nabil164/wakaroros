@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
<section class="katalog" id="katalog">
 <h2>
  Katalog
 </h2>
 <div class="katalog-grid">
  <div>
   <img alt="Motif Wakaroros" src="{{ asset('images/page1_img6.jpeg') }}"/>
   <p>
    Motif Wakaroros
   </p>
  </div>
  <div>
   <img alt="Motif Wakaroros" src="{{ asset('images/page1_img7.png') }}"/>
   <p>
    Motif Wakaroros
   </p>
  </div>
  <div>
   <img alt="Motif Pakis" src="{{ asset('images/page1_img8.png') }}"/>
   <p>
    Motif Pakis
   </p>
  </div>
 </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Nilai')

@section('content')
<section class="nilai" id="nilai">
 <div class="nilai-kiri">
  <h2>
   Nilai-nilai Kehidupan
  </h2>
  <h3>
   Batik Wakaroros
  </h3>
  <div class="nilai-item">
   <h4>
    <strong>
     01 Nilai Kehidupan
    </strong>
   </h4>
   <p>
    Motif Akaroros melambangkan Kutai Timur yang dipenuhi kekayaan alam terutama pepohonan yang berlimpah ruah.
   </p>
  </div>
  <div class="nilai-item">
   <h4>
    <strong>
     02 Nilai Kemanusiaan
    </strong>
   </h4>
   <p>
    Nilai-nilai kemanusiaan mengangkat harkat dan martabat dari pelaku UMKM Masyarakat di Kabupaten Kutai Timur.
   </p>
  </div>
 </div>
 <div class="nilai-kanan">
  <div class="gambar-kotak">
   <img alt="Nilai 1" src="{{ asset('images/page1_img4.jpeg') }}"/>
   <img alt="Nilai 2" src="{{ asset('images/page1_img5.jpeg') }}"/>
  </div>
 </div>
</section>

@endsection

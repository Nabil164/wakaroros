@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- Beranda -->
<section class="beranda" id="beranda">
  <div class="judul">
    Batik<br/>Wakaroros
  </div>
  <img alt="Batik Wakaroros" class="gambar-kanan" src="{{ asset('images/page1_img1.png') }}"/>
</section>

<!-- Sejarah -->
<section class="sejarah" id="sejarah">
 <h2>
  Sejarah
 </h2>
 <h1>
  BATIK Wakaroros
 </h1>
 <p>
  Merupakan sentra batik Kutai Timur yang ditinggali masyarakat Suku Dayak Basap, sehingga teknik membatik dipadukan dengan motif ukir Akar Oros (wakaroors) yaitu tanaman pakis yang menjuntai di pedalaman Kutai Timur.
 </p>
</section>

<!-- Nilai -->
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

<!-- Katalog -->
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

<!-- Kontak -->
<section class="kontak" id="kontak">
 <h2>
  Kontak
 </h2>
 <img alt="Kontak Ilustrasi" src="{{ asset('images/page1_img9.jpeg') }}"/>
 <p>
  <strong>
   📞
  </strong>
  <a href="https://wa.me/628115413333" style="color: #25D366;" target="_blank">
   0811-541-3333
  </a>
 </p>
 <p>
  <strong>
   📧
  </strong>
  <a href="mailto:juwita_batik@gmail.com" style="color: #D44638;">
   juwita_batik@gmail.com
  </a>
 </p>
 <p>
  <strong>
   📸
  </strong>
  <a href="https://www.instagram.com/juwitabatik_kabojayasgt?igsh=MW0zbWdqZnNucThubA==" style="color: #C13584;" target="_blank">
   @juwitatatik_kabojayasgt
  </a>
 </p>
</section>

@endsection

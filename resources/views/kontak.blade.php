@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
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

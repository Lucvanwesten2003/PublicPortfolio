@extends ('layout')

@section('header')
@endsection

@section('content')
  <img class="middenfoto" src="img\codebackground.jpg">
  <div class="tekstvak1">
    <h1 class="titel">Wie ben ik?</h1>
    <img class="fotoik" src="img\ik.jpg">
    <ul>
    <li>Ik ben Luc van Westen, ik ben 17 jaar oud en woon in 's-Gravenpolder.</li>
    <li>Ik deed de HAVO op het Pontes in Goes met het profiel Economie & Maatschapij.</li>
    <li>Mijn hobbies zijn gamen,youtube kijken,netflix kijken, etc.</li>
    <li>Mijn kenmerken zijn: Eerlijk en hardwerkend.</li>
</ul>
 <h2> Een paar van mijn favorieten films zijn:</h2>
<div class="gallery">
    <a target="_blank" href="img\inceptiongoed.jpg">
      <img src="img\inceptiongoed.jpg" alt="Inception" width="225" height="320">
    </a>
    <div class="desc">Inception</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="img\interstellar.jpg">
      <img src="img\interstellar.jpg" alt="Interstellar">
    </a>
    <div class="desc">Interstellar</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="img\wolf.jpg">
      <img src="img\wolf.jpg" alt="Wolf of Wallstreet" >
    </a>
    <div class="desc">Wolf of Wallstreet</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="img\shaw.jpg">
      <img src="img\shaw.jpg" alt="Shaw Shank Redemption">
    </a>
    <div class="desc">Shaw Shank Redemption</div>
  </div>

</div>
    @endsection

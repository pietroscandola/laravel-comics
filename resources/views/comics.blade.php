@php
    $comics = config('comics');
@endphp
@extends('layouts.main')

@section('title', 'Comics')

@section('content')
<main>    
    <section class="bg-black">
      <div class="container pos-relative">

        <button class="pos-absolute">CURRENT SERIES</button>

        <div class="cards">
            @foreach($comics as $comic)
                <div class="card">
                    <figure>
                    <img src="{{ $comic['thumb']}}" alt="{{ $comic['series'] }}" />
                    </figure>            
                    <h4>{{ $comic['series'] }}</h4>
                </div>
            @endforeach           
        </div>
        <div class="center-button">
          <button>LOAD MORE</button>
        </div>
      </div>
    </section>

    <section class="bg-lightblue">
        <div class="container">
          <ul class="d-flex">
            <li  class="d-flex">
              <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="DIGITAL COMICS">
              <a href="#">DIGITAL COMICS</a>
            </li>                   
            <li  class="d-flex">
              <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="DC MERCHANDISE">
              <a href="#">DC MERCHANDISE</a>
            </li>                   
            <li  class="d-flex">
              <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="SUBSCRIPTION">
              <a href="#">SUBSCRIPTION</a>
            </li>                   
            <li  class="d-flex">
              <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="COMIC SHOP LOCATOR">
              <a href="#">COMIC SHOP LOCATOR</a>
            </li>                   
            <li  class="d-flex">
              <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="PC POWER VISA">
              <a href="#">PC POWER VISA</a>
            </li>                   
          </ul>
        </div>
      </section>
      
  </main>

@endsection
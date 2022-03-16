@extends('layouts.main')

@section('title', 'Comic')

@section('content')
    <section id="comic">
        <div class="bg-dodgerblue">
            <div class="container">
                <div class="figure">
                    <img id="img" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">                    
                </div>
            </div>
        </div>       
        
        <div class="container d-flex">
            <div class="description">
                <h1>{{ $comic['title']}}</h1>
                <div class="bg-green">
                    <div class="price">
                        <p><span class="green">U.S. Price:</span><span class="white">{{ $comic['price']}}</span></p>
                        
                    </div>
                    <div class="available">AVAILABLE</div>
                    <div>
                        <p><span class="white">Check Availability</span>  <span class="arrow-down white">&#9660;</span></p>
                    </div>
                </div>
                <p class="text">{{ $comic['description']}}</p>

            </div>
            <div class="advertising">
                <img src="{{ asset('../images/adv.jpg')}}" alt="Adv">
            </div>
        </div>

        <div class="bg-gray">
            <div class="container boxs">
                <div class="talents">
                    <h2 class="color-text">Talent</h2>
                    <div class="row">
                        <div class="col">Art by:</div>
                        <div class="col-9 text-lightblue">
                        @foreach($comic['artists'] as $artist)
                        {{$artist}}
                        @if(!$loop->last),@endif                        
                        @endforeach
                        </div>              
                    </div>
                    <div class="row">
                        <div class="col">Written by:</div>
                        <div class="col-9 text-lightblue">
                            @foreach($comic['artists'] as $writer)
                        {{$writer}}
                        @if(!$loop->last),@endif                        
                        @endforeach
                        </div>
                    </div>
                </div>  
                <div class="specs">
                    <h2 class="color-text">Specs</h2>
                    <div class="row">
                        <div class="col">Series:</div>
                        <div class="col-9 text-lightblue">{{$comic['series']}}</div>     
                        
                    </div>
                    <div class="row">
                        <div class="col">U.S. Price:</div>
                        <div class="col-9">{{$comic['price']}}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col">On Sale Date:</div>
                        <div class="col-9">{{$comic['sale_date']}}</div>
                    </div>
                </div>  
            </div>
        </div>

        <div class="bg-gray">
            <div class="container">
                <ul class="lista">
                  <li  class="d-flex">
                    <a class="tag" href="#">DIGITAL COMICS</a>
                    <img class="dimension-img" src="{{asset('images/buy-comics-digital-comics.png')}}" alt="DIGITAL COMICS">                    
                  </li>                   
                  <li  class="d-flex">
                    <a class="tag" href="#">DC MERCHANDISE</a>
                    <img class="dimension-img" src="{{asset('images/buy-comics-merchandise.png')}}" alt="DC MERCHANDISE">                    
                  </li>                   
                  <li  class="d-flex">
                    <a class="tag" href="#">SUBSCRIPTION</a>
                    <img class="dimension-img" src="{{asset('images/buy-comics-subscriptions.png')}}" alt="SUBSCRIPTION">                    
                  </li>                   
                  <li  class="d-flex">
                    <a class="tag" href="#">COMIC SHOP LOCATOR</a>
                    <img class="dimension-img" src="{{asset('images/buy-comics-shop-locator.png')}}" alt="COMIC SHOP LOCATOR">                    
                  </li>
                </ul>
            </div>
        </div>

        
        
        
    </section>

@endsection
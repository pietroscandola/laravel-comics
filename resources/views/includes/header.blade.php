@php
$links = config('main_menu');

@endphp

<div class="top-header">
    <div class="container">
        <a href="#">DC POWER™VISA®</a>
        <a href="#">ADDITIONAL DC SITES▼</a>
    </div>
</div>
<header class="bg-white">
    <div class="container">            
        <nav>
            <div class="row d-flex">
                <div class="col-left">
                  <figure>
                    <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC" />
                  </figure>
                </div>
                <div class="col-center">
                  <ul class="d-flex">
                      @foreach($links as $link)
                        <li class="{{ request()->routeIs($link['route_name']) ? 'active' : '' }}">
                            <a class="{{ request()->routeIs($link['route_name']) ? 'active' : '' }}"href="{{ route($link['route_name']) }}">{{ $link['text']}}</a>
                        </li>
                      @endforeach                                                          
                  </ul>
                </div>
                <div class="col-right">
                    <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </nav>
    </div>
    <section class="bg-image"></section>
</header>  
@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-lg-7 px-0">
    <h2 class="display-4 text-danger">{{ config('app.name', 'Larabnb') }}</h2>
    <p>
      <b style="font-size: 1.8em;">Book unique homes and experence a city like a local.</b>
    </p>
    <form action="">
      <div class="form-group">
        <input type="text" class="form-control" placeholder='Try "Osaka"' />
      </div>
    </form>
  </div>
</div>

<div class="row mt-5">
  <div class="col-lg-12 px-0">
    <h4>Explore Airbnb</h4>
  </div>
  <div class="col-lg-12 px-0">
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="row">
            <div class="col-lg-6">
                <img src="http://lorempixel.com/50/50?72748" height="60px" width="100%" alt="">
            </div>
            <div class="col-lg-6">
              <p class="mt-3 pl-1">
                <b><a href="{{ route('home-listings.all') }}">Homes</a></b>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="row">
            <div class="col-lg-6">
                <img src="http://lorempixel.com/50/50?72748" height="60px" width="100%" alt="">
            </div>
            <div class="col-lg-6">
              <p class="mt-3 pl-1">
                <b>Experiences</b>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="row">
            <div class="col-lg-6">
                <img src="http://lorempixel.com/50/50?72748" height="60px" width="100%" alt="">
            </div>
            <div class="col-lg-6">
              <p class="mt-3 pl-1">
                <b>Restaurants</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-lg-12 px-0">
    <h4>Recommended for you</h4>
  </div>
  <div class="col-lg-12 pl-0">
    <div class="row">
      <div class="col-lg-3 pr-1">
        <div class="card border-0 bg-dark text-white">
          <img class="card-img" src="http://lorempixel.com/280/200/?82462" height="280px" width="150px" alt="Card image">
          <div class="card-img-overlay mt-5 text-center">
            <h4 class="card-title m-0"><b>Paris</b></h4>
            <p class="card-title"><b>$110/night average</b></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 pr-1">
        <div class="card border-0 bg-dark text-white">
          <img class="card-img" src="http://lorempixel.com/280/200/?87462" height="280px" width="150px" alt="Card image">
          <div class="card-img-overlay mt-5 text-center">
            <h4 class="card-title m-0"><b>Paris</b></h4>
            <p class="card-title"><b>$110/night average</b></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 pr-1">
        <div class="card border-0 bg-dark text-white">
          <img class="card-img" src="http://lorempixel.com/280/200/?85472" height="280px" width="150px" alt="Card image">
          <div class="card-img-overlay mt-5 text-center">
            <h4 class="card-title m-0"><b>Paris</b></h4>
            <p class="card-title"><b>$110/night average</b></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 pr-1">
        <div class="card border-0 bg-dark text-white">
          <img class="card-img" src="http://lorempixel.com/280/200/?85562" height="280px" width="150px" alt="Card image">
          <div class="card-img-overlay mt-5 text-center">
            <h4 class="card-title m-0"><b>Paris</b></h4>
            <p class="card-title"><b>$110/night average</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-lg-12 px-0">
    <h4><a href="{{ route('home-listings.all') }}">Homes</a></h4>
  </div>
  <div class="col-lg-12 pl-0">
    <div class="row">
      @foreach($listings as $listing)
        <div class="col-lg-3 pr-1">
            <div class="card border-0">
              <img src="{{$listing->photos}}" height="200px" width="300px" alt="{{$listing->name}}" class="card-img-top">
              <div class="card-body px-0">
                <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">{{ $listing->user->name }}</p>
                <p class="card-title py-0 m-0"><b><a href="{{ route('single.listing.show', ['id' => $listing->id]) }}">{{ $listing->name }}</a></b></p>
                <p class="card-text py-0 m-0">${{ $listing->price }} per person</p>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-lg-12 pl-0">
    <h4>Experiences</h4>
  </div>
  <div class="col-lg-12 pl-0">
    <div class="row">
      <div class="col-lg-3 pr-1">
        <div class="card border-0">
          <img src="http://lorempixel.com/330/300/?75452" height="330px" width="300px" alt="POST" class="card-img-top">
          <div class="card-body px-0">
            <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
            <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
            <p class="card-text py-0 m-0">$138 per person</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 pr-1">
        <div class="card border-0">
          <img src="http://lorempixel.com/330/300/?81522" height="330px" width="300px" alt="POST" class="card-img-top">
          <div class="card-body px-0">
            <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
            <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
            <p class="card-text py-0 m-0">$138 per person</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 pr-1">
        <div class="card border-0">
          <img src="http://lorempixel.com/330/300/?65452" height="330px" width="300px" alt="POST" class="card-img-top">
          <div class="card-body px-0">
            <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
            <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
            <p class="card-text py-0 m-0">$138 per person</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 pr-1">
        <div class="card border-0">
          <img src="http://lorempixel.com/330/300/?85492" height="330px" width="300px" alt="POST" class="card-img-top">
          <div class="card-body px-0">
            <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
            <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
            <p class="card-text py-0 m-0">$138 per person</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

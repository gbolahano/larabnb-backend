@extends('layouts.app')

@section('content')

<div class="row mt-5">
      <div class="col-lg-12 px-0">
        <h4>Travel the world with Airbnb</h4>
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
                    <b>Paris</b>
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
                    <b>New York</b>
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
                    <b>Sydney</b>
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
        <h4>Where to stay</h4>
      </div>
      <div class="col-lg-12 pl-0">
        <div class="row">
	      @foreach($listings as $listing)
	        <div class="col-lg-3 mb-3 pr-1">
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


@endsection
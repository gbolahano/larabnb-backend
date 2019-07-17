@extends('layouts.main')

@section('main')
<div class="row mt-5">
    <div class="col-lg-12 px-0">
      <h4>Your Listings</h4>
    <a href="{{ route('listings.create') }}" class="btn btn-primary">Add new listing</a>
    </div>
    <div class="col-lg-12 pl-0">
      <div class="row">
        @if(count($listings) == 0)
          <h6>No Listings</h6>
        @else
          
          @foreach($listings as $listing)
            <div class="col-lg-3 pr-1 mb-3">
              <div class="card border-0">
                <img src="{{ $listing->photos }}" height="200px" width="300px" alt="POST" class="card-img-top">
                <div class="card-body px-0">
                  <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">{{ $listing->user->name}}</p>
                  <a href="{{ route('listings.show', ['id' => $listing->id ]) }}" class="card-title py-0 m-0"><b>{{ $listing->name }} - {{ $listing->id }}</b></a>
                  <p class="card-text py-0 m-0">${{$listing->price}} per person</p>
                  <a class="btn btn-sm btn-outline-danger" href="{{ route('listings.delete', ['id' => $listing->id ]) }}">Delete</a>
                  <a href="{{ route('listings.edit', ['id' => $listing->id]) }}" class="btn btn-outline-primary btn-sm">Update</a>
                </div>
              </div>
            </div>
          @endforeach

        @endif
      </div>
    </div>
  </div>

  {{-- <div class="row mt-5">
    <div class="col-lg-12 pl-0">
      <h4>Experiences</h4>
      <a href="{{ route('listings.create') }}" class="btn btn-primary">Add new experience</a>
    </div>
    <div class="col-lg-12 pl-0">
      <div class="row">
        <div class="col-lg-3 pr-1">
          <div class="card border-0">
            <img src="http://lorempixel.com/330/300/?85452" height="330px" width="300px" alt="POST" class="card-img-top">
            <div class="card-body px-0">
              <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
              <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
              <p class="card-text py-0 m-0">$138 per person</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 pr-1">
          <div class="card border-0">
            <img src="http://lorempixel.com/330/300/?85452" height="330px" width="300px" alt="POST" class="card-img-top">
            <div class="card-body px-0">
              <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
              <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
              <p class="card-text py-0 m-0">$138 per person</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 pr-1">
          <div class="card border-0">
            <img src="http://lorempixel.com/330/300/?85452" height="330px" width="300px" alt="POST" class="card-img-top">
            <div class="card-body px-0">
              <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
              <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
              <p class="card-text py-0 m-0">$138 per person</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 pr-1">
          <div class="card border-0">
            <img src="http://lorempixel.com/330/300/?85452" height="330px" width="300px" alt="POST" class="card-img-top">
            <div class="card-body px-0">
              <p style="font-size: 0.8em;" class="card-text py-0 m-0 text-muted">COOKING CLASS.FLORENCE</p>
              <p class="card-title py-0 m-0"><b>Cooking class in the Chianti Hills</b></p>
              <p class="card-text py-0 m-0">$138 per person</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
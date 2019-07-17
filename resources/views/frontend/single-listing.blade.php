@extends('layouts.app')

@section('content')
@include('includes.errors')
<div class="row mt-5">
      <div class="col-lg-8 px-0">
        <h2>{{ $listing->name }}</h2>
        <h5>London</h5>
        <div class="col-lg-12 px-0">
          <div class="row">
            <div class="col-lg-5">
              <div class="card">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="http://lorempixel.com/50/50?72748" height="60px" width="100%" alt="">
                  </div>
                  <div class="col-lg-8">
                    <p class="mt-3 pl-1">
                      <b>Ermelo Swasad kas</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h4>The Space</h4>
        <div>
          <p>
            {{ $listing->description }}
          </p>
        </div>
        <div class="row mt-5">
          <h2>Amenities</h2>
          <div class="col-lg-12">
            <div class="row">
              @foreach ($listing->amenities as $amenity)
                <div class="col-lg-3">
                  <div class="card text-center p-2">
                    {{$amenity->name}}
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <h2>Reviews</h2>
          <div class="col-lg-12">
            @foreach ($listing->reviews as $review)
              <div class="media">
                <img class="align-self-start mr-3" src="http://lorempixel.com/50/50?87293" width="50px" height="50px"
                  alt="user image">
                <div class="media-body">
                  <h5 class="mt-0">{{$review->user->name}}</h5>
                  <p>{{$review->content}}</p>
                </div>
              </div>
            @endforeach
          </div>
          @if (Auth::check())
            <div class="col-lg-12 mt-5">
              <div class="card">
                <div class="card-header">
                  Leave a review
                </div>
                <div class="card-body">
                  <form action="{{ route('review.store', ['listing_id' => $listing->id]) }}" method="post">
                    @csrf
                    <div class="form-group">
                      <textarea class="form-control" name="content" rows="8" cols="80"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">post</button>
                  </form>
                </div>
              </div>
            </div>
          @else
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  Sign In to leave a review
                </div>

              </div>
            </div>
          @endif
        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <h2>Home Pictures</h2>
            <div class="row">
              <div class="col-lg-4">
                <img src="{{$listing->photos}}" width="100%" height="300px" alt="{{$listing->name}}">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <div><b>${{ $listing->price }}</b> per night</div>
            <form action="{{ route('home-listings.book', ['id' => $listing->id ]) }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="">Dates from</label>
                <input type="date" name="date_from" placeholder="date_from" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Dates to</label>
                <input type="date" name="date_to" placeholder="date_to" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Guests</label>
                <input class="form-control" name="no_of_guests" type="number" placeholder="Guests">
              </div>
              @if(Auth::check())
                <button class="btn btn-danger">Book</button>
              @else
                <a href="{{ url('/login') }}" class="btn btn-danger">Login to Book</a>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>


@endsection

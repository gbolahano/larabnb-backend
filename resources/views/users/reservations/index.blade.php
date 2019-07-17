@extends('layouts.main')

@section('main')
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 px-0">
        <h2>{{ $reservation->listing->name }}</h2>
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
            {{ $reservation->listing->description }}
          </p>
        </div>
        <div class="row mt-5">
          <h2>Amenities</h2>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-5">
                ! Wifi
              </div>
              <div class="col-lg-5">
                ! Hair dryer
              </div>
              <div class="col-lg-5">
                ! Air conditioning
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <h2>Reviews</h2>
          <div class="col-lg-12">
            <div class="media">
              <img class="align-self-start mr-3" src="http://lorempixel.com/50/50?87293" width="50px" height="50px"
                alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Mofi April, 2019</h5>
                <p>I had a great time on this experience with Supal. I intentionally picked hers for the combination of
                  history, photography tips and the pictures at the end and neither disappointed. It was a wonderful
                  surprise to hear that proceeds from this will be going to a local charity in the Nottinghill area.
                  Supal was very warm, friendly, engaging and (I can keep using great adjectives to describe her). It
                  was so effortless hanging out with her for the hours spent together. As others have said, it felt like
                  meeting up with a friend. I took some fantastic pictures and also got really great pictures also. I
                  would definitely recommend.</p>
              </div>
            </div>
            <div class="media">
              <img class="align-self-start mr-3" src="http://lorempixel.com/50/50?87293" width="50px" height="50px"
                alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Mofi April, 2019</h5>
                <p>I had a great time on this experience with Supal. I intentionally picked hers for the combination of
                  history, photography tips and the pictures at the end and neither disappointed. It was a wonderful
                  surprise to hear that proceeds from this will be going to a local charity in the Nottinghill area.
                  Supal was very warm, friendly, engaging and (I can keep using great adjectives to describe her). It
                  was so effortless hanging out with her for the hours spent together. As others have said, it felt like
                  meeting up with a friend. I took some fantastic pictures and also got really great pictures also. I
                  would definitely recommend.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <h2>Home Pictures</h2>
            <div class="row">
              <div class="col-lg-4">
                <img src="{{ $reservation->listing->photos }}" width="100%" height="300px" alt="post">
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <div><b>${{ $reservation->listing->price }}</b> per night</div>
            <form action="">
              <div class="form-group">
                <label for="">Dates</label>
                <input type="date" placeholder="Date" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Guests</label>
                <input class="form-control" type="number" placeholder="Guests">
              </div>
              <button class="btn btn-danger">Request to Book</button>
            </form>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection
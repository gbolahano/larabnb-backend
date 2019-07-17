@extends('layouts.main')

@section('main')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">Pending Requests</div>
        <div class="card-body">
          <table class="table">
            <tbody>
              @if(count($bookings) == 0)
                <h6>No Pending Requests</h6>
              @else
                @foreach($bookings as $booking)
                
                <tr>
                  <td>{{ $booking->user->name }}</td>
                  <td>{{ $booking->listing->name }}</td>
                  <td>
                    <a href="{{ route('reservation.accept', ['id' => $booking->id]) }}" class="btn btn-success">Accept</a>
                    <a href="{{ route('reservation.decline', ['id' => $booking->id]) }}" class="btn btn-danger">Decline</a>
                  </td>
                  <td>{{ $booking->date_from }} - {{ $booking->date_to }}</td>
                  <td>{{ $booking->no_of_guests }} guests ${{ $booking->price }}</td>
                </tr>

                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card-header">Your Reservations</div>
    </div>
    <div class="col-lg-12 mt-2">
      <div class="row">
        @foreach($reservations as $reservation)
          <div class="col-lg-3 mb-3">
            <div class="card">
              <img src="{{ $reservation->listing->photos }}" width="100%" height="200px" alt="image" class="card-img-top">
              <div class="card-body">
                <p class="card-title">{{ $reservation->date_from }} - {{ $reservation->date_to }}</p>
                <a href="{{ route('reservation.show', ['id' => $reservation->id]) }}" class="card-title">{{ $reservation->listing->name }}</a>
                <br />
                <a class="btn btn-outline-danger btn-sm card-title" href="{{ route('reservation.delete', ['id' => $reservation->id]) }}">Cancel</a>
                <div class="card-title">
                  <p>Status: </p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.main')

@section('main')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">Pending Requests</div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td>Lewis Hamilton</td>
                <td>Reservation Request</td>
                <td>dec 6 - 10</td>
                <td>4 guests $500</td>
              </tr>
              <tr>
                <td>Lewis Hamilton</td>
                <td>Reservation Request</td>
                <td>dec 6 - 10</td>
                <td>4 guests $500</td>
              </tr>
              <tr>
                <td>Lewis Hamilton</td>
                <td>Reservation Request</td>
                <td>dec 6 - 10</td>
                <td>4 guests $500</td>
              </tr>
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
        <div class="col-lg-3">
          <div class="card">
            <img src="http://lorempixel.com/300/200?35791" width="100%" height="200px" alt="image" class="card-img-top">
            <div class="card-body">
              <p class="card-title">Dec 5 - 9</p>
              <p class="card-title">Mathew 2 nights</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
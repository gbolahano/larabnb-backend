@extends('layouts.main')

@section('main')
<div class="container mb-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
        <div class="card-header">
          <h4>Profile</h4>
          <div class="">
            <a href="{{ route('users.profile.edit') }}" class="btn btn-primary btn-sm">Update</a>
          </div>
        </div>
          <div class="row m-3">
            <div class="col-lg-6">
              <img src="http://lorempixel.com/400/400?92738" class="img-rounded" alt="" />
            </div>
            <div class="col-lg-6">
              <h6>! {{ Auth::user()->name }}</h6>
              <h6>! London</h6>
              <h6>! Member: {{ Auth::user()->created_at->diffForHumans() }}</h6>
              <h6>! About You</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab eos quibusdam sed, excepturi corrupti tenetur rem fugiat architecto provident veritatis, enim fugit maiores. Autem beatae quam voluptates. Omnis, mollitia sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ea deleniti assumenda sunt fuga, iste aspernatur aliquid dicta accusamus est eligendi nisi expedita cupiditate maiores voluptates corrupti consequatur provident quas!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
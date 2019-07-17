@extends('layouts.main')

@section('main')
<div class="row">

    <div class="col-lg-9 mb-5">
      <h2>Create Listing</h2>
      <form action="{{ route('users.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input name="name" type="text" class="form-control" placeholder="Fullname" />
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-success">Update Profile</button>
        </div>
      </form>
    </div>
  </div>
@endsection
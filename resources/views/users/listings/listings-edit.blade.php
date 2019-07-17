@extends('layouts.main')

@section('main')
<div class="row">

    <div class="col-lg-9 mb-5">
      <h2>Update Listing</h2>
      <form action="{{ route('listings.update', ['id' => $listing->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input name="name" type="text" class="form-control" value="{{ $listing->name }}" placeholder="Name" />
        </div>
        <div class="form-group">
          <input name="price" type="number" value="{{ $listing->price }}" class="form-control" placeholder="price" />
        </div>
        <div class="form-group">
          <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description">{{ $listing->description }}</textarea>
        </div>
        <div class="form-group">
          <input name="photos" type="file" class="form-control">
        </div>
        <div class="form-group">
          @foreach ($amenities as $amenity)
            <input class="" type="checkbox" name="amenities[]" value="{{ $amenity->id }}"
              @foreach ($listing->amenities as $amenity_list)
                @if ($amenity->id == $amenity_list->id)
                  checked
                @endif
              @endforeach
            >{{$amenity->name}}
          @endforeach
        </div>
        <div class="form-group">
          <select name="status" id="" class="form-control">
            <option value="">Choose Availablity</option>
            <option value="1">True</option>
            <option value="0">False</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Save Listing</button>
        </div>
      </form>
    </div>
  </div>
@endsection

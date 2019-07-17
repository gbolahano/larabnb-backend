<div class="row">
  <div class="col-lg-12">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
          <p>Alert! {{ $error }}</p>
        @endforeach
    @endif
  </div>
</div>
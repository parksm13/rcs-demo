@extends('layouts.app')

@section('content')

<div class="container" id="store">
  <div class="row profile">
    <div class="col-md-3">
      <div class="profile-usermenu">
        <ul class="nav">
          @foreach ($stores as $store)
          <li>
          <a href="#{{ $store->store_name }}" data-toggle="tab"> 
            <i class="fa fa-building-o" aria-hidden="true"></i> {{ $store->store_name }}
          </a>
        </li>
        @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-9">
    @foreach ($stores as $store)
        <div class="profile-content">
           <p> {{ $store }} </p>
        </div>
        @endforeach
    </div>
</div>
@endsection



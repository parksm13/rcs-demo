@extends('layouts.app')

@section('content')

<div class="container" id="store">
  <div class="row profile">
    <div class="col-md-3">
      <div class="profile-usermenu">
        <ul class="nav">
        @foreach ($stores as $store)
            <li>
              <a href="#{{$store->name}}" data-toggle="tab"> 
                <i class="fa fa-building-o" aria-hidden="true"></i> {{$store->name}}
              </a>
            </li>
        @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-9">
    @foreach ($stores as $store)
        <div class="profile-content">
            Some user related content goes here...
        </div>
        @endforeach
    </div>
</div>
@endsection



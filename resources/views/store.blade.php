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
	<div class="container">
	  <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
		<div class="panel-heading">{{ $store->store_name }}</div>

		<div class="panel-body">
                  @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                  @endif
		  <ul class="list-group">
		    <li class="list-group-item">{{ $store->address }}</li>
		    <li class="list-group-item">{{ $store->location }}</li>
		  </ul>
		</div>
              </div>
            </div>
	  </div>
	</div>
      </div>
      @endforeach
    </div>
  </div>
  @endsection

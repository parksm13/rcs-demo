@extends('layouts.app')

@section('content')

<!-- Custom styles for this template -->
<link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Welcome to RCS!</h1>
      <p>Explore all the ways to shop for the items you love!</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">

    <!-- Example row of columns -->

    <div class="row">
      <div class="col-md-4">
	<h2>Find a Store Near You</h2>
	<p>Great shopping is just a click away!</p>
	<p><a class="btn btn-secondary" href="/store" role="button">Look For Stores &raquo;</a></p>
      </div>
      <div class="col-md-4">
	<h2>Manage My Lists</h2>
	<p>Forgetting things is a thing of the past! </p>
	<p><a class="btn btn-secondary" href="#" role="button">Look At My Lists &raquo;</a></p>
      </div>
      <div class="col-md-4">
	<h2>Manage My Settings</h2>
	<p>Make everything just for you!</p>
	<p><a class="btn btn-secondary" href="#" role="button">Change My Settings &raquo;</a></p>
      </div>
    </div>

    <hr>

    <!--
	<div class="container">
	  <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                  @endif
		  
                  <p>You are logged in! No I am not</p>

		  <p>Select Store</p>
                </div>
              </div>
            </div>
	  </div>
	</div>

	-->
    @endsection

@extends('layouts.app')

@section('content')
  Store Page

  <!-- this output isn't working yet -->
  @foreach ($stores as $store)
    <li> {{ $store }} </li>
  @endforeach
  
@endsection

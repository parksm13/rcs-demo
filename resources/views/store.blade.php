@extends('layouts.app')

@section('content')
  Store Page

  @foreach ($stores as $store)
    <li> {{ $store }} </li>
  @endforeach
  
@endsection

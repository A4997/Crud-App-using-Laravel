@extends('layout')

@section('pagetitle')
  Staff Info
@endsection


@section('pagecontent')
  <h1>Staff Names:</h1>
  <ul>
    @foreach ($staff_names as $name)
    <li>{{$name}}</li>
    @endforeach
  </ul>
@endsection

@extends('layout')

@section('pagetitle')
  View Customer Profile
@endsection

@section('pagecontent')
  <h1>Customer's Info:</h1>
  <ul>
    <li>Customer Name: {{ $cust_data->cname }}</li>
    <li>Customer Phone: {{ $cust_data->cphone }}</li>
    <li>Customer Address: {{ $cust_data->caddress }}</li>
    <li>Customer Email: {{ $cust_data->cemail }}</li>
  </ul>

  <a href="/customers" class="btn btn-secondary">Back</a>
@endsection

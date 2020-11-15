@extends('layout')
@section('pagetitle')
Vendors
@endsection
@section('pagecontent')
<h1 class="display-3">Vendors List</h1>
<a href="/vendors/create" class="btn btn-primary">Create New Vendor</a>
<table class="table table-dark">
<tr>
  <th>Vendor Name</th>
  <th>Vendor Phone</th>
  <th>Vendor Address</th>
  <th>Vendor City</th>
  <th>Vendor Email</th>
  <th>Vendor ID</th>
</tr>
@foreach($vendor_list as $vendors)
<tr>
<td>{{$vendors->v_name}}</td>
<td>{{$vendors->v_phone}}</td>
<td>{{$vendors->v_address}}</td>
<td>{{$vendors->city_id}}</td>
<td>{{$vendors->v_email}}</td>
<td>{{$vendors->id}}</td>
</tr>
@endforeach
</table>
@endsection

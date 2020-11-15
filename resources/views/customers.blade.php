@extends('layout')

@section('pagetitle')
  Customers List
@endsection


@section('pagecontent')
  <h1 class="display-2 mb-2 mt-2">Customers List</h1>
  <a href="/customers/create" class="btn btn-success mt-2 mb-2">New Customer</a>
  <a href="/customers/search_by_phone" class="btn btn-primary ml-2">Search By Phone</a>
  <a href="/customers/search_by_name" class="btn btn-primary ml-2">Search By Name</a>
  <a href="/customers/search_by_field" class="btn btn-primary ml-2">Search By Field</a>
  <a href="/customers/search_dynamic" class="btn btn-primary ml-2">Dynamic Search</a>
  <a href="/deleted_customer" class="btn btn-primary ml-2">Deleted Customers</a>
  <table class="table">
    <tr class="content-justify-center">
      <th>Customer Image</th>
      <th>Customer Name</th>
      <th>Customer Phone</th>
      <th>Customer Address</th>
      <th>Customer Email</th>
      <th>Customer ID</th>
      <th>Actions</th>
    </tr>
    @foreach($customersdata as $customer)
    <tr>
      <td><img src="/img/{{$customer->c_image}}"style="width:50px"></td>
      <td>{{ $customer->cname }}</td>
      <td>{{ $customer->cphone }}</td>
      <td>{{ $customer->caddress }}</td>
      <td>{{ $customer->cemail }}</td>
      <td>{{ $customer->id }}</td>
      <td>
          <a href="/customers/{{ $customer->id }}" class="btn btn-secondary">View</a>
          <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">Edit</a>
          <a href="/customers/{{ $customer->id }}/delete" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
@endsection

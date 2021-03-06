@extends('layout')

@section('pagetitle')
  Search Customers By Name
@endsection


@section('pagecontent')
  <h1 class="display-2 mb-2 mt-2">Search Customers By Name</h1>
  <form class="form-inline" action="/customers/search_by_name" method="post">
    <label for="cname" class="ml-2">Customer Name</label>
    <input type="text" name="cname" id="cname" class="form-control ml-2" value="@if(isset($customers)) {{ request('cname') }} @endif">    
    <button type="submit" class="btn btn-primary ml-2">Search</button>
    <a href="/customers" class="btn btn-secondary">Back</a>
  </form>
      @if(isset($customers))
      <table class="table">
        <tr>
          <th>Customer Name</th>
          <th>Customer Phone</th>
          <th>Customer Address</th>
          <th>Customer Email</th>
          <th>Customer ID</th>
          <th>Actions</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
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
      @endif
@endsection

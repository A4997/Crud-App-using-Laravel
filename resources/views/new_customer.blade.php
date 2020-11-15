@extends('layout')

@section('pagetitle')
  New Customer
@endsection

@section('pagecontent')
  <h1 class="display-2">New Customer</h1>
  <form action="/customers" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cimage">Customer Image</label>
      <input type="file" name="cimage" class="form-control">
    </div>
    <div class="form-group">
      <label for="cname">Customer Name</label>
      <input type="text" name="cname" class="form-control">
    </div>
    <div class="form-group">
      <label for="cphone">Customer Phone</label>
      <input type="text" name="cphone" class="form-control">
    </div>
    <div class="form-group">
      <label for="caddress">Customer Address</label>
      <input type="text" name="caddress" class="form-control">
    </div>
    <div class="form-group">
      <label for="city">Customer City</label>
      <select class="form-control" name="city">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="cemail">Customer Email</label>
      <input type="text" name="cemail" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="/customers" class="btn btn-secondary">Back</a>
  </form>
@endsection

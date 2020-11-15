@extends('layout')

@section('pagetitle')
  Update Customer
@endsection

@section('pagecontent')
  <h1 class="display-2">Update Customer</h1>
  <form action="/customers/{{ $customer->id }}" method="post" >
    @method('PUT')
    <div class="form-group">
      <label for="cname">Customer Name</label>
      <input type="text" name="cname" class="form-control" value="{{ $customer->cname }}">
    </div>
    <div class="form-group">
      <label for="cphone">Customer Phone</label>
      <input type="text" name="cphone" class="form-control" value="{{ $customer->cphone }}">
    </div>
    <div class="form-group">
      <label for="caddress">Customer Address</label>
      <input type="text" name="caddress" class="form-control" value="{{ $customer->caddress }}">
    </div>
    <div class="form-group">
      <label for="cemail">Customer Email</label>
      <input type="text" name="cemail" class="form-control" value="{{ $customer->cemail }}">
    </div>
    <input type="hidden" name="id" value="{{ $customer->id }}">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/customers" class="btn btn-secondary">Back</a>
  </form>
@endsection

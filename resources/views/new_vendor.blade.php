@extends('layout')

@section('pagetitle')
  New Vendor
@endsection

@section('pagecontent')
  <h1 class="display-2">New Vendor</h1>
  <form action="/vendors" method="post">
    <div class="form-group">
      <label for="v_name">Vendor Name</label>
      <input type="text" name="v_name" class="form-control">
    </div>
    <div class="form-group">
      <label for="v_phone">Vendor Phone</label>
      <input type="text" name="v_phone" class="form-control">
    </div>
    <div class="form-group">
      <label for="v_address">Vendor Address</label>
      <input type="text" name="v_address" class="form-control">
    </div>
    <div class="form-group">
      <label for="city">Vendor City</label>
      <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="v_email">Vendor Email</label>
      <input type="text" name="v_email" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="/customers" class="btn btn-secondary">Back</a>
  </form>
@endsection

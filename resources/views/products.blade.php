@extends('layout')

@section('pagetitle')
  Products List
@endsection


@section('pagecontent')
  <table class="table">
    <tr>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Color</th>
      <th>Product ID</th>
    </tr>
    @foreach($prodata as $product)
    <tr>
      <td>{{ $product->pname }}</td>
      <td>{{ $product->pprice }}</td>
      <td>{{ $product->pcolor }}</td>
      <td>{{ $product->id }}</td>
    </tr>
    @endforeach
  </table>
@endsection

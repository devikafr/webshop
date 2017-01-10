@extends('templates.base')
@section('title', 'Magasin')
@section('content')

  <table id="product-table">
    <tr>
      <th>name</th>
      <th>description</th>
      <th>price</th>
      <th>Size</th>
      <th>Image</th>
    </tr>
    @foreach($products as $product)
      <tr>
        <td>{{ $product->name }}</td>
        <div class="desc"><td>{{ $product->description }}</td></div>
        <div><td>{{ $product->price / 100 }}</td></div>
        <div><td>{{ $product->height }} x {{ $product->width }}</td></div>
        <div class="image">
        <td><img style="width: 10% " src= '/img/{{$product->img}}'</td>
      </div>
        </tr>

      @endforeach
    </table>

    <h1>welcome to Shop</h1>
@endsection

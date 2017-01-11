@extends('templates.base')
@section('title', 'Magasin')
@section('content')
  <h2>{{ Session::get('status') }}</h2>
  @if($products instanceof Illuminate\Database\Eloquent\Collection)
    @foreach($products as $product)
      <div data-id='{{ $product->id }}' class="single-product">
        <img style="width: 50px;" src='/img/{{ $product->img }}'>
        <p>{{$product->name}}</p>
        <div>
          <p>{{ $product->description }}</p>
          <p>{{$product->price}}</p>
        </div>
        <button>Add to Panier</button>
      </div>
    @endforeach
  @else
    <div data-id='{{ $products->id }}' class="single-product">
      <img style="width: 50px;" src='/img/{{ $products->img }}'>
      <p>{{$products->name}}</p>
      <div>
        <p>{{ $products->description }}</p>
        <p>{{$products->price}}</p>
      </div>
      <button>Add to Panier</button>
    </div>
  @endif





    {{-- <tr>
      <th>name</th>
      <th>description</th>
      <th>price</th>
      <th>Size</th>
      <th>Image</th>
    </tr> --}}
    {{-- @foreach($products as $product)
      <div class="r">
        {{ $product->name }}
        <div class="desc">{{ $product->description }}</div>
        <div>{{ $product->price / 100 }}</td></div>
        <div>{{ $product->height }} x {{ $product->width }}</div>
        <div class="image">
        <img style="width: 10% " src= '/img/{{$product->img}}'>
      </div>
      </div>

      @endforeach

    <h1>welcome to Shop</h1>
@endsection --}}

{{-- <h1>Welcome to web shop</h1>
<div id="product-table">
    @if(sizeof($products > 1))
    @foreach ($products as $product)
    <table class="product_table">
      <tr>
      <td colspan="2"><img src='/img/{{$products->img}}'/></td>
      </tr>
      <tr>
      <td colspan="2" class="image_name">{{ $products->name }}</td>
      </tr>
      <tr>
        <td>{{ $products->description }}<br/>{{ $products->height }} x {{ $products->width }}</td>
        <td class="product_price">{{ $products-s>price / 100}} €</td>
      </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><input type="submit" value="Ajouter au panier" style="width:100%;"></td>
      </tr>
     </table>
   </div> --}}

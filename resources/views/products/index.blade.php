@extends('layouts.main')

@section('page-content')


@php
$counter=1
@endphp
@foreach($products as $product)
<div class="containers">
    <div class="card">


        <h3>{{ $counter++}}-category:{{$product->category->name}}</h3>
        <h2>product:{{$product->name}}</h2>
        <p>price:{{$product->price}}</p>
        @php
        $image= $product->images;
        @endphp
        @foreach($image as $i)
        <div class="containersi">
            <img src="{{$i->image}}" alt="Product Photo">
            <hr/> @endforeach
        </div>
        <a href="/products/{{ $product->id }}" class="btn btn-primary">See Product</a>
    </div>
</div>
@endforeach
<br/>
<p>{{$products->links()}}</p>



@endsection
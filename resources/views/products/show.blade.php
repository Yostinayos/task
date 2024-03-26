@extends('layouts.main')

@section('page-content')
<div class="containers">
    <div class="card">

        <h1>Products</h1>
        <h2> name: {{$product->name}}</h2>



        <p>price:{{$product->price}}</p>
        </br>
        <h3>category:{{$product->category->name}}</h3>
        </br>
        <h3>code:{{$product->category->code}}</h3>
        </br>
        @php
        $image= $product->images;
        @endphp
        <div class="containersi">
            @foreach($image as $i)
            <img src="{{$i->image}}" alt="">
            <hr> @endforeach
        </div>
    </div>

</div>
@endsection



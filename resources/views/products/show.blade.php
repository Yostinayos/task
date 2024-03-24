<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Product')</title>
</head>

<body>
    name: {{$product->name}}
    </br>
    price: {{$product->price}}
    </br>
    category: {{$product->category->name}}
    </br>
    code:{{$product->category->code}}
    </br>
    @php
    $image= $product->images;
    @endphp
    @foreach($image as $i)
    <img src="{{$i->image}}" alt="" style="width:30%"> @endforeach
</body>

</html>
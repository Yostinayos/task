<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>@yield('title','Products')</title>
</head>

<body>
  <div class=container>
    @php
    $counter=1
    @endphp
    

    
   
   



    <div class="card" style="width:400px">
    @foreach($products as $product)
    <h2>{{ $counter++}}-category:{{$product->category->name}}</h2>
    <h2>product:{{$product->name}}</h2>
    <h2>price:{{$product->price}}</h2>
    @php
    $image= $product->images;
    @endphp
    @foreach($image as $i)
      <img class="" src="{{$i->image}}" alt="Card image" style="width:30%"> @endforeach
      <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>

        <a href="/products/{{ $product->id }}" class="btn btn-primary">See Product</a>
      </div>
    </div>
    <br>
    @endforeach


{{$products->links()}}

   
  </div>
</body>

</html>
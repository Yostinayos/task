<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Add product</h2>
  <form method="POST" action="{{rout('pro')}}">
  
    <div class="mb-3">
      <label for="pwd"> <p>Product name:</p></label>
      <input type="text" class="form-control mt-3" placeholder="Product name">
    </div>
    <div class="mb-3">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control mt-3" placeholder="Price">
    </div>
    <div class="mb-3">
      <label for="pwd">category_id:</label>
      <input type="text" class="form-control mt-3" placeholder="category_id">
    </div>
   
  
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>

</body>
</html>

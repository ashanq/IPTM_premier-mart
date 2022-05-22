<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
         <thead>
          <tr>
           <th>Name</th>
           <th>Address</th>
           <th>City</th>
           <th>Postal Code</th>
           <th>Country</th>
          </tr>
         </thead>
         <tbody>
         @foreach($products as $product)
          <tr>
           <td>{{ $product->id }}</td>
           <td>{{ $product->title}}</td>
           <td>{{ $product->price }}</td>
          </tr>
         @endforeach
         </tbody>
        </table>
       </div>
</body>
</html>

<!DOCTYPE html>
<html>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
<head>
    <title>Product Report</title>
</head>
<body>
    <div class="table-responsive" id="customers">
        <table class="table table-striped table-bordered">
         <thead>
          <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Category</th>
           <th>Price</th>
           <th>Discount</th>
           <th>Size</th>
           <th>Brand</th>
           <th>Stock</th>
           <th>Status</th>
          </tr>
         </thead>
         <tbody>
         @foreach($products as $product)
          <tr>
           <td>{{ $product->id }}</td>
           <td>{{ $product->title}}</td>
           <td>{{$product->cat_info['title']}}
            <sub>
                {{$product->sub_cat_info->title ?? ''}}
            </sub>
          </td>
          <td>Rs. {{$product->price}} /-</td>
          <td>  {{$product->discount}}% OFF</td>
          <td>{{$product->size}}</td>
          <td> {{ucfirst($product->brand->title)}}</td>
          <td>
            @if($product->stock>0)
            <span class="badge badge-primary">{{$product->stock}}</span>
            @else
            <span class="badge badge-danger">{{$product->stock}}</span>
            @endif
          </td>
          <td>
              @if($product->status=='active')
                  <span class="badge badge-success">{{$product->status}}</span>
              @else
                  <span class="badge badge-warning">{{$product->status}}</span>
              @endif
          </td>
         @endforeach
         </tbody>
        </table>
       </div>
</body>
</html>

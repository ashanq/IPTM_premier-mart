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
    <title>Categoty Report</title>
</head>
<body>
    <div class="table-responsive" id="customers">
        <table class="table table-striped table-bordered">
         <thead>
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Is Parent</th>
                <th>Parent Category</th>
                <th>Status</th>
              </tr>
         </thead>
         <tbody>
            @foreach($categories as $category)
              @php
              @endphp
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{(($category->is_parent==1)? 'Yes': 'No')}}</td>
                    <td>
                        {{$category->parent_info->title ?? ''}}
                    </td>
                    <td>
                        @if($category->status=='active')
                            <span class="badge badge-success">{{$category->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$category->status}}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
         </tbody>
        </table>
       </div>
</body>
</html>

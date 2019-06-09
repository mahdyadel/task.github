<!DOCTYPE html>
<html>
 <head>
  <title>Export Data to Excel in Laravel using Maatwebsite</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Export Data to Excel in Laravel using Maatwebsite</h3><br />
   <div align="center">
    
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
<thead>
        <tr>
            
            <th>@lang('site.name')</th>
           
            <th>@lang('site.category')</th>
    
            <th>@lang('site.price')</th>
            <th>@lang('site.price_rest')</th>
            <!-- <th>@lang('site.profit_percent') %</th> -->
            <th>@lang('site.phone')</th>
            <th>@lang('site.address')</th>
        </tr>
        </thead>
        
        <tbody>
        @foreach ($customer_data  as $customer)
            <tr>
                
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->category->name}}</td>
                <td>{{ $customer->price }}</td>
                <td>{{ $customer->price_rest }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
            </tr>
        
        @endforeach
      </tbody>
    </table>
   </div>
   
  </div>
 </body>
</html>
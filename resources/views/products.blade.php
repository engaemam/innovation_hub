@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
{{-- {{dd($products)}} --}}

       
     

          
       @if($products->count()/2 < 1)
        <div class="row">
        @foreach($products as $prod)
            <div class="col-lg-3 col-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$prod->name}}</h3>
            
                <div class="card-tools">
                  <!-- This will cause the card to maximize when clicked -->
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  <!-- This will cause the card to collapse when clicked -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <!-- This will cause the card to be removed when clicked -->
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <img src="https://img.freepik.com/free-vector/laptop_53876-43923.jpg?size=626&ext=jpg" class="img-fluid mb-2" alt="white sample">
              <div class="card-body">
                  <span class="right badge badge-success">New</span>  
                {{$prod->category}}
                <br>
                {{$prod->info}}
                <br>
               
                <span class="right badge badge-warning"> {{$prod->location}}</span>
                <br>
  
                
                <span class="right badge badge-warning">{{$prod->selling_price}}</span>
                {{-- {{$service->info}} --}}
              </div>
              <!-- /.card-body -->
            </div>
          </div>

            @endforeach
        </div>
            @else
            <div class="row">
            @foreach($products->split($products->count()/2) as $row)
           
            <div class="col-lg-3 col-6">
                @foreach($row as $service)
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{$service->name}}</h3>
          
              <div class="card-tools">
                <!-- This will cause the card to maximize when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <!-- This will cause the card to collapse when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <!-- This will cause the card to be removed when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <img src="https://img.freepik.com/free-vector/laptop_53876-43923.jpg?size=626&ext=jpg" class="img-fluid mb-2" alt="white sample">
            <div class="card-body">
                <span class="right badge badge-success">New</span>  
              {{$service->category}}
              <br>
              {{$service->info}}
              <br>
             
              <span class="right badge badge-warning"> {{$service->location}}</span>
              <br>

              
              <span class="right badge badge-warning">{{$service->selling_price}}</span>
              {{-- {{$service->info}} --}}
            </div>
            <!-- /.card-body -->
          </div>
            @endforeach
            </div>
            @endforeach
           
        </div>

            @endif
         
        {{$products->links()}}
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Add Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form">
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Brand</label>
              <input type="text" class="form-control" placeholder="Enter ..." >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <label>Info</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>
          
        </div>

        <!-- input states -->
   
      

   
     

          <div class="row">
            <div class="col-sm-6">
              <!-- Select multiple-->
              <div class="form-group">
                <label>Select Multiple</label>
                <select multiple class="form-control">
                  @foreach($products as $prod)
                  <option>{{$prod->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Select Multiple Disabled</label>
                <select multiple class="form-control" disabled>
                  @foreach($products as $prod)
                  <option>{{$prod->selling_price}}</option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
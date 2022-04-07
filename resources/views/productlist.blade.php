@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Variations</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label>Minimal</label>
            <select class="form-control select2bs4" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <div class="form-group">
            <label>Brand</label>
            <select class="form-control select2" style="width: 100%;">
                @foreach($products as $prod)
              <option>{{$prod->brand}}</option>
                @endforeach
            </select>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Purchase Price</label>
            <select class="form-control select2"  style="width: 100%;">
                @foreach($products as $prod)
              <option>{{$prod->purchase_price}}</option>
                @endforeach
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Selling Price</label>
            <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                @foreach($products as $prod)
                <option>{{$prod->selling_price}}</option>
                  @endforeach
            </select>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Stock</label>
            <select class="form-control select2" style="width: 100%;">
                @foreach($products as $prod)
                <option>{{$prod->stock}}</option>
                  @endforeach
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <h5>Custom Color Variants</h5>
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Minimal </label>
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                @foreach($products as $prod)
                <option>{{$prod->name}}</option>
                  @endforeach
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Multiple </label>
            <div class="select2-purple">
              <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                @foreach($products as $prod)
              <option>{{$prod->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
   Innov Task
    </div>
  </div>
<div class="container-fluid">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
         
            <h3 class="card-title">Product List Datatable</h3>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a class="btn btn-primary pull-right" href="/admin/product/add">
                <i class="fa fa-plus"></i> Add</a><br><br>
               
                <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="text-align: center">#</th>
                <th>Action</th>
                <th>Product name</th>
                <th>Location</th>
                <th>Selling Price</th>
                <th>Purchase Price</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Brand</th>
                <th>Info</th>
              </tr>
              </thead>
              <tbody>
            @foreach($products as $prod)
              <tr>
              <th style="text-align: center">{{$prod->id}}</th>
              <th>
                <div class="btn-group" style="align-content: center">
                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-1px, -166px, 0px);">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </button>
                  </div>
              </th>
              <td>{{$prod->name}}</td>
              <td>{{$prod->location}}</td>
              <td>{{$prod->selling_price}}</td>
              <td>{{$prod->purchase_price}}</td>
              <td>{{$prod->category}}</td>
              <td>{{$prod->stock}}</td>
              <td>{{$prod->brand}}</td>
              <td>{{$prod->info}}</td>
              </tr>
              @endforeach
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

    
        <!-- /.card -->

        
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  {{$products->links()}}
@stop

@section('css')
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>


<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop
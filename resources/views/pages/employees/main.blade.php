@extends('layouts.app_main')
@section('title','Home')
@section('css_addon')
<style>
    .expandable-body .table {
        width: 100% !important;
        margin: 0 !important;
    }
</style>
@endsection
@section('content')

<div id='content_main' class='menu_content'>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Data List</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
      <!-- /.content-header -->
    <!-- Main content -->

    <section class="main_content">
        <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                <h3 class="card-title">
                    <input type="text" class="form-control" id="search_key" placeholder="Cari Karyawan" onchange="get_list()">
                </h3>
                    <div class="card-tools">
                        <button onclick="input_content();" type="button" class="btn btn-success">
                        Tambah
                        </button>
                        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button> --}}
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id='list_container'></div>
                </div>
                <!-- /.card-body -->
            </div>
        <!-- /.card -->
        </div>
    </section>
</div>

<div id='content_input' class='menu_content'></div>

<script type="text/javascript">

    $( document ).ready(function() {
        get_list(1);
    });

    function input_content(id){
        $('.overlay').show();
        // $('.container-fluid').addClass('fa-spin');
        load_show();

        $.ajax({
            url: `/employees/input`,
            type: "POST",
            cache: false,
            data: {
                _token : $token,
                id : id,
            },
            success:function(result){
                to_content('content_input');
                $('#content_input').html(result);
                load_hide();
                $('.overlay').hide();
                // $('.container-fluid').removeClass('fa-spin');
            }
        });
    }

    function get_list(page=1) {
        load_show();
        var form = $('#formFilter').serializeArray(); // convert form to array
        form.push(
            {name: "page", value: page},
            {name: "_token", value: $token},
            {name: '_search_key', value: $('#search_key').val()},
        );
        $.ajax({
            url: `/employees/list`,
            type: "POST",
            cache: false,
            data: form,
            success:function(result){
                $('#list_container').html(result);
                // window.history.pushState("List ", "Title", '/office/employee/list/'+page);
                load_hide();
            }
        });
    };
</script>
@endsection

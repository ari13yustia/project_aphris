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

<div class="main-content" id="main-content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Recruitment</h1>
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
    <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              {{-- <h3 class="card-title">Select2 (Default Theme)</h3> --}}

              <div class="card-tools">
                <button type="button" class="btn btn-success" data-card-widget="collapse">
                  Tambah
                </button>
                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> --}}
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Reason</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>Umur</td>
                                        <td>Pendidikan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jason Miraz</td>
                                        <td>20 tahun</td>
                                        <td>S1</td>
                                    </tr>
                                    <tr>
                                        <td>Josep stamham</td>
                                        <td>21 tahun</td>
                                        <td>S1</td>
                                    </tr>
                                    <tr>
                                        <td>Nunung Jebred</td>
                                        <td>24 tahun</td>
                                        <td>S2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td>Pending</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                            <p>a</p>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>657</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td>Denied</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                            <p>aaa</p>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>134</td>
                        <td>Jim Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>494</td>
                        <td>Victoria Doe</td>
                        <td>11-7-2014</td>
                        <td>Pending</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>832</td>
                        <td>Michael Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>982</td>
                        <td>Rocky Doe</td>
                        <td>11-7-2014</td>
                        <td>Denied</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer">
              <button class=""></button>
            </div> --}}
          </div>
          <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    {{-- <div class="container-fluid main-content">
        <form method="POST" id='formFilter'>
            <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header p-4 border-bottom">
                    <h5 id="offcanvasLeftLabel" class="mb-0">
                      <i class="uil uil-filter"></i> Filter Data
                    </h5>
                    <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
                </div>
                @stack('filter')
            </div>
        </form>

    </div> --}}
</div>

<script type="text/javascript">

    $( document ).ready(function() {
        getList(1);
    });

    function input_content(){
        load_show();
        $.ajax({
            url: `/office/employee/input`,
            type: "POST",
            cache: false,
            data: {
                _token : $token
            },
            success:function(result){
                to_content('content_input');
                $('#content_input').html(result);
                load_hide();
            }
        });
    }

    function get_list(page=1) {
        load_show();
        var form = $('#formFilter').serializeArray(); // convert form to array
        form.push(
            {name: "page", value: page},
            {name: "_token", value: $token},
        );
        $.ajax({
            url: `/office/employee/list`,
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

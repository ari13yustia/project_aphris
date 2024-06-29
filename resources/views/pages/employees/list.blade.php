<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Employee Code</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Division</th>
                <th>Departement</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = ($paging['current']-1) * $paging['limit'] ;
            ?>
            @foreach ($dataEmployee as $row)
            <?php
                $no++;
            ?>
            <tr data-widget="expandable-table" aria-expanded="false">
                <td>{{$no}}</td>
                <td>{{$row->employee_code}}</td>
                <td>{{$row->full_name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->no_telp}}</td>
                <td>{{$row->division_name}}</td>
                <td>{{$row->departement_name}}</td>
                <td>{{$row->job_title_name}}</td>
                <td>{!!$row->status_employee == 1 ? '<span class="badge bg-success">Karyawan</span>'
                : '<span class="badge bg-warning">Kandidat</span>'!!}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-info fa-fw"></i> Detail</a>
                          <button class="dropdown-item" onclick="input_content('{{Crypt::encrypt($row->id)}}')"><i class="fas fa-edit fa-fw"></i> Update</button>
                          <a class="dropdown-item" href="#"><i class="fas fa-trash fa-fw"></i> Hapus</a>
                        </div>
                      </div>
                </td>
                {{-- <td><a class="btn btn-danger" href=""><i class="fas fa-trash fa-fw"></i></a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row text-center">
    <!-- PAGINATION START -->
    <div class="col-12 mt-4">
        {!! $paging['pagination'] !!}
    </div>
    <!-- PAGINATION END -->
</div>

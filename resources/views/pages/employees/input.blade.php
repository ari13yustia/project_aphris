<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">New Employees</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="javascript:void(0);" onclick="to_content('content_main')">Data List</a></li>
            <li class="breadcrumb-item">New Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<section class="main_content">
    <div class="container-fluid">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-personal-tab" data-toggle="pill" href="#custom-tabs-one-personal" role="tab" aria-controls="custom-tabs-one-personal" aria-selected="true">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-emp-tab" data-toggle="pill" href="#custom-tabs-one-emp" role="tab" aria-controls="custom-tabs-one-emp" aria-selected="false">Employement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-family-tab" data-toggle="pill" href="#custom-tabs-one-family" role="tab" aria-controls="custom-tabs-one-family" aria-selected="false">Family</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-education-tab" data-toggle="pill" href="#custom-tabs-one-education" role="tab" aria-controls="custom-tabs-one-education" aria-selected="false">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-workexp-tab" data-toggle="pill" href="#custom-tabs-one-workexp" role="tab" aria-controls="custom-tabs-one-workexp" aria-selected="false">Work Exp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-coverage-tab" data-toggle="pill" href="#custom-tabs-one-coverage" role="tab" aria-controls="custom-tabs-one-coverage" aria-selected="false">Coverage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-career-tab" data-toggle="pill" href="#custom-tabs-one-career" role="tab" aria-controls="custom-tabs-one-career" aria-selected="false">Career History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-tax-tab" data-toggle="pill" href="#custom-tabs-one-tax" role="tab" aria-controls="custom-tabs-one-tax" aria-selected="false">Social Security And Tax</a>
                </li>
            </ul>
            </div>
            <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-personal" role="tabpanel" aria-labelledby="custom-tabs-one-personal-tab">
                    <form id="form-personal" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nik"><span class="text-danger">*</span> NIK</label>
                                    <input type="text" class="form-control" name="t_nik" id="nik" placeholder="Enter NIK" value="{{ isset($personal->nik) ? $personal->nik : ''; }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="fullname"><span class="text-danger">*</span> Full Name</label>
                                    <input type="text" class="form-control" name="t_fullname" id="fullname" placeholder="Enter Full Name" value="{{ isset($personal->full_name) ? $personal->full_name : ''; }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="email"><span class="text-danger">*</span> Email</label>
                                    <input type="email" class="form-control" name="t_email" id="email" placeholder="Enter Email" value="{{ isset($personal->email) ? $personal->email : ''; }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="notelp"><span class="text-danger">*</span> Phone Number</label>
                                    <input type="text" class="form-control" name="t_notelp" id="notelp" placeholder="Enter Phone Number" value="{{ isset($personal->no_telp) ? $personal->no_telp : ''; }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="gender"><span class="text-danger">*</span> Gender</label>
                                    <select name="t_gender" id="gender" class="form-control" required>
                                        <option value="1" selected>Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="dateofbirth"><span class="text-danger">*</span> Date of Birth</label>
                                    <input type="text" name="t_dateofbirth" id="dateofbirth" class="form-control" placeholder="Enter Date of Birth" value="{{ isset($personal->date_of_birth) ? $personal->date_of_birth : ''; }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="placeofbirth"><span class="text-danger">*</span> Place of Birth</label>
                                    <input type="text" name="t_placeofbirth" id="placeofbirth" class="form-control" placeholder="Enter Place of Birth" value="{{ isset($personal->place_of_birth) ? $personal->place_of_birth : ''; }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="religion"><span class="text-danger">*</span> Religion</label>
                                    <select name="t_religion" id="religion" class="form-control" required>
                                        <option value="1" selected>Islam</option>
                                        <option value="2">Katolik</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="t_instagram" id="instagram" class="form-control" placeholder="Enter Instagram" value="{{ isset($personal->instagram) ? $personal->instagram : '' ; }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="t_website" id="website" class="form-control" placeholder="Enter Website" {{ isset($personal->website) ? $personal->website : '' ; }}>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-emp" role="tabpanel" aria-labelledby="custom-tabs-one-emp-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" value="Empoloyee Code" disabled>
                            </div>
                        </div>
                    </div>
                    <form id="form-emp" action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="join_date">Join Date</label>
                                    <input type="text" class="form-control" id="join_date" value="13 Juli 2024" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="join_date">Out Date</label>
                                    <input type="text" class="form-control" id="out_date" value="-" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="division"><span class="text-danger">*</span>  Division</label>
                                    <select class="form-control" name="t_division" id="division" required>
                                        <option value="test">Test</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="departement"><span class="text-danger">*</span> Departement</label>
                                    <select class="form-control" name="t_departement" id="departement" required>
                                        <option value="test">Test</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="sub_dept"><span class="text-danger">*</span> Sub Dept</label>
                                    <select class="form-control" name="t_sub_dept" id="sub_dept" required>
                                        <option value="test">Test</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="section"><span class="text-danger">*</span> Section</label>
                                    <select class="form-control" name="t_section" id="section" required>
                                        <option value="test">Test</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="job_title"><span class="text-danger">*</span> Job Title</label>
                                    <select class="form-control" name="t_job_title" id="job_title" required>
                                        <option value="test">Test</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="job_grade"><span class="text-danger">*</span> Job Grade</label>
                                    <select class="form-control" name="t_job_grade" id="job_grade" required>
                                        <option value="test">Test</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-family" role="tabpanel" aria-labelledby="custom-tabs-one-family-tab">
                    <form id="form-family" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="fam_member_name"><span class="text-danger">*</span> Family Name</label>
                                    <input type="text" class="form-control" name="t_fam_member_name" id="fam_member_name" placeholder="Enter Family Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="fam_phone_number"><span class="text-danger">*</span> Family Phone Number</label>
                                    <input type="text" class="form-control" name="t_fam_member_name" id="fam_member_name" placeholder="Enter Family Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="fam_religion"><span class="text-danger">*</span> Family Religion</label>
                                    <select name="t_fam_religion" id="fam_religion" class="form-control" required>
                                        <option value="1" selected>Islam</option>
                                        <option value="2">Katolik</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="fam_status"><span class="text-danger">*</span> Family Status</label>
                                    <select name="t_fam_status" id="fam_status" class="form-control" required>
                                        <option value="1" selected>Ayah</option>
                                        <option value="2">Ibu</option>
                                        <option value="2">Sodara Perempuan</option>
                                        <option value="2">Sodara Laki-laki</option>
                                        <option value="2">Pasangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="fam_address"><span class="text-danger">*</span> Family Address</label>
                                    <textarea class="form-control" name="t_fam_address" id="fam_address" cols="10" rows="4" placeholder="Enter Family Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text-left">
                                    <h4 style="font-weight: bold;">Family Members</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-right">
                                    <a class="btn btn-success">Add</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Family Name</td>
                                <td>Family Phone Number</td>
                                <td>Family Religion</td>
                                <td>Family Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Michael Jackson</td>
                                <td>082928392128</td>
                                <td>Katolik</td>
                                <td>Ayah</td>
                                <td>
                                    <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <a class="btn btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-education" role="tabpanel" aria-labelledby="custom-tabs-one-education-tab">
                    <form id="form-education" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="edu_name"><span class="text-danger">*</span> Educaction Name</label>
                                    <input type="text" class="form-control" name="t_edu_name" id="edu_name" placeholder="Enter Family Name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="edu_description"><span class="text-danger">*</span> Description</label>
                                    <textarea class="form-control" name="t_edu_description" id="edu_description" cols="10" rows="4" placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text-left">
                                    <h4 style="font-weight: bold;">Educations</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-right">
                                    <a class="btn btn-success">Add</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td style="width: 30%">Eduction Name</td>
                                <td style="width: 50%">Description</td>
                                <td style="width: 20%">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SMA Superpower Indonesia</td>
                                <td>Sekolah bergengsi di indonesia untuk ornag-orang yang memiliki kekuatan super power seperti superman.</td>
                                <td>
                                    <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <a class="btn btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-workexp" role="tabpanel" aria-labelledby="custom-tabs-one-workexp-tab">
                    <form id="form-workexp" action="">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="workexp_name">Work Experience Title</label>
                                    <input type="text" class="form-control" name="t_workexp_name" id="workexp_name" placeholder="Enter Work Experience Title" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="workexp_entry_date">Start Date</label>
                                    <input type="date" class="form-control" name="t_workexp_entry_date" id="workexp_entry_date" placeholder="Enter Start Date" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="workexp_out_date">End Date</label>
                                    <input type="date" class="form-control" name="t_workexp_out_date" id="workexp_out_date" placeholder="Enter End Date" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="workexp_description"><span class="text-danger">*</span> Description</label>
                                    <textarea class="form-control" name="t_workexp_description" id="workexp_description" cols="10" rows="4" placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text-left">
                                    <h4 style="font-weight: bold;">Work Experience</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-right">
                                    <a class="btn btn-success">Add</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td style="width: 20%">Work Experience</td>
                                <td style="width: 40%">Description</td>
                                <td style="width: 20%">Start Date</td>
                                <td style="width: 20%">End Date</td>
                                <td style="width: 20%">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PT. Ada Hikmah</td>
                                <td>Bekerja sebagai IT Manajer, memanajemen sistem yang ada pada perusahaan PT. Ada Hikmah.</td>
                                <td>12 Juli 2022</td>
                                <td>12 Agustus 2023</td>
                                <td>
                                    <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <button onclick="#" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Save</button>
            <a href="javascript:void(0);" onclick="to_content('content_main')" class="btn btn-warning">Cancel</a>
        </div>
    </div>
</section>

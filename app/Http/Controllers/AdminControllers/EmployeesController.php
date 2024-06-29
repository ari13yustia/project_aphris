<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

use App\Models\Master\MsEmployee;
use App\Models\Employee\EmpPersonal;
use app\Helpers\Helper;
use Auth;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.employees.main');
    }

    public function input(Request $request){
        $id = $request->id ? Crypt::decrypt($request->id): 0;

        $data['id'] = $id;
        $data['employee'] = MsEmployee::find($id);

        $data['personal'] = EmpPersonal::find($data['employee']->emp_personal_id ?? 0);
        return view('pages.employees.input',$data);
    }

    public function get_list(Request $request)
    {
        $limit =  $request->filter_limit?:10;
        $currentPage = $request->page;

        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        $employee = MsEmployee::
        select('master.ms_employees.id',
                'master.ms_employees.employee_code',
                'per.full_name',
                'div.name AS division_name',
                'dep.name AS departement_name',
                'sub.name AS sub_dept_name',
                'sec.name AS section_name',
                'job.name AS job_title_name',
                'per.no_telp',
                'per.email',
                'master.ms_employees.status_employee')
        ->leftJoin('employee.emp_personals as per','per.id','=','master.ms_employees.emp_personal_id')
        ->leftJoin('master.ms_divisions as div','div.id','master.ms_employees.ms_division_id')
        ->leftJoin('master.ms_departements as dep','dep.id','master.ms_employees.ms_departemen_id')
        ->leftJoin('master.ms_sub_depts as sub','sub.id','master.ms_employees.ms_sub_dept_id')
        ->leftJoin('master.ms_sections as sec','sec.id','master.ms_employees.ms_section_id')
        ->leftJoin('master.ms_job_titles as job','job.id','master.ms_employees.ms_job_title_id');
        if($request->_search_key){
            $employee->where('master.ms_employees.employee_code','LIKE','%'.strtoupper($request->_search_key).'%');
            $employee->orWhere('per.full_name','LIKE','%'.$request->_search_key.'%');
        }
        $dataEmployee = $employee->paginate($limit);
        $list = json_decode(json_encode($dataEmployee),true);
        // dd($list);
        unset($list['data']);

        $paging = array();
        $paging['limit']      = $list['per_page'];
        $paging['count_row']  = $list['total'];
        $paging['current']    = $currentPage;
        $paging['load_func_name'] = 'get_list';
        $paging['pagination']  = Helper::generate_paging($paging);


        return view('pages.employees.list',compact('dataEmployee','paging'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

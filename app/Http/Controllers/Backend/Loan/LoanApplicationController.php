<?php

namespace App\Http\Controllers\Backend\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\MemberManagement;
use App\Models\CompanyBranch;
use App\Models\LoanSchema;
use App\Models\LoanApplication;
use App\Models\HrManagement;




class LoanApplicationController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = LoanApplication::all();
        return view('backend.pages.loan_application.index')->withApplications($application);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch= CompanyBranch::pluck('id','branch_name');
        //dd($branch);
        $member= MemberManagement::pluck('member_id','first_name','last_name');
        $schema= LoanSchema::pluck('loanSchema_id','schema_name');
        $hrmanagement= HrManagement::pluck('name','hrmanagement_id');
       // dd($hrmanagement);
       
        return view('backend.pages.loan_application.create')->withBranches($branch)->withMembers($member)->withSchemas($schema)->withHrmanagements($hrmanagement);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $application = new LoanApplication();
        $application->application_date            =       $request->application_date;
        $application->member                      =       $request->member;
        $application->member_name                 =       $request->member_name;
        $application->branch                      =       $request->branch;
        $application->associate                   =       $request->associate;
        $application->coapplicant_member1         =       $request->coapplicant_member1;
        $application->guarantor_member1           =       $request->guarantor_member1;
        $application->coapplicant_member2         =       $request->coapplicant_member2;
        $application->guarantor_member2           =       $request->guarantor_member2;
        $application->sec_type                    =       $request->sec_type;
        $application->loan_schema                 =       $request->loan_schema;
        $application->sec_value                   =       $request->sec_value;
        $application->tenure_type                 =       $request->tenure_type;
        $application->tenure_months               =       $request->tenure_months;
        $application->emi_collection              =       $request->emi_collection;
        $application->credit_period               =       $request->credit_period;
        $application->loan_requested              =       $request->loan_requested;
        $application->status                      =       'Disbursed';


        $application->save();

        session()->flash('success', 'Loan Application has been created !!');
        return redirect()->route('admin.loan_application.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($loanApplication_id)
    {
        $application = LoanApplication::findOrFail($loanApplication_id);
        //dd($application);
        
 
         return view('backend.pages.loan_application.show')->withApplications($application);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

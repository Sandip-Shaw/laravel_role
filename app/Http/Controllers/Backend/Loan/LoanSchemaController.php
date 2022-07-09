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
use App\Models\LoanSchema;

class LoanSchemaController extends Controller
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
        $schema = LoanSchema::all();
        return view('backend.pages.loan_schema.index')->withSchemas($schema);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.loan_schema.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'schema_name' => 'required',
            'schema_code' => 'required|max:12',
            'max_loan_amt' => 'required',
            'max_tanure' => 'required',
            'ann_rate_int' => 'required',
            'sec_deposit' => 'required',
            'active' => 'required',
            'int_type' => 'required',
            
             
        ]);

        $schema = new LoanSchema();
        $schema->schema_name            =       $request->schema_name;
        $schema->schema_code            =       $request->schema_code;
        $schema->max_loan_amt           =       $request->max_loan_amt;
        $schema->max_loan_lim           =       $request->max_loan_lim;
        $schema->max_tanure             =       $request->max_tanure;
        $schema->ann_rate_int           =       $request->ann_rate_int;
        $schema->fore_closure_charge    =       $request->fore_closure_charge;
        $schema->process_fee            =       $request->process_fee;
        $schema->sec_deposit            =       $request->sec_deposit;
        $schema->active                 =       $request->active;
        $schema->int_type               =       $request->int_type;
        $schema->save();

        session()->flash('success', 'Loan Schema has been created !!');
        return redirect()->route('admin.loan_schema.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($loanSchema_id)
    {
        $schema = LoanSchema::findOrFail($loanSchema_id);
        $profile = LoanSchema::all();
 
         return view('backend.pages.loan_schema.show',compact('schema','profile'));
    }

    public function loan_details($loanSchema_id)
    {
        $schema = LoanSchema::findOrFail($loanSchema_id);
        return $schema->toJson();
 
       // return $schema->toJson(JSON_PRETTY_PRINT);
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA',
        // ]);
       // $application = LoanApplication::findOrFail($loanApplication_id);
        //dd($application);
        
 
        // return view('backend.pages.loan_application.show')->withApplications($application);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($loanSchema_id)
    {
        $schema = LoanSchema::find($loanSchema_id);
 
        return view('backend.pages.loan_schema.edit')->withSchemas($schema);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $loanSchema_id)
    {
        $schema=LoanSchema::find($loanSchema_id);
        $request->validate([
            'schema_name' => 'required',
            'schema_code' => 'required|max:12',
            'max_loan_amt' => 'required',
            'max_tanure' => 'required',
            'ann_rate_int' => 'required',
            'sec_deposit' => 'required',
            'active' => 'required',
            'int_type' => 'required',
            
             
        ]);
        $schema->schema_name            =       $request->schema_name;
        $schema->schema_code            =       $request->schema_code;
        $schema->max_loan_amt           =       $request->max_loan_amt;
        $schema->max_loan_lim           =       $request->max_loan_lim;
        $schema->max_tanure             =       $request->max_tanure;
        $schema->ann_rate_int           =       $request->ann_rate_int;
        $schema->fore_closure_charge    =       $request->fore_closure_charge;
        $schema->process_fee            =       $request->process_fee;
        $schema->sec_deposit            =       $request->sec_deposit;
        $schema->active                 =       $request->active;
        $schema->int_type               =       $request->int_type;
        $schema->save();

        session()->flash('success', 'Loan Schema has been Updated !!');
        return redirect()->route('admin.loan_schema.index');

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

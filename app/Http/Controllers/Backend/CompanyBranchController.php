<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\CompanyBranch;


class CompanyBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = CompanyBranch::all();
        return view('backend.pages.comp_branch.index')->withBranch($branch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch= CompanyBranch::all();
        return view('backend.pages.comp_branch.create');
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
            'branch_name' => 'required',
            'branch_code' => 'required',
            'open_date' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'country' => 'required',
            'members' => 'required',
            'email' => 'required|email',
             
        ]);
        $branch = new CompanyBranch();
        $branch->branch_name       =       $request->branch_name;
        $branch->branch_code       =       $request->branch_code;
        $branch->open_date         =       $request->open_date;
        $branch->ifsc_code         =       $request->ifsc_code;
        $branch->address           =       $request->address;
        $branch->city              =       $request->city;
        $branch->state             =       $request->state;
        $branch->pincode           =       $request->pincode;
        $branch->country           =       $request->country;
        $branch->contact_no        =       $request->contact_no;
        $branch->members           =       $request->members;
        $branch->email             =       $request->email;
        $branch->save();

        session()->flash('success', 'Companys Branch has been created !!');
        return redirect()->route('admin.comp_branch.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

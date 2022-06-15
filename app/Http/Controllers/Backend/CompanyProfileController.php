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
use App\Models\CompanyProfile;
class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = CompanyProfile::all();
        return view('backend.pages.company.index')->withProfile($profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile  = CompanyProfile::all();
        return view('backend.pages.company.create');
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
            'company_website' => 'required|max:50',
            'company_name' => 'required|max:50',
            'about_company' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'contry' => 'required',
            'mobile_no' => 'required',
            'email' => 'required|email',
            'category' => 'required',
            'company_class' => 'required',
            'incorporation_date' => 'required',
            'incorporation_state' => 'required',
            'incorporation_country' => 'required',
            'authorized_capital' => 'required',
            'paid_ip_capital' => 'required',    
        ]);

        $profile = new CompanyProfile();
        $profile->company_website       =       $request->company_website;
        $profile->company_name          =       $request->company_name;
        $profile->short_name            =       $request->short_name;
        $profile->short_name            =       $request->short_name;
        $profile->about_company         =       $request->about_company;
        $profile->address               =       $request->address;
        $profile->city                  =       $request->city;
        $profile->state                 =       $request->state;
        $profile->pincode               =       $request->pincode;
        $profile->contry                =       $request->contry;
        $profile->mobile_no             =       $request->mobile_no;
        $profile->landline_no           =       $request->landline_no;

        $profile->email                 =       $request->email;
        $profile->cin_no                =       $request->cin_no;
        $profile->pan_no                =       $request->pan_no;
        $profile->tan_no                =       $request->tan_no;
        $profile->gst_no                =       $request->gst_no;
        $profile->category              =       $request->category;
        $profile->company_class         =       $request->company_class;
        $profile->incorporation_date    =       $request->incorporation_date;
        $profile->incorporation_state   =       $request->incorporation_state;
        $profile->incorporation_country =       $request->incorporation_country;
        $profile->authorized_capital    =       $request->authorized_capital;
        $profile->paid_ip_capital       =       $request->paid_ip_capital;
      

        $profile->save();


        session()->flash('success', 'Profile has been created !!');
        return redirect()->route('admin.company.create');

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

<?php

namespace App\Http\Controllers\Backend\Hr_Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\CompanyBranch;
use App\Models\HrManagement;
use Image;



class HrManagementController extends Controller
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
        $hrmanagement = HrManagement::all();
        return view('backend.pages.hr_management.index')->withHrmanagements($hrmanagement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch= CompanyBranch::pluck('id','branch_name');
        return view('backend.pages.hr_management.create')->withBranches($branch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hrmanagement=new HrManagement;
        $variable=$request->toArray();
        foreach ($variable as $key => $value) {
           if($key!='_token' & $key!='image')
            $hrmanagement->$key=$value;
        }

        $image=$request->file('image');
      
        //dd($image);
        $filename='Employee'.'-'.time().'.'.$image->getClientOriginalName();//part of image intervention library
        $location=public_path('/images/employeeImage/'.$filename);

      

        Image::make($image)->resize(800,600)->save($location);
        $hrmanagement->image=$filename;
        $hrmanagement->save();        
        //dd("hello");
        session()->flash('success', 'The Employee Profile Has Been Added Successfully!');
        return redirect()->route('admin.hr_management.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hrmanagement_id)
    {
        $hrmanagement = HrManagement::findOrFail($hrmanagement_id);
        $profile = HrManagement::all();
   
         return view('backend.pages.hr_management.show',compact('hrmanagement','profile'));
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

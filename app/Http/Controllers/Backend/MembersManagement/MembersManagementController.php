<?php

namespace App\Http\Controllers\Backend\MembersManagement;

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
use App\Models\HrManagement;



class MembersManagementController extends Controller
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
        $member = MemberManagement::all();
        //dd($member[0]->branchdet->branch_name);
        
        return view('backend.pages.members_management.index')->withMember($member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch= CompanyBranch::pluck('id','branch_name');
        $hrmanagement = HrManagement::pluck('hrmanagement_id','name');
       // dd($hrmanagement);
        //dd($branch);
        return view('backend.pages.members_management.create')->withBranches($branch)->withHrmanagements($hrmanagement);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member=new MemberManagement;
        $x=$request->request;
        $data=$request->toArray();
        $member->associate          =   $data['associate'];
        $member->group              =   $data['group'];
        $member->branch             =   $data['branch'];
        $member->emr_date           =   $data['emr_date'];
        $member->title              =   $data['title'];
        $member->gender             =   $data['gender'];
        $member->first_name         =   $data['first_name'];
        $member->middle_name        =   $data['middle_name'];
        $member->last_name          =   $data['last_name'];
        $member->dob                =   $data['dob'];
        $member->qualification      =   $data['qualification'];
        $member->occupation         =   $data['occupation'];
        $member->monthly_income     =   $data['monthly_income'];
        $member->father_name        =   $data['father_name'];
        $member->mother_name        =   $data['mother_name'];
        $member->husbandWife_name   =   $data['husbandWife_name'];
        $member->mobile             =   $data['mobile'];
        $member->email              =   $data['email'];
        $member->marital_status     =   $data['marital_status'];
        $member->address            =   $data['address'];
        $member->ward               =   $data['ward'];
        $member->area               =   $data['area'];
        $member->landmark           =   $data['landmark'];
        $member->dist               =   $data['dist'];
        $member->state              =   $data['state'];
        $member->pincode            =   $data['pincode'];
        $member->country            =   $data['country'];
        $member->p_address          =   $data['p_address'];
        $member->p_dist             =   $data['p_dist'];
        $member->p_state            =   $data['p_state'];
        $member->p_pincode          =   $data['p_pincode'];
        $member->p_country          =   $data['p_country'];
        $member->latitude           =   $data['latitude'];
        $member->longitude          =   $data['longitude'];

        $member->adhar_no           =   $data['adhar_no'];
        $member->voter_no           =   $data['voter_no'];
        $member->pan_no             =   $data['pan_no'];
        $member->ration_no          =   $data['ration_no'];
        $member->meter_no           =   $data['meter_no'];
        $member->cl_no              =   $data['cl_no'];
        $member->cl_relation        =   $data['cl_relation'];
        $member->dl_no              =   $data['dl_no'];
        $member->passport_no        =   $data['passport_no'];


        $member->nominee_name       =   $data['nominee_name'];
        $member->nominee_relation   =   $data['nominee_relation'];
        $member->nominee_mobile     =   $data['nominee_mobile'];
        $member->nominee_dob        =   $data['nominee_dob'];
        $member->nominee_adhar      =   $data['nominee_adhar'];
        $member->nominee_voter      =   $data['nominee_voter'];
        $member->nominee_pan        =   $data['nominee_pan'];
        $member->nominee_ration     =   $data['nominee_ration'];
        $member->nominee_address    =   $data['nominee_address'];
        $member->senior_citizen     =   'no';
        $member->kyc_status         =   '0';
        $member->status             =   'Active';

        // file for photo
        $file=$request->file('image_photo');
        $filename='KYC-Members-photo'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_photo');
        $file->move($destinationPath,$filename);
        $member->image_photo=$filename;

        // end photo file

         // file for ID proof
         $file=$request->file('image_idproof');
         $filename='KYC-Members-IDphoto'.time().$file->getClientOriginalName();
         
         $destinationPath = public_path('images/KYC-Member/member_idProof');
         $file->move($destinationPath,$filename);
         $member->image_idproof=$filename;
 
         // end ID proof file

        // file for member address
        $file=$request->file('image_address');
        $filename='KYC-Members-address'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_address');
        $file->move($destinationPath,$filename);
        $member->image_address=$filename;

        // end member address file

        // file for member pan
        $file=$request->file('image_pan');
        $filename='KYC-Members-pan'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_pan');
        $file->move($destinationPath,$filename);
        $member->image_pan=$filename;

        // end member pan file

        // file for member signature
        $file=$request->file('image_signature');
        $filename='KYC-Members-signature'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_signature');
        $file->move($destinationPath,$filename);
        $member->image_signature=$filename;

        // end member signature file

        $member->save();        
      
        session()->flash('success', 'The Members Profile Has Been Added Successfully!');
        return redirect()->route('admin.members_management.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($member_id)
    {
        $member = MemberManagement::findOrFail($member_id);
        $profile = MemberManagement::all();
    //dd($company);
         return view('backend.pages.members_management.show',compact('member','profile')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($member_id)
    {
        $member = MemberManagement::find($member_id);
        $branch= CompanyBranch::pluck('id','branch_name');
        $hrmanagement = HrManagement::pluck('hrmanagement_id','name');
    
        return view('backend.pages.members_management.edit')->withMember($member)->withBranches($branch)->withHrmanagements($hrmanagement); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member_id)
    {
       // dd($request);
        $member=MemberManagement::find($member_id);
        //dd($member);
        // $x=$request->request;
        // $data=$request->toArray();
        $member->associate          =   $request->associate;
        $member->group              =   $request->group;
        $member->branch             =   $request->branch;
        $member->emr_date           =   $request->emr_date;
        $member->title              =   $request->title;
        $member->gender             =   $request->gender;
        $member->first_name         =   $request->first_name;
        $member->middle_name        =   $request->middle_name;
        $member->last_name          =   $request->last_name;
        $member->dob                =   $request->dob;
        $member->qualification      =   $request->qualification;
        $member->occupation         =   $request->occupation;
        $member->monthly_income     =   $request->monthly_income;
        $member->father_name        =   $request->father_name;
        $member->mother_name        =   $request->mother_name;
        $member->husbandWife_name   =   $request->husbandWife_name;
        $member->mobile             =   $request->mobile;
        $member->email              =   $request->email;
        $member->marital_status     =   $request->marital_status;
        $member->address            =   $request->address;
        $member->ward               =   $request->ward;
        $member->area               =   $request->area;
        $member->landmark           =   $request->landmark;
        $member->dist               =   $request->dist;
        $member->state              =   $request->state;
        $member->pincode            =   $request->pincode;
        $member->country            =   $request->country;
        $member->p_address          =   $request->p_address;
        $member->p_dist             =   $request->p_dist;
        $member->p_state            =   $request->p_state;
        $member->p_pincode          =   $request->p_pincode;
        $member->p_country          =   $request->p_country;
        $member->latitude           =   $request->latitude;
        $member->longitude          =   $request->longitude;

        $member->adhar_no           =   $request->adhar_no;
        $member->voter_no           =   $request->voter_no;
        $member->pan_no             =   $request->pan_no;
        $member->ration_no          =   $request->ration_no;
        $member->meter_no           =   $request->meter_no;
        $member->cl_no              =   $request->cl_no;
        $member->cl_relation        =   $request->cl_relation;
        $member->dl_no              =   $request->dl_no;
        $member->passport_no        =   $request->passport_no;


        $member->nominee_name       =   $request->nominee_name;
        $member->nominee_relation   =   $request->nominee_relation;
        $member->nominee_mobile     =   $request->nominee_mobile;
        $member->nominee_dob        =   $request->nominee_dob;
        $member->nominee_adhar      =   $request->nominee_adhar;
        $member->nominee_voter      =   $request->nominee_voter;
        $member->nominee_pan        =   $request->nominee_pan;
        $member->nominee_ration     =   $request->nominee_ration;
        $member->nominee_address    =   $request->nominee_address;
        $member->senior_citizen     =   'no';
        $member->kyc_status         =   $request->kyc_status;
     
        $member->status             =   'Active';

        // file for photo
        $file=$request->file('image_photo');
        $filename='KYC-Members-photo'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_photo');
        $file->move($destinationPath,$filename);
        $member->image_photo=$filename;

        // end photo file

         // file for ID proof
         $file=$request->file('image_idproof');
         $filename='KYC-Members-IDphoto'.time().$file->getClientOriginalName();
         
         $destinationPath = public_path('images/KYC-Member/member_idProof');
         $file->move($destinationPath,$filename);
         $member->image_idproof=$filename;
 
         // end ID proof file

        // file for member address
        $file=$request->file('image_address');
        $filename='KYC-Members-address'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_address');
        $file->move($destinationPath,$filename);
        $member->image_address=$filename;

        // end member address file

        // file for member pan
        $file=$request->file('image_pan');
        $filename='KYC-Members-pan'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_pan');
        $file->move($destinationPath,$filename);
        $member->image_pan=$filename;

        // end member pan file

        // file for member signature
        $file=$request->file('image_signature');
        $filename='KYC-Members-signature'.time().$file->getClientOriginalName();
        
        $destinationPath = public_path('images/KYC-Member/member_signature');
        $file->move($destinationPath,$filename);
        $member->image_signature=$filename;

        // end member signature file

        $member->save();        
      
        session()->flash('success', 'The Members Profile Has Been Updated!!!');
        return redirect()->route('admin.members_management.index');

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

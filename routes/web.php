<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
    Route::resource('blogs', 'Backend\BlogController', ['names' => 'admin.blogs']);
    Route::resource('supports', 'Backend\SupportController', ['names' => 'admin.support']);
    Route::resource('company', 'Backend\CompanyProfileController', ['names' => 'admin.company']);
    Route::resource('comp_branch', 'Backend\CompanyBranchController', ['names' => 'admin.comp_branch']);
    Route::resource('comp_director', 'Backend\CompanyDirectorController', ['names' => 'admin.comp_director']);
    Route::resource('hr_management', 'Backend\Hr_Management\HrManagementController', ['names' => 'admin.hr_management']);
    Route::resource('loan_application', 'Backend\Loan\LoanApplicationController', ['names' => 'admin.loan_application']);
    Route::resource('members_management', 'Backend\MembersManagement\MembersManagementController', ['names' => 'admin.members_management']);
    Route::resource('loan_schema', 'Backend\Loan\LoanSchemaController', ['names' => 'admin.loan_schema']);
    Route::resource('loan_disbursements', 'Backend\Loan\LoanDisbursementController', ['names' => 'admin.loan_disbursements']);
    Route::get('scheme_details/{id}', 'Backend\Loan\LoanSchemaController@loan_details', ['names' => 'admin.scheme_details']);
    Route::get('application_details/{id}', 'Backend\Loan\LoanApplicationController@loan_appli_details', ['names' => 'admin.application_details']);
    Route::get('kyc_status/{id}', array('uses'=>'Backend\MembersManagement\MembersManagementController@updateKYCStatus', 'as' => 'admin.kyc_statusUpdate'));
    Route::get('member_details/{id}', 'Backend\MembersManagement\MembersManagementController@member_details', ['names' => 'admin.member_details']);
    Route::get('/upload_application_doc', array('uses'=>'Backend\Loan\LoanApplicationController@uploadDoc', 'as' => 'admin.upload_application_doc'));



   # Route::resource('approval_loan_application', 'Backend\Loan\LoanApplicationApproval', ['names' => 'admin.approval_loan_application']);
    Route::get('loan_approval', array('uses'=>'Backend\Loan\LoanApplicationController@approval', 'as' => 'admin.loan_approval'));
    Route::get('loan_approvalUpdate/{id}', array('uses'=>'Backend\Loan\LoanApplicationController@updateStatus', 'as' => 'admin.loan_approvalUpdate'));
    Route::resource('loan_appli_accnt', 'Backend\Loan\LoanAccountController', ['names' => 'admin.loan_appli_accnt']);

    #Route::resource('loan_disbursement_approval', 'Backend\Loan\LoanDisbursementController', ['names' => 'admin.loan_disbursement_approval']);
   
  
    Route::resource('loan_disbursement_approval', 'Backend\Loan\LoanDisbursementController', ['names' => 'admin.loan_disbursement_approval']);

    Route::resource('collec_branch', 'Backend\Collection_Center\CollectionCenterController', ['names' => 'admin.collec_branch']);


   
   # Route::get('itsolutionstuff/tag/{id}', array('as'=> 'itsolutionstuff.tag', 'uses' => 'HomeController@tags'));


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommonMasters\GeneralMaster\CompanyController;
use App\Http\Controllers\Payroll\GeneralMaster\BloodGroupController;
// Payroll General Master
use App\Http\Controllers\Payroll\GeneralMaster\SalutationController;
use App\Http\Controllers\Payroll\GeneralMaster\GenderController;
use App\Http\Controllers\Payroll\GeneralMaster\NationalityController;
use App\Http\Controllers\Payroll\GeneralMaster\RaceController;
use App\Http\Controllers\Payroll\GeneralMaster\ReligionMasterController;
use App\Http\Controllers\Payroll\GeneralMaster\MaritalStatusController;
use App\Http\Controllers\Payroll\GeneralMaster\PhysicalStatusController;
// Payroll General Master Ends*****
// Payroll Employee Credentials
use App\Http\Controllers\Payroll\Credentials\CertificatesController;
use App\Http\Controllers\Payroll\Credentials\QualificationController;
use App\Http\Controllers\Payroll\Credentials\SkillsController;
// Payroll Employee Credentials Ends*****
// Payroll Employee Status
use App\Http\Controllers\Payroll\EmployeeStatus\DepartmentController;
use App\Http\Controllers\Payroll\EmployeeStatus\DesignationController;
use App\Http\Controllers\Payroll\EmployeeStatus\GradeController;
use App\Http\Controllers\Payroll\EmployeeStatus\TypeController;
// Payroll Employee Status Ends*****
use App\Http\Controllers\SalesForce\SalesAutomationController;
use App\Http\Controllers\AuthController;

// Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    // Route::get('register',[AuthController::class,'register_view'])->name('register');
    // Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
// });



Route::group(['middleware'=>'auth'],function(){
    Route::get('/company/index', [CompanyController::class, 'Index']);
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

// Route::get('/', [DashboardController::class,'index']);
Route::get('/fastpath', [DashboardController::class,'FastPath']);


Route::post('/current_url', [DashboardController::class,'current_url']);

Route::get('/test_table', [DashboardController::class,'test']);





Route::get('/table', function () {
    return view('table');
});


// Route::get('/company/index', [DashboardController::class,'companymaster']);
Route::get('/system/index', [DashboardController::class,'systemmaster']);


Route::get('/new/index', [DashboardController::class,'tabform']);


//Route for Company Master 3SIS
// Route::get('/company/index', [CompanyController::class, 'Index']);
Route::GET('/company/Master',[CompanyController::class, 'BrowserData'])->name('company.browserData');
Route::GET('/company/Master/Update',[CompanyController::class, 'FetchData'])->name('company.fetchData');
Route::POST('/company/Master/Add',[CompanyController::class, 'PostData'])->name('company.postData');
Route::GET('/company/Master/Delete',[CompanyController::class, 'DeleteData'])->name('company.deleteData');
Route::GET('/company/Master1',[CompanyController::class, 'BrowserDeletedRecords'])->name('company.browserDeletedRecords');
Route::GET('/company/Master/Undelete',[CompanyController::class, 'RestoreDeletedRecord'])->name('company.restoreDeletedRecords');
Route::POST('/company/Master/getGeoDesc',[CompanyController::class, 'GetGeoDesc'])->name('company.getGeoDesc');

Route::post('/city/dropdown',[CompanyController::class, 'getcityStateDropDown'])->name('dropDownMasters.getGeoDesc');
//Route for Company Master 3SIS Ends

//tab design test 
Route::get('/tabs', [CompanyController::class, 'Tab']);

//Payroll Employee Credentials**********
    //Route for Qualification Master 3SIS
    Route::get('/qualification/index', [QualificationController::class, 'Index']);
    Route::GET('/qualification/Master',[QualificationController::class, 'BrowserData'])->name('qualification.browserData');
    Route::GET('/qualification/Master/Update',[QualificationController::class, 'FetchData'])->name('qualification.fetchData');
    Route::POST('/qualification/Master/Add',[QualificationController::class, 'PostData'])->name('qualification.postData');
    Route::GET('/qualification/Master/Delete',[QualificationController::class, 'DeleteData'])->name('qualification.deleteData');
    Route::GET('/qualification/Master1',[QualificationController::class, 'BrowserDeletedRecords'])->name('qualification.browserDeletedRecords');
    Route::GET('/qualification/Master/Undelete',[QualificationController::class, 'RestoreDeletedRecord'])->name('qualification.restoreDeletedRecords');
    //Route for Qualification Master 3SIS Ends
    //Route for Certificates Master 3SIS
    Route::get('/certificates/index', [CertificatesController::class, 'Index']);
    Route::GET('/certificates/Master',[CertificatesController::class, 'BrowserData'])->name('certificates.browserData');
    Route::GET('/certificates/Master/Update',[CertificatesController::class, 'FetchData'])->name('certificates.fetchData');
    Route::POST('/certificates/Master/Add',[CertificatesController::class, 'PostData'])->name('certificates.postData');
    Route::GET('/certificates/Master/Delete',[CertificatesController::class, 'DeleteData'])->name('certificates.deleteData');
    Route::GET('/certificates/Master1',[CertificatesController::class, 'BrowserDeletedRecords'])->name('certificates.browserDeletedRecords');
    Route::GET('/certificates/Master/Undelete',[CertificatesController::class, 'RestoreDeletedRecord'])->name('certificates.restoreDeletedRecords');
    //Route for Certificates Master 3SIS Ends
    //Route for Skills Master 3SIS
    Route::get('/skills/index', [SkillsController::class, 'Index']);
    Route::GET('/skills/Master',[SkillsController::class, 'BrowserData'])->name('skills.browserData');
    Route::GET('/skills/Master/Update',[SkillsController::class, 'FetchData'])->name('skills.fetchData');
    Route::POST('/skills/Master/Add',[SkillsController::class, 'PostData'])->name('skills.postData');
    Route::GET('/skills/Master/Delete',[SkillsController::class, 'DeleteData'])->name('skills.deleteData');
    Route::GET('/skills/Master1',[SkillsController::class, 'BrowserDeletedRecords'])->name('skills.browserDeletedRecords');
    Route::GET('/skills/Master/Undelete',[SkillsController::class, 'RestoreDeletedRecord'])->name('skills.restoreDeletedRecords');
    //Route for Skills Master 3SIS Ends    
    //Payroll Employee Credentials Ends**********
//Route for BloodGroup Master 3SIS
Route::get('/bloodGroup/index', [BloodGroupController::class, 'Index']);
Route::GET('/bloodGroup/Master',[BloodGroupController::class, 'BrowserData'])->name('bloodGroup.browserData');
Route::GET('/bloodGroup/Master/Update',[BloodGroupController::class, 'FetchData'])->name('bloodGroup.fetchData');
Route::POST('/bloodGroup/Master/Add',[BloodGroupController::class, 'PostData'])->name('bloodGroup.postData');
Route::GET('/bloodGroup/Master/Delete',[BloodGroupController::class, 'DeleteData'])->name('bloodGroup.deleteData');
Route::GET('/bloodGroup/Master1',[BloodGroupController::class, 'BrowserDeletedRecords'])->name('bloodGroup.browserDeletedRecords');
Route::GET('/bloodGroup/Master/Undelete',[BloodGroupController::class, 'RestoreDeletedRecord'])->name('bloodGroup.restoreDeletedRecords');
//Route for BloodGroup Master 3SIS Ends
//Route for Gender Master 3SIS
Route::get('/gender/index', [GenderController::class, 'Index']);
Route::GET('/gender/Master',[GenderController::class, 'BrowserData'])->name('gender.browserData');
Route::GET('/gender/Master/Update',[GenderController::class, 'FetchData'])->name('gender.fetchData');
Route::POST('/gender/Master/Add',[GenderController::class, 'PostData'])->name('gender.postData');
Route::GET('/gender/Master/Delete',[GenderController::class, 'DeleteData'])->name('gender.deleteData');
Route::GET('/gender/Master1',[GenderController::class, 'BrowserDeletedRecords'])->name('gender.browserDeletedRecords');
Route::GET('/gender/Master/Undelete',[GenderController::class, 'RestoreDeletedRecord'])->name('gender.restoreDeletedRecords');
//Route for Gender Master 3SIS Ends
//Route for MaritalStatus Master 3SIS
Route::get('/maritalStatus/index', [MaritalStatusController::class, 'Index']);
Route::GET('/maritalStatus/Master',[MaritalStatusController::class, 'BrowserData'])->name('maritalStatus.browserData');
Route::GET('/maritalStatus/Master/Update',[MaritalStatusController::class, 'FetchData'])->name('maritalStatus.fetchData');
Route::POST('/maritalStatus/Master/Add',[MaritalStatusController::class, 'PostData'])->name('maritalStatus.postData');
Route::GET('/maritalStatus/Master/Delete',[MaritalStatusController::class, 'DeleteData'])->name('maritalStatus.deleteData');
Route::GET('/maritalStatus/Master1',[MaritalStatusController::class, 'BrowserDeletedRecords'])->name('maritalStatus.browserDeletedRecords');
Route::GET('/maritalStatus/Master/Undelete',[MaritalStatusController::class, 'RestoreDeletedRecord'])->name('maritalStatus.restoreDeletedRecords');
//Route for MaritalStatus Master 3SIS Ends
//Route for Nationality Master 3SIS
Route::get('/nationality/index', [NationalityController::class, 'Index']);
Route::GET('/nationality/Master',[NationalityController::class, 'BrowserData'])->name('nationality.browserData');
Route::GET('/nationality/Master/Update',[NationalityController::class, 'FetchData'])->name('nationality.fetchData');
Route::POST('/nationality/Master/Add',[NationalityController::class, 'PostData'])->name('nationality.postData');
Route::GET('/nationality/Master/Delete',[NationalityController::class, 'DeleteData'])->name('nationality.deleteData');
Route::GET('/nationality/Master1',[NationalityController::class, 'BrowserDeletedRecords'])->name('nationality.browserDeletedRecords');
Route::GET('/nationality/Master/Undelete',[NationalityController::class, 'RestoreDeletedRecord'])->name('nationality.restoreDeletedRecords');
//Route for Nationality Master 3SIS Ends
//Route for PhysicalStatus Master 3SIS
Route::get('/physicalStatus/index', [PhysicalStatusController::class, 'Index']);
Route::GET('/physicalStatus/Master',[PhysicalStatusController::class, 'BrowserData'])->name('physicalStatus.browserData');
Route::GET('/physicalStatus/Master/Update',[PhysicalStatusController::class, 'FetchData'])->name('physicalStatus.fetchData');
Route::POST('/physicalStatus/Master/Add',[PhysicalStatusController::class, 'PostData'])->name('physicalStatus.postData');
Route::GET('/physicalStatus/Master/Delete',[PhysicalStatusController::class, 'DeleteData'])->name('physicalStatus.deleteData');
Route::GET('/physicalStatus/Master1',[PhysicalStatusController::class, 'BrowserDeletedRecords'])->name('physicalStatus.browserDeletedRecords');
Route::GET('/physicalStatus/Master/Undelete',[PhysicalStatusController::class, 'RestoreDeletedRecord'])->name('physicalStatus.restoreDeletedRecords');
//Route for PhysicalStatus Master 3SIS Ends
//Route for Race Master 3SIS
Route::get('/race/index', [RaceController::class, 'Index']);
Route::GET('/race/Master',[RaceController::class, 'BrowserData'])->name('race.browserData');
Route::GET('/race/Master/Update',[RaceController::class, 'FetchData'])->name('race.fetchData');
Route::POST('/race/Master/Add',[RaceController::class, 'PostData'])->name('race.postData');
Route::GET('/race/Master/Delete',[RaceController::class, 'DeleteData'])->name('race.deleteData');
Route::GET('/race/Master1',[RaceController::class, 'BrowserDeletedRecords'])->name('race.browserDeletedRecords');
Route::GET('/race/Master/Undelete',[RaceController::class, 'RestoreDeletedRecord'])->name('race.restoreDeletedRecords');
//Route for Race Master 3SIS Ends
//Route for ReligionMaster Master 3SIS
Route::get('/religion/index', [ReligionMasterController::class, 'Index']);
Route::GET('/religionMaster/Master',[ReligionMasterController::class, 'BrowserData'])->name('religionMaster.browserData');
Route::GET('/religionMaster/Master/Update',[ReligionMasterController::class, 'FetchData'])->name('religionMaster.fetchData');
Route::POST('/religionMaster/Master/Add',[ReligionMasterController::class, 'PostData'])->name('religionMaster.postData');
Route::GET('/religionMaster/Master/Delete',[ReligionMasterController::class, 'DeleteData'])->name('religionMaster.deleteData');
Route::GET('/religionMaster/Master1',[ReligionMasterController::class, 'BrowserDeletedRecords'])->name('religionMaster.browserDeletedRecords');
Route::GET('/religionMaster/Master/Undelete',[ReligionMasterController::class, 'RestoreDeletedRecord'])->name('religionMaster.restoreDeletedRecords');
//Route for ReligionMaster Master 3SIS Ends 
 //Route for Salutation Master 3SIS
 Route::get('/salutation/index', [SalutationController::class, 'Index']);
 Route::GET('/salutation/Master',[SalutationController::class, 'BrowserData'])->name('salutation.browserData');
 Route::GET('/salutation/Master/Update',[SalutationController::class, 'FetchData'])->name('salutation.fetchData');
 Route::POST('/salutation/Master/Add',[SalutationController::class, 'PostData'])->name('salutation.postData');
 Route::GET('/salutation/Master/Delete',[SalutationController::class, 'DeleteData'])->name('salutation.deleteData');
 Route::GET('/salutation/Master1',[SalutationController::class, 'BrowserDeletedRecords'])->name('salutation.browserDeletedRecords');
 Route::GET('/salutation/Master/Undelete',[SalutationController::class, 'RestoreDeletedRecord'])->name('salutation.restoreDeletedRecords');
 //Route for Salutation Master 3SIS Ends

  //Payroll Employee Status**********
    //Route for Type Master 3SIS
    Route::get('/type/index', [TypeController::class, 'Index']);
    Route::GET('/type/Master',[TypeController::class, 'BrowserData'])->name('type.browserData');
    Route::GET('/type/Master/Update',[TypeController::class, 'FetchData'])->name('type.fetchData');
    Route::POST('/type/Master/Add',[TypeController::class, 'PostData'])->name('type.postData');
    Route::GET('/type/Master/Delete',[TypeController::class, 'DeleteData'])->name('type.deleteData');
    Route::GET('/type/Master1',[TypeController::class, 'BrowserDeletedRecords'])->name('type.browserDeletedRecords');
    Route::GET('/type/Master/Undelete',[TypeController::class, 'RestoreDeletedRecord'])->name('type.restoreDeletedRecords');
    //Route for Type Master 3SIS Ends
    //Route for Department Master 3SIS
    Route::get('/department/index', [DepartmentController::class, 'Index']);
    Route::GET('/department/Master',[DepartmentController::class, 'BrowserData'])->name('department.browserData');
    Route::GET('/department/Master/Update',[DepartmentController::class, 'FetchData'])->name('department.fetchData');
    Route::POST('/department/Master/Add',[DepartmentController::class, 'PostData'])->name('department.postData');
    Route::GET('/department/Master/Delete',[DepartmentController::class, 'DeleteData'])->name('department.deleteData');
    Route::GET('/department/Master1',[DepartmentController::class, 'BrowserDeletedRecords'])->name('department.browserDeletedRecords');
    Route::GET('/department/Master/Undelete',[DepartmentController::class, 'RestoreDeletedRecord'])->name('department.restoreDeletedRecords');
    //Route for Department Master 3SIS Ends
    //Route for Grade Master 3SIS
    Route::get('/grade/index', [GradeController::class, 'Index']);
    Route::GET('/grade/Master',[GradeController::class, 'BrowserData'])->name('grade.browserData');
    Route::GET('/grade/Master/Update',[GradeController::class, 'FetchData'])->name('grade.fetchData');
    Route::POST('/grade/Master/Add',[GradeController::class, 'PostData'])->name('grade.postData');
    Route::GET('/grade/Master/Delete',[GradeController::class, 'DeleteData'])->name('grade.deleteData');
    Route::GET('/grade/Master1',[GradeController::class, 'BrowserDeletedRecords'])->name('grade.browserDeletedRecords');
    Route::GET('/grade/Master/Undelete',[GradeController::class, 'RestoreDeletedRecord'])->name('grade.restoreDeletedRecords');
    //Route for Grade Master 3SIS Ends
    //Route for Designation Master 3SIS
    Route::get('/designation/index', [DesignationController::class, 'Index']);
    Route::GET('/designation/Master',[DesignationController::class, 'BrowserData'])->name('designation.browserData');
    Route::GET('/designation/Master/Update',[DesignationController::class, 'FetchData'])->name('designation.fetchData');
    Route::POST('/designation/Master/Add',[DesignationController::class, 'PostData'])->name('designation.postData');
    Route::GET('/designation/Master/Delete',[DesignationController::class, 'DeleteData'])->name('designation.deleteData');
    Route::GET('/designation/Master1',[DesignationController::class, 'BrowserDeletedRecords'])->name('designation.browserDeletedRecords');
    Route::GET('/designation/Master/Undelete',[DesignationController::class, 'RestoreDeletedRecord'])->name('designation.restoreDeletedRecords');
    //Route for Designation Master 3SIS Ends
    //Payroll Employee Status Ends**********

    //Route for Designation Master 3SIS
    Route::get('/salesAutomation/index', [SalesAutomationController::class, 'Index']);
    Route::GET('/salesAutomation/Master',[SalesAutomationController::class, 'BrowserData'])->name('salesAutomation.browserData');
    
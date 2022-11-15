@extends('layouts.app')
@section('content')
@section('css')
@endsection
<div class="layout-px-spacing">
    <div>
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class=" br-6" style="padding-top: 5px;">
                <div style='float:right; padding-right:30px'>
                    <button type='button' name='Undo' id='Undelete_Data' class='btn btnUnDeleteRec3SIS'>
                        <i class="fa fa-undo  m-1" style="font-size:20px"></i>
                    </button>
                    <button type='button' name='add' id='add_Data' class='btn btnAddRec3SIS'>
                        <i class="fa fa-plus-square m-1" style="font-size:20px"></i>
                    </button>
                </div>
                <div class="table-responsive" style="padding-top: 5px;">
                    <table id="landingPageBrowser3SIS" class="{{ $theme_Browser1_3SIS }}" style="width:100%">
                        <thead>
                            <tr>
                                <!--CopyChange-->
                                <th title="Company Id">ID</th>
                                <th>Company Name</th>
                                <th>Nick Name</th>
                                <th>Tag Line</th>
                                <th>Action</th>
                                <th style="visibility: hidden;">Desc2</th>
                                <th style="visibility: hidden;">Bi Desc</th>
                                <th style="visibility: hidden;">User</th>
                                <th style="visibility: hidden;">Updated</th>
                                <th style="visibility: hidden;">Unique Id</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- start undeletemodal -->
                <div id='dataTableModalSmall' class='modal fade  register-modal' role='dialog'
                    aria-labelledby="registerModalLabel" aria-hidden="true" style='margin-top:40px'
                    data-backdrop="static">
                    <div class='modal-dialog modal-dialog-centered modal-lg'role="document">
                        <div class='modal-content {{ $theme_ContentModal2D_3SIS }}'>
                            <div class="modal-header" id="registerModalLabel">
                                <h4 class="modal-title" style="color:white"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x text-danger">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>
                            </div>
                            <!--CopyChange-->
                            <div class='modal-body'>
                                <div class="container-fluid">
                                    <div class="table-responsive">
                                        <table id="html-extension3SIS"
                                            class="{{ $theme_Browser2_3SIS }} style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th title="Company Master">ID</th>
                                                    <th>Company Name</th>
                                                    <th>Desc1</th>
                                                    <th>Action</th>
                                                    <th style="visibility: hidden;">Unique Id</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='dataTableModalSmall' class='modal fade  register-modal' role='dialog'
                    aria-labelledby="registerModalLabel" aria-hidden="true" style='margin-top:40px'
                    data-backdrop="static">
                    <div class='modal-dialog modal-dialog-centered modal-lg'role="document">
                        <div class='modal-content'>
                            <div class="modal-header" id="registerModalLabel">
                                <h4 class="modal-title"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x text-danger">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>
                            </div>
                            <!--CopyChange-->
                            <div class='modal-body'>
                                <div class="container-fluid">
                                    <div class="table-responsive">
                                        <table id="html-extension3SIS" class="table table-hover non-hover"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th title="Company Master">ID</th>
                                                    <th>Company Name</th>
                                                    <th>Desc1</th>
                                                    <th>Action</th>
                                                    <th style="visibility: hidden;">Unique Id</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end undelete modal -->
                <div id="entryModalSmall" class="modal fade UpdateModalBox3SIS" data-backdrop="static"
                    data-keyboard="false" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered 3SISPro-modal-dialog modal-xl" role="document">
                        <div class='modal-content {{ $theme_ContentModal1D_3SIS }}'>
                            <div class="modal-header" id="registerModalLabel">
                                <h4 class="modal-title text-light">Master</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x text-danger">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>
                            </div>
                            <!--CopyChange-->
                            <form id='singleLevelDataEntryForm' autocomplete="off" method="post"
                                action="{{ route('company.postData') }}">
                                <input type="hidden" name="_token" id="csrfToken" value="{{ csrf_token() }}">
                                <div class="modal-body">
                                    <div id="toggleAccordion">
                                        <div class="card {{ $theme_Card1D_3SIS }}">
                                            <div class="card-header" style="background: black" id="headingOne1">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="" data-toggle="collapse"
                                                        data-target="#defaultAccordionOne" aria-expanded="true"
                                                        aria-controls="defaultAccordionOne">
                                                        General Info <div class="icons"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="defaultAccordionOne" class="collapse show"
                                                aria-labelledby="headingOne1" data-parent="#toggleAccordion"
                                                style="">
                                                <div class="card-body">
                                                    <!-- Hidden Fields -->
                                                    <div class='form-group mb-0'>
                                                        <input type="hidden" name='GMCOHUniqueId' id='GMCOHUniqueId'
                                                            class='form-control'>
                                                    </div>
                                                    <!-- Id, Description and Nick Name -->
                                                    <div class="row mt-0">
                                                        <div class="col-md-4">
                                                            <div class='form-group'>
                                                                <label>Company Id</label>
                                                                <span
                                                                    class="error-text GMCOHCompanyId_error text-danger"
                                                                    style='float:right;'></span>
                                                                <input type="text" name='GMCOHCompanyId'
                                                                    id='GMCOHCompanyId'
                                                                    class='form-control few-options' maxlength="10"
                                                                    placeholder="Company Id" style='opacity:1'>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class='form-group'>
                                                                <label>Name</label>
                                                                <span class="error-text GMCOHDesc1_error text-danger"
                                                                    style='float:right;'></span>
                                                                <input type="text" name='GMCOHDesc1'
                                                                    id="GMCOHDesc1" maxlength="100"
                                                                    class="form-control few-options"
                                                                    placeholder="Company Name">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class='form-group'>
                                                                <label>Nick Name</label>
                                                                <input type="text" name='GMCOHNickName'
                                                                    id="GMCOHNickName" maxlength="50"
                                                                    class="form-control few-options"
                                                                    placeholder="Short Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Descriptin2, Tag Line and BI -->
                                                    <div class="row mt-0">
                                                        <div class="col-md-4">
                                                            <div class='form-group'>
                                                                <label>Description2</label>
                                                                <textarea name='GMCOHDesc2' id='GMCOHDesc2' class='form-control few-options' maxlength="200" name="alloptions"
                                                                    id="alloptions1" placeholder="Company Description2" aria-label="With textarea"
                                                                    style='border-color: rgb(102, 175, 233); outline: 0px'></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class='form-group '>
                                                                <label>Tag Line</label>
                                                                <input type="text" name='GMCOHTagLine'
                                                                    id='GMCOHTagLine' class='form-control few-options'
                                                                    maxlength="100" placeholder="Tag Line">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class='form-group '>
                                                                <label>BI Desc</label>
                                                                <input type="text" name='GMCOHBiDesc'
                                                                    id='GMCOHBiDesc'
                                                                    class='form-control few-options'maxlength="100"
                                                                    placeholder="BI Description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Dropdown for Currency, Qty & Value Decimal  -->
                                                    <div class="row mt-0">
                                                        <div class="col-md-4">
                                                            <div class='form-group'>
                                                                <label>Currency Id</label>
                                                                <span class="error-text currenyId_error text-danger"
                                                                    style='float:right;'></span>
                                                                <select id='currenyId' name='currenyId'
                                                                    style='width: 100%;'>
                                                                    <option value=''>-- Select Currency Id --
                                                                    </option>
                                                                    @foreach ($currency_list as $currency)
                                                                        <option
                                                                            value='{{ $currency->GMCRHCurrencyId }}'
                                                                            <option
                                                                            {{ $currency->GMCRHCurrencyId == 'INR' ? 'selected' : '' }}>
                                                                            {{ $currency->GMCRHCurrencyId }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class='form-group'>
                                                                <label>Quantity Decimals</label>
                                                                <span class="error-text quantityId_error text-danger"
                                                                    style='float:right;'></span>
                                                                <select id='quantityId' name='quantityId'
                                                                    style='width: 100%;'>
                                                                    <option value='0'>0</option>
                                                                    <option value='1'>1</option>
                                                                    <option selected='selected' value='2'>2
                                                                    </option>
                                                                    <option value='3'>3</option>
                                                                    <option value='4'>4</option>
                                                                    <option value='5'>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class='form-group'>
                                                                <label>Value Decimals</label>
                                                                <span class="error-text valueId_error text-danger"
                                                                    style='float:right;'></span>
                                                                <select id='valueId' name='valueId'
                                                                    style='width: 100%;'>
                                                                    <option value='0'>0</option>
                                                                    <option value='1'>1</option>
                                                                    <option selected='selected' value='2'>2
                                                                    </option>
                                                                    <option value='3'>3</option>
                                                                    <option value='4'>4</option>
                                                                    <option value='5'>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Landline, Mobile, Email and Website -->
                                                    <div class="row mt-0">
                                                        <div class="col-md-3">
                                                            <div class='form-group'>
                                                                <label>Land Line</label>
                                                                <input type="text" name='GMCOHLandLine'
                                                                    id='GMCOHLandLine'
                                                                    class='form-control few-options'maxlength="50"
                                                                    placeholder="Land Line No.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class='form-group '>
                                                                <label>Mobile No.</label>
                                                                <input type="text" name='GMCOHMobileNo'
                                                                    id='GMCOHMobileNo'
                                                                    class='form-control few-options'maxlength="50"
                                                                    placeholder="Mobile No.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class='form-group '>
                                                                <label>Email Id</label>
                                                                <input type="text" name='GMCOHEmail'
                                                                    id='GMCOHEmail'
                                                                    class='form-control few-options'maxlength="100"
                                                                    placeholder="Email Id">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class='form-group '>
                                                                <label>Web Site</label>
                                                                <input type="text" name='GMCOHWebsite'
                                                                    id='GMCOHWebsite'
                                                                    class='form-control few-options'maxlength="100"
                                                                    placeholder="Web Site">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card {{ $theme_Card1D_3SIS }}">
                                            <div class="card-header" style="background: black" id="headingTwo1">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse"
                                                        data-target="#defaultAccordionTwo" aria-expanded="false"
                                                        aria-controls="defaultAccordionTwo">
                                                        Address <div class="icons"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="defaultAccordionTwo" class="collapse"
                                                aria-labelledby="headingTwo1" data-parent="#toggleAccordion"
                                                style="">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <!-- Address1, 2, 3 -->
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" name="GMCOHAddress1"
                                                                    id="GMCOHAddress1"
                                                                    class='form-control few-options' maxlength="200"
                                                                    placeholder="Address 1" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="GMCOHAddress2"
                                                                    id="GMCOHAddress2"
                                                                    class='form-control few-options' maxlength="200"
                                                                    placeholder="Address 2" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="GMCOHAddress3"
                                                                    id="GMCOHAddress3"
                                                                    class='form-control few-options' maxlength="200"
                                                                    placeholder="Address 3" />
                                                            </div>
                                                            <!-- City, State, Country & Pin Code -->
                                                            <div class="row mt-0">
                                                                <div class="col-md-3">
                                                                    <div class='form-group'>
                                                                        <label>City</label>
                                                                        <span
                                                                            class="error-text cityId_error text-danger"
                                                                            style='float:right;'></span>
                                                                        <select id='cityId' name='cityId'
                                                                            style='width: 100%;'>
                                                                            <option value=''>-- Select City Id --
                                                                            </option>
                                                                            @foreach ($city_list as $city)
                                                                                <option
                                                                                    value='{{ $city->GMCTHCityId }}'>
                                                                                    {{ $city->GMCTHDesc1 }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input type="hidden" name="GMCOHStateId"
                                                                            id="GMCOHStateId">
                                                                        <input type="text" name="stateDesc1"
                                                                            id="stateDesc1" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Country</label>
                                                                        <input type="hidden" name="GMCOHCountryId"
                                                                            id="GMCOHCountryId">
                                                                        <input type="text" name="countryDesc1"
                                                                            id="countryDesc1" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Pin Code</label>
                                                                        <input type="text" name="GMCOHPinCode"
                                                                            id="GMCOHPinCode"
                                                                            class='form-control few-options'
                                                                            maxlength="50" placeholder="Pin Code" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card {{ $theme_Card1D_3SIS }}">
                                            <div class="card-header" style="background: black" id="headingThree1">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse"
                                                        data-target="#defaultAccordionThree" aria-expanded="false"
                                                        aria-controls="defaultAccordionThree">
                                                        Banking Info <div class="icons"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="defaultAccordionThree" class="collapse"
                                                aria-labelledby="headingThree1" data-parent="#toggleAccordion"
                                                style="">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <div class='row'>
                                                                <!-- Banking 1 -->
                                                                <div class="col-md-6">
                                                                    <div class="col-md-12">
                                                                        <div class="row mt-0">
                                                                            <div class='form-group mb-0'>
                                                                                <label
                                                                                    style='color:#ffc107'>Bank1</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-0">
                                                                        <div class="col-md-12">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#ffc107'>Branch</label>
                                                                                <select id='branchId1'
                                                                                    name='branchId1'
                                                                                    style='width: 100%;'>
                                                                                    <option value=''>-- Select
                                                                                        Branch --</option>
                                                                                    @foreach ($branch_list as $bank1)
                                                                                        <option
                                                                                            value='{{ $bank1->BMBRHBranchId }}'>
                                                                                            {{ $bank1->BMBRHDesc1 }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-0">
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#ffc107'>Bank</label>
                                                                                <input type="hidden"
                                                                                    name="GMCOHBankId1"
                                                                                    id="GMCOHBankId1">
                                                                                <input type="text" name="bankName1"
                                                                                    id="bankName1"
                                                                                    class="form-control" readonly />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label style='color:#ffc107'>IFS
                                                                                    Code</label>
                                                                                <input type="text"
                                                                                    name="GMCOHIFSId1"
                                                                                    id="GMCOHIFSId1"
                                                                                    class="form-control" readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-0">
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#ffc107'>Acct.Name</label>
                                                                                <input type="text"
                                                                                    name="GMCOHBankAcName1"
                                                                                    id="GMCOHBankAcName1"
                                                                                    maxlength="100"
                                                                                    class="form-control few-options"
                                                                                    placeholder="Acct.Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#ffc107'>Acct.No.</label>
                                                                                <input type="text"
                                                                                    name="GMCOHBankAccNo1"
                                                                                    id="GMCOHBankAccNo1"
                                                                                    maxlength="100"
                                                                                    class="form-control few-options"
                                                                                    placeholder="Acct.No.">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Banking 2 -->
                                                                <div class="col-md-6">
                                                                    <div class="col-md-12">
                                                                        <div class="row mt-0">
                                                                            <div class='form-group mb-0'>
                                                                                <label
                                                                                    style='color:#20c997'>Bank2</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-0">
                                                                        <div class="col-md-12">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#20c997'>Branch</label>
                                                                                <select id='branchId2'
                                                                                    name='branchId2'
                                                                                    style='width: 100%;'>
                                                                                    <option value=''>-- Select
                                                                                        Branch --</option>
                                                                                    @foreach ($branch_list as $bank1)
                                                                                        <option
                                                                                            value='{{ $bank1->BMBRHBranchId }}'>
                                                                                            {{ $bank1->BMBRHDesc1 }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-0">
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#20c997'>Bank</label>
                                                                                <input type="hidden"
                                                                                    name="GMCOHBankId2"
                                                                                    id="GMCOHBankId2">
                                                                                <input type="text" name="bankName2"
                                                                                    id="bankName2"
                                                                                    class="form-control" readonly />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label style='color:#20c997'>IFS
                                                                                    Code</label>
                                                                                <input type="text"
                                                                                    name="GMCOHIFSId2"
                                                                                    id="GMCOHIFSId2"
                                                                                    class="form-control" readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-0">
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#20c997'>Acct.Name</label>
                                                                                <input type="text"
                                                                                    name="GMCOHBankAcName2"
                                                                                    id="GMCOHBankAcName2"
                                                                                    maxlength="100"
                                                                                    class="form-control few-options"
                                                                                    placeholder="Acct.Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class='form-group'>
                                                                                <label
                                                                                    style='color:#20c997'>Acct.No.</label>
                                                                                <input type="text"
                                                                                    name="GMCOHBankAccNo2"
                                                                                    id="GMCOHBankAccNo2"
                                                                                    maxlength="100"
                                                                                    class="form-control few-options"
                                                                                    placeholder="Acct.No.">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card {{ $theme_Card1D_3SIS }}">
                                            <div class="card-header" style="background: black" id="headingfour1">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse"
                                                        data-target="#defaultAccordionfour" aria-expanded="false"
                                                        aria-controls="defaultAccordionfour">
                                                        Statutory Info / Logo <div class="icons"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="defaultAccordionfour" class="collapse"
                                                aria-labelledby="headingThree1" data-parent="#toggleAccordion"
                                                style="">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <!-- PAN and GST -->
                                                            <div class="row mt-0">
                                                                <div class="col-md-6">
                                                                    <div class='form-group '>
                                                                        <label>GST No.</label>
                                                                        <input type="text" name='GMCOHGSTNo'
                                                                            id='GMCOHGSTNo'
                                                                            class='form-control few-options'
                                                                            maxlength="100" placeholder="GST No.">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class='form-group '>
                                                                        <label>PAN No.</label>
                                                                        <input type="text" name='GMCOHPANNo'
                                                                            id='GMCOHPANNo'
                                                                            class='form-control few-options'maxlength="100"
                                                                            placeholder="PAN No.">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- CIN No and Establishment Date -->
                                                            <div class="row mt-0">
                                                                <div class="col-md-6">
                                                                    <div class='form-group '>
                                                                        <label>CIN No.</label>
                                                                        <input type="text" name='GMCOHCINNo'
                                                                            id='GMCOHCINNo'
                                                                            class='form-control few-options'
                                                                            maxlength="100" placeholder="CIN No.">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class='form-group '>
                                                                        <label>Establishment Date</label>
                                                                        <input type="date" name='GMCOHESTDate'
                                                                            id='GMCOHESTDate' class='form-control'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Company Logo and Folder -->
                                                            <div class="row mt-0">
                                                                <div class="col-md-6">
                                                                    <div class='form-group '>
                                                                        <label>Company Logo</label>
                                                                        <input type="text"
                                                                            name='GMCOHImageFileName'
                                                                            id='GMCOHImageFileName'
                                                                            class='form-control few-options'
                                                                            maxlength="500"
                                                                            placeholder="Company Logo">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class='form-group '>
                                                                        <label>Logo Folder Name</label>
                                                                        <input type="text" name='GMCOHFolderName'
                                                                            id='GMCOHFolderName'
                                                                            class='form-control few-options'
                                                                            maxlength="200"
                                                                            placeholder="Logo Folder Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id='userRecordInfo' class="card {{ $theme_Card1D_3SIS }}">
                                            <div class="card-header" style="background: black" id="headingfive1">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse"
                                                        data-target="#defaultAccordionfive" aria-expanded="false"
                                                        aria-controls="defaultAccordionfive">
                                                        Record Info<div class="icons"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="defaultAccordionfive" class="collapse"
                                                aria-labelledby="headingThree1" data-parent="#toggleAccordion"
                                                style="">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <div class="form-group">
                                                                <label> User</label>
                                                                <input type="text" name="GMCOHUser" id="GMCOHUser"
                                                                    class="form-control col-sm-6" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Created Date</label>
                                                                <input type="date" name="GMCOHLastCreated"
                                                                    id="GMCOHLastCreated"
                                                                    class="form-control col-sm-6" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Updated Date</label>
                                                                <input type="date" name="GMCOHLastUpdated"
                                                                    id="GMCOHLastUpdated"
                                                                    class="form-control col-sm-6" readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <!--To display success messages -->

                                    <input type="hidden" name='button_action' id='button_action' value='insert'>

                                    <span id='form_output' class="mr-auto">Save changes</span>

                                    <input type="submit" name='submit' id='action' value='Add'
                                        class='btn btn-success mb-2'>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                @include('commonViews3SIS.modalCommon3SIS')
            </div>
        </div>

    </div>

</div>
@endsection
@section('js_code')
<script src={{ asset('assets/CommonJS_3sis/CompanyMaster/Ajax.js') }}></script>
@endsection

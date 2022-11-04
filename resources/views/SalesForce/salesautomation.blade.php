@extends('layouts.app')
@section('content')
@section('css')
<link href="{{asset('assets/css/components/tabs-accordian/custom-accordions.css')}}" rel="stylesheet" type="text/css" />
@endsection
<div class="layout-px-spacing">
    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
        <div class="br-6">
            <div style="float: right; padding-right: 30px;">
                <button type='button' name='Undo' id='Undelete_Data' class='btn btnUnDeleteRec3SIS'>Undo
                        <i class="fas fa-undo-alt fa-sm ml-1"> </i>
                </button>
                <button type="button" name="add" id="add_Data" class="btn btnAddRec3SIS">
                    Add
                    <i class="fas fa-plus fa-sm ml-1"> </i>
                </button>
            </div>
            <div id="toggleAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne1">
                        <section class="mb-0 mt-0">
                        <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="false" aria-controls="defaultAccordionOne">
                            Header Entry  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                        </div>
                        </section>
                    </div>
                    <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion" style="">
                        <div class="card-body">
                            <!-- Hidden Fields -->  
                            <div class='form-group mb-0'>
                                <input type="hidden" name='SAOEHUniqueId' id='SAOEHUniqueId' 
                                    class='form-control'>                                                  
                            </div>
                            <div class="row mt-0">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <span class="error-text SAOEHShipTo_error text-danger" style="float: right;"></span>
                                        <input type="text" name="SAOEHShipTo" id="SAOEHShipTo" class="form-control few-options" maxlength="10" placeholder="Certificates Id" style="opacity: 1;" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Requested Date</label>
                                        <span class="error-text SAOEHRequestedDate_error text-danger" style="float: right;"></span>
                                        <input type="text" name="SAOEHRequestedDate" id="SAOEHRequestedDate" class="form-control few-options" maxlength="100" placeholder="Certificates Description" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Order Value</label>
                                        <span class="error-text SAOEHOrderValue_error text-danger" style="float: right;"></span>
                                        <input type="text" name="SAOEHOrderValue" id="SAOEHOrderValue" class="form-control few-options" maxlength="100" placeholder="Certificates Description" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-0">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Order No.</label>
                                        <span class="error-text SAOEHDocumentNo_error text-danger" style="float: right;"></span>
                                        <input type="text" name="SAOEHDocumentNo" id="SAOEHDocumentNo" class="form-control few-options" maxlength="10" placeholder="Certificates Id" style="opacity: 1;" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Negotiated Del.Date</label>
                                        <span class="error-text SAOEHNegotiatedDelDate_error text-danger" style="float: right;"></span>
                                        <input type="text" name="SAOEHNegotiatedDelDate" id="SAOEHNegotiatedDelDate" class="form-control few-options" maxlength="100" placeholder="Certificates Description" />
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo1">
                        <section class="mb-0 mt-0">
                        <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo">
                            Details  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                        </div>
                        </section>
                    </div>
                    <div id="defaultAccordionTwo" class="collapse" aria-labelledby="headingTwo1" data-parent="#toggleAccordion" style="">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="html5-extension3SIS" class="table table-hover non-hover" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Line Item</th>
                                            <th>Material</th>
                                            <th>Quatntity</th>
                                            <th>Desc</th>
                                            <th>List Price</th>
                                            <th>Offered Price</th>
                                            <th>Value</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th style="visibility: hidden;">Unique Id</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingfive1">
                    <section class="mb-0 mt-0">
                        <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionfive" aria-expanded="false" aria-controls="defaultAccordionfive">
                        Record Info<div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                        </div>
                    </section>
                    </div>
                    <div id="defaultAccordionfive" class="collapse" aria-labelledby="headingThree1" data-parent="#toggleAccordion" style="">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="form-group">
                                        <label> User</label>
                                        <input type="text" name="CMCTHUser" id="CMCTHUser" 
                                        class="form-control col-sm-6" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label> Created Date</label>
                                        <input type="date" name="CMCTHLastCreated" id="CMCTHLastCreated" 
                                        class="form-control col-sm-6" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label> Updated Date</label>
                                        <input type="date" name="CMCTHLastUpdated" id="CMCTHLastUpdated" 
                                        class="form-control col-sm-6" readonly />
                                    </div>                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('commonViews3SIS.modalCommon3SIS')
        </div>
    </div>
</div>
@endsection
@section('js_code')
<script>
    $(document).ready(function(){
        $modalTitle = 'Sales Force Automation'
        $('#html5-extension3SIS').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt><"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
            buttons: [
                { extend: 'excel', className: 'btn' },
                { extend: 'print', className: 'btn' }
            ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" \
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" \
                    class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5">\
                    </polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" \
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" \
                    stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line>\
                    <polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            stripeClasses: [],
            pageLength: 5,
            lengthMenu: [5, 10, 20, 50],

            order: [ 6, "desc" ],
            processing: true,
            serverSide: true,                
            "ajax": "{{ route('salesAutomation.browserData')}}",        
            "columns":[                    
                {data: "SAODDLineItemNo"},
                {data: "SAODDMaterialId"},
                {data: "SAODDOrderQuantity"},                
                {data: "SAODDMaterialDesc"},                
                {data: "SAODDListPrice"},                
                {data: "SAODDUserUpdatedPrice"},                
                {data: "SAODDLineItemValue"},                
                {data: "SAODDOrderQuantity"},                
                {data: "SAODDStatus"},                
                {data: "action", orderable:false, searchable: false},
                {data: "SAODDUser", "visible": false},
                {data: "SAODDLastUpdated", "visible": false},
                {data: "SAODDUniqueId", "visible": false},
                {data: "SAODDUniqueIdH", "visible": false},


            ],
            "columnDefs": [
                { "width": "10%", "targets": 0 },
                { "width": "25%", "targets": 1 },
                { "width": "25%", "targets": 2 },
                { "width": "15%", "targets": 3 },
            ]        
        });
        
    });          
</script>
@endsection

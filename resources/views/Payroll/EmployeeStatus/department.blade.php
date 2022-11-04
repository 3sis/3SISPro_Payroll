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
            <div class="table-responsive">
                <table id="html5-extension3SIS" class="table table-hover non-hover" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Department</th>
                            <th>Desc2</th>
                            <th>User</th>
                            <th>Updated</th>
                            <th>Action</th>
                            <th style="visibility: hidden;">Unique Id</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- start undeletemodal -->
            <div id='dataTableModalSmall' class='modal fade  register-modal' tabindex="-1"  role='dialog' 
                aria-labelledby="registerModalLabel" aria-hidden="true" style='margin-top:40px' 
                data-backdrop="static">
                <div class='modal-dialog modal-dialog-centered modal-lg'role="document">
                    <div class='modal-content'>                              
                        <div class="modal-header" id="registerModalLabel">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                stroke-linecap="round" stroke-linejoin="round" 
                                class="feather feather-x text-danger"><line x1="18" y1="6" x2="6" y2="18">                                            
                                </line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        </div>
                        <!--CopyChange-->
                            <div class='modal-body'>
                                <div class="container-fluid">
                                        <div class="table-responsive">
                                            <table id="html-extension3SIS" class="table table-hover non-hover" style="width:100%">
                                                <thead>
                                                    <tr>                                                                
                                                        <th title="Department Master">ID</th>
                                                        <th>Department</th>
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
                        <div class='modal-content'>                              
                            <div class="modal-header" id="registerModalLabel">
                                <h4 class="modal-title text-light">Master</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round" 
                                    class="feather feather-x text-danger"><line x1="18" y1="6" x2="6" y2="18">                                            
                                    </line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            </div>
                            <!--CopyChange-->
                            <form  id='singleLevelDataEntryForm' autocomplete="off"
                                    method="post" action="{{ route('department.postData') }}">
                                    <input type="hidden" name="_token" id="csrfToken" value="{{ csrf_token() }}">
                                    <div class="modal-body">
                                    <div id="toggleAccordion">
                                      <div class="card">
                                        <div class="card-header" id="headingOne1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="false" aria-controls="defaultAccordionOne">
                                              Entry  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>

                                        <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion" style="">
                                            <div class="card-body">
                                                    <!-- Hidden Fields -->  
                                                    <div class='form-group mb-0'>
                                                        <input type="hidden" name='ESDPHUniqueId' id='ESDPHUniqueId' 
                                                            class='form-control'>                                                  
                                                    </div>
                                                    <div class="row mt-0">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Designation Id</label>
                                                                <span class="error-text ESDPHDepartmentId_error text-danger" style="float: right;"></span>
                                                                <input type="text" name="ESDPHDepartmentId" id="ESDPHDepartmentId" class="form-control few-options" maxlength="10" placeholder="Designation Id" style="opacity: 1;" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <span class="error-text ESDPHDesc1_error text-danger" style="float: right;"></span>
                                                                <input type="text" name="ESDPHDesc1" id="ESDPHDesc1" class="form-control few-options" maxlength="100" placeholder="Designation Description" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description2</label>
                                                        <span class="error-text ESDPHDesc2_error text-danger" style="float: right;"></span>
                                                        <textarea
                                                            name="ESDPHDesc2"
                                                            id="ESDPHDesc2"
                                                            class="form-control few-options"
                                                            maxlength="200"
                                                            name="alloptions"
                                                            id="alloptions1"
                                                            placeholder="Designation Description2"
                                                            aria-label="With textarea"
                                                            style="border-color: rgb(102, 175, 233); outline: 0px;"
                                                        ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>BI Desc</label>
                                                        <span class="error-text ESDPHBiDesc_error text-danger" style="float: right;"></span>
                                                        <input type="text" name="ESDPHBiDesc" id="ESDPHBiDesc" class="form-control few-options" maxlength="100" placeholder="BI Description" />
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
                                                                <input type="text" name="ESDPHUser" id="ESDPHUser" 
                                                                class="form-control col-sm-6" readonly/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Created Date</label>
                                                                <input type="date" name="ESDPHLastCreated" id="ESDPHLastCreated" 
                                                                class="form-control col-sm-6" readonly/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Updated Date</label>
                                                                <input type="date" name="ESDPHLastUpdated" id="ESDPHLastUpdated" 
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
                                    <!--To display success messages-->
                                    <span id='form_output' style='float:left; padding-left:0px' ></span> 
                                    <input type="hidden" name='button_action' id='button_action' value='insert'>
                                    <input type="submit" name='submit' id='action' value='Add' 
                                        class='btn btn-outline-success mb-2'>
                                </div>
                            </form>
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
        $modalTitle = 'Designation'
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
            "ajax": "{{ route('department.browserData')}}",        
            "columns":[                    
                {data: "ESDPHDepartmentId"},
                {data: "ESDPHDesc1"},
                {data: "ESDPHDesc2"},                
                {data: "action", orderable:false, searchable: false},
                {data: "ESDPHUser", "visible": false},
                {data: "ESDPHLastUpdated", "visible": false},
                {data: "ESDPHUniqueId", "visible": false},
            ],
            "columnDefs": [
                { "width": "10%", "targets": 0 },
                { "width": "25%", "targets": 1 },
                { "width": "25%", "targets": 2 },
                { "width": "15%", "targets": 3 },
            ]        
            });
        // Whed add buttonis pushed
        $('#add_Data').click(function(){                    
            $("#ESDPHDepartmentId").attr("readonly", false);                
            fnReinstateFormControl('0');
        });
        // Add Ends   
        // When edit button is pushed
        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $.ajax({
                url: "{{route('department.fetchData')}}",
                method: 'GET',
                data: {id:id},
                dataType: 'json',
                success: function(data)
                {
                    var lastCreated = formattedDate(new Date(data.ESDPHLastCreated));
                    var lastUpdated = formattedDate(new Date(data.ESDPHLastUpdated));
                    $('#ESDPHUniqueId').val(data.ESDPHUniqueId);
                    $('#ESDPHDepartmentId').val(data.ESDPHDepartmentId);
                    $('#ESDPHDesc1').val(data.ESDPHDesc1);
                    $('#ESDPHDesc2').val(data.ESDPHDesc2);
                    $('#ESDPHBiDesc').val(data.ESDPHBiDesc);
                    $('#ESDPHUser').val(data.ESDPHUser);
                    $('#ESDPHLastCreated').val(lastCreated);
                    $('#ESDPHLastUpdated').val(lastUpdated);
                    $("#ESDPHDepartmentId").attr("readonly", true);                       
                    fnReinstateFormControl('1');
                }
            });
        });
        // Edit Ends
        // When submit button is pushed
        $('#singleLevelDataEntryForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data)
                {
                    if(data.status == 0)
                    {
                        $.each(data.error, function(prefix,val){
                            $('span.' +prefix+ '_error').text(val[0]);
                            $('#' +prefix).css('border-color', '#dc3545');
                        });
                    }else
                    { 
                        $finalMessage3SIS = fnSingleLevelFinalSave(data.masterName, data.Id, data.Desc1, data.updateMode);
                        $('#FinalSaveMessage').html($finalMessage3SIS);
                        fnReinstateFormControl('0');
                        $('#html5-extension3SIS').DataTable().ajax.reload();
                        if(data.updateMode=='Updated')
                        {
                            $('#entryModalSmall').modal('hide');
                            $('#modalZoomFinalSave3SIS').modal('show');
                        }
                        else
                        {
                            $('#form_output').html($finalMessage3SIS);
                        }
                    }
                }
            })
        });
        // Submit Ends            
        // When delete button is pushed
        $(document).on('click', '.delete', function(){
            var UniqueId = $(this).attr('id');
            // Fetch Record first that need to be deleted.
            $.ajax({
                url: "{{route('department.fetchData')}}",
                method: 'GET',
                data: {id:UniqueId},
                dataType: 'json',
                success: function(data)
                {
                    $deleteMessage3SIS = fnSingleLevelDeleteConfirmation($modalTitle, data.ESDPHDepartmentId, data.ESDPHDesc1);   
                    $('#DeleteRecord').html($deleteMessage3SIS);
                    $('#modalZoomDeleteRecord3SIS').modal('show');                   
                }
            });
            // Fetch Record Ends
            // Delete record only when OK is pressed on Modal.
            $(document).on('click', '.confirm', function(){
                $.ajax({
                    url:"{{route('department.deleteData')}}",
                    mehtod:"get",
                    data:{id:UniqueId},
                    success:function(data)
                    {
                        $finalMessage3SIS = fnSingleLevelFinalSave(data.masterName, data.Id, data.Desc1, data.updateMode);
                        $('#FinalSaveMessage').html($finalMessage3SIS);                            
                        $('#html5-extension3SIS').DataTable().ajax.reload();
                        UniqueId = 0;
                        $('#modalZoomDeleteRecord3SIS').modal('hide');
                        $('#modalZoomFinalSave3SIS').modal('show');
                    }
                })
            });
            $("#modalZoomDeleteRecord3SIS").on("hide.bs.modal", function () {
                UniqueId = 0;
            });                   
        }); 
        // Delete Ends
        // Whed undo button is pushed
        $('#Undelete_Data').click(function(){                    
            $('#html-extension3SIS').DataTable( {
            stripeClasses: [],
            pageLength: 6,
            lengthMenu: [6, 10, 20, 50],
            order: [[ 4, "desc" ]],
            processing: true,
            serverSide: true,
            destroy: true,                    
            // CopyChange                    
            "ajax": "{{ route('department.browserDeletedRecords')}}",
                "columns":[
                    // CopyChange
                    {data: "ESDPHDepartmentId"},
                    {data: "ESDPHDesc1"},
                    {data: "ESDPHDesc2"},
                    {data: "action", orderable:false, searchable: false},
                    {data: "ESDPHUniqueId", "visible": false},
                ]
            });
            fnReinstateDataTable('0');
        });
        // undo Ends 
        // When restore button is pushed
        $(document).on('click', '.restore', function(){
            var DeletedUniqueId = $(this).attr('id');
            // Fetch Record first that need to be restored.
            $.ajax({
                url: "{{route('department.fetchData')}}",
                method: 'GET',
                data: {id:DeletedUniqueId},
                dataType: 'json',
                success: function(data)
                {
                    $restoreMessage3SIS = fnSingleLevelRestoreConfirmation($modalTitle, data.ESDPHDepartmentId, '');   
                    $('#RestoreRecord').html($restoreMessage3SIS);
                    $('#modalZoomRestoreRecord3SIS').modal('show');  
                    $('#modalZoomRestoreRecord3SIS').modal('hide');                    
                }
            });
            // Fetch Record Ends
            // Restore record only when OK is pressed on Modal.
            $(document).on('click', '.confirmrestore', function(){
                $.ajax({
                    url:"{{route('department.restoreDeletedRecords')}}",
                    mehtod:"get",
                    data:{id:DeletedUniqueId},
                    success:function(data)
                    {                       
                        $('#html5-extension3SIS').DataTable().ajax.reload();
                        $('#html-extension3SIS').DataTable().ajax.reload();
                        DeletedUniqueId = 0;
                        $('#modalZoomRestoreRecord3SIS').modal('hide');
                        // $('#dataTableModalSmall').modal('hide');
                    }
                })
            }); 
            $("#modalZoomRestoreRecord3SIS").on("hide.bs.modal", function () {
                DeletedUniqueId = 0;
            });                
        }); 
        // restore Ends
    });          
</script>
@endsection

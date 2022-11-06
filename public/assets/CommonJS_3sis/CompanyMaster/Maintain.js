 $('#add_Data').click(function(){                    
        $("#GMCOHCompanyId").attr("readonly", false);
        $('#currenyId').val('').change();
        fnReinstateFormControl('0');
    });
    // When edit button is pushed
    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $.ajax({
            // CopyChange
            url: "{{url('/company/Master/Update')}}",
            method: 'GET',
            data: {id:id},
            dataType: 'json',
            success: function(data)
            { 
                // General Info
                $('#GMCOHUniqueId').val(data.GMCOHUniqueId);                     
                $('#GMCOHCompanyId').val(data.GMCOHCompanyId);
                $('#GMCOHDesc1').val(data.GMCOHDesc1);
                $('#GMCOHDesc2').val(data.GMCOHDesc2);
                $('#GMCOHBiDesc').val(data.GMCOHBiDesc);
                $('#GMCOHNickName').val(data.GMCOHNickName);
                $('#GMCOHTagLine').val(data.GMCOHTagLine);
                $('#GMCOHCurrenyId').val(data.GMCOHCurrenyId);
                $('#GMCOHDecimalPositionQty').val(data.GMCOHDecimalPositionQty);
                $('#GMCOHDecimalPositionValue').val(data.GMCOHDecimalPositionValue);
                $('#GMCOHLandLine').val(data.GMCOHLandLine);
                $('#GMCOHMobileNo').val(data.GMCOHMobileNo);
                $('#GMCOHEmail').val(data.GMCOHEmail);
                $('#GMCOHWebsite').val(data.GMCOHWebsite);


                // How to pull Id in dropdown in Edit Mode - @Krishna 

                $('#currenyId').val(data.GMCOHCurrenyId).change();
                $('#cityId').val(data.GMCOHCityId).change();
                $('#stateDesc1').val(data.GMCOHStateId);
                $('#countryDesc1').val(data.GMCOHCountryId);
                // add By Madhav
                // $('#quantityId').val(data.GMCOHDecimalPositionQty).change();
                // $('#valueId').val(data.GMCOHDecimalPositionValue).change();
                // $('#branchId1').val(data.GMCOHBranchId1).change();
                // $('#branchId2').val(data.GMCOHBranchId2).change();
                
                // $('#bankName1').val(response.bankDesc1);
                // $('#ifsCode1').val(response.ifsCode);
                // $('#GMCOHBankId1').val(response.bankId);

                // $('#bankName2').val(response.bankDesc1);
                // $('#ifsCode2').val(response.ifsCode);
                // $('#GMCOHBankId2').val(response.bankId);

                // Address Info
                $('#GMCOHAddress1').val(data.GMCOHAddress1);
                $('#GMCOHAddress2').val(data.GMCOHAddress2);
                $('#GMCOHAddress3').val(data.GMCOHAddress3);
                $('#GMCOHCityId').val(data.GMCOHCityId);
                $('#GMCOHStateId').val(data.GMCOHStateId);
                $('#GMCOHCountryId').val(data.GMCOHCountryId);
                $('#GMCOHPinCode').val(data.GMCOHPinCode);
                // Statutory and Logo Info
                $('#GMCOHCINNo').val(data.GMCOHCINNo);
                $('#GMCOHPANNo').val(data.GMCOHPANNo);
                $('#GMCOHGSTNo').val(data.GMCOHGSTNo);
                // $('#GMCOHESTDate').val(establishmentDte);
                $('#GMCOHFolderName').val(data.GMCOHFolderName);
                $('#GMCOHImageFileName').val(data.GMCOHImageFileName);
                // Banking Info
                $('#GMCOHBankId1').val(data.GMCOHBankId1);
                $('#GMCOHBranchId1').val(data.GMCOHBranchId1);
                $('#GMCOHIFSId1').val(data.GMCOHIFSId1);
                $('#GMCOHBankAccNo1').val(data.GMCOHBankAccNo1);
                $('#GMCOHBankAcName1').val(data.GMCOHBankAcName1);
                $('#GMCOHBankId2').val(data.GMCOHBankId2);
                $('#GMCOHBranchId2').val(data.GMCOHBranchId2);
                $('#GMCOHIFSId2').val(data.GMCOHIFSId2);
                $('#GMCOHBankAccNo2').val(data.GMCOHBankAccNo2);
                $('#GMCOHBankAcName2').val(data.GMCOHBankAcName2);
                // User Info
                $('#GMCOHUser').val(data.GMCOHUser);                        
                // $('#GMCOHLastCreated').val(lastCreated);                        
                // $('#GMCOHLastUpdated').val(lastUpdated);                         
                $("#GMCOHCompanyId").attr("readonly", true); 
                $('#entryModalSmall').modal('show');

                fnReinstateFormControl('1');
                // fnUpdateDropdownsEditMode(data);
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
    // Submit Ends 
    // When delete button is pushed
    $(document).on('click', '.delete', function(){
        var UniqueId = $(this).attr('id');
        // Fetch Record first that need to be deleted.
        $.ajax({
            url: "{{url('/company/Master/Update')}}",
            method: 'GET',
            data: {id:UniqueId},
            dataType: 'json',
            success: function(data)
            {
                $deleteMessage3SIS = fnSingleLevelDeleteConfirmation($modalTitle, data.GMCOHCompanyId, '');   
                $('#DeleteRecord').html($deleteMessage3SIS);
                $('#modalZoomDeleteRecord3SIS').modal('show');                   
            }
        });
        // Fetch Record Ends
        // Delete record only when OK is pressed on Modal.
        $(document).on('click', '.confirm', function(){
            $.ajax({
                // CopyChange
                url:"{{url('/company/Master/Delete')}}",
                mehtod:"get",
                data:{id:UniqueId},
                success:function(data)
                {
                    $finalMessage3SIS = fnSingleLevelFinalSave(data.masterName, data.Id, data.Desc1, data.updateMode);
                    $('#FinalSaveMessage').html($finalMessage3SIS);                            
                    $('#html5-extension3SIS').DataTable().ajax.reload();
                    // $('#html-extension3SIS').DataTable().ajax.reload();
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
        order: [[ 1, "desc" ]],
        processing: true,
        serverSide: true,
        destroy: true,                    
        // CopyChange                    
        "ajax": "{{ url('/company/Master1')}}",
        "columns":[
            // CopyChange
            {data: "GMCOHCompanyId"},
            {data: "GMCOHDesc1"},
            {data: "GMCOHDesc2"},
            {data: "action", orderable:false, searchable: false},
            {data: "GMCOHUniqueId", "visible": false},
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
                url: "{{url('/company/Master/Update')}}",
                method: 'GET',
                data: {id:DeletedUniqueId},
                dataType: 'json',
                success: function(data)
                {
                    $restoreMessage3SIS = fnSingleLevelRestoreConfirmation($modalTitle, data.GMCOHCompanyId, '');   
                    $('#RestoreRecord').html($restoreMessage3SIS);
                    $('#modalZoomRestoreRecord3SIS').modal('show');  
                    $('#modalZoomRestoreRecord3SIS').modal('hide');                    
                }
            });
            // Fetch Record Ends
            // Restore record only when OK is pressed on Modal.
            $(document).on('click', '.confirmrestore', function(){
                $.ajax({
                    url:"{{url('/company/Master/Undelete')}}",
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

$('#cityId').change(function(){
            let id = $(this).val();
            $.ajax({
                url: "{{route('dropDownMasters.getGeoDesc')}}",
                type:'post',
                data:'id=' + id + '&_token={{csrf_token()}}',
                success:function(response){
                    $('#GMCOHStateId').val(response.stateId);
                    $('#stateDesc1').val(response.stateDesc1);
                    $('#GMCOHCountryId').val(response.countryId);
                    $('#countryDesc1').val(response.countryDesc1);
                }
            })
        });
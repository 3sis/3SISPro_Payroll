$(document).ready(function () {
    $modalTitle = 'Company'
    $('#landingPageBrowser3SIS').DataTable({
        buttons: {
            buttons: [
                { extend: 'excel', className: 'btn' },
                { extend: 'print', className: 'btn' }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" \
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" \
                class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5">\
                </polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" \
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" \
                stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line>\
                <polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page PAGE of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        stripeClasses: [],
        pageLength: 6,
        lengthMenu: [6, 10, 20, 50],
        order: [0, "desc"],
        processing: true,
        serverSide: true,
        // CopyChange
        "ajax": "/company/Master",
        "columns": [
            // CopyChange
            { data: "GMCOHCompanyId" },
            { data: "GMCOHDesc1" },
            { data: "GMCOHNickName" },
            { data: "GMCOHTagLine" },
            { data: "action", orderable: false, searchable: false },
            { data: "GMCOHDesc2", "visible": false },
            { data: "GMCOHBiDesc", "visible": false },
            { data: "GMCOHUser", "visible": false },
            { data: "GMCOHLastUpdated", "visible": false },
            { data: "GMCOHUniqueId", "visible": false },
        ],
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "25%", "targets": 1 },
            { "width": "25%", "targets": 2 },
            { "width": "25%", "targets": 3 },
            { "width": "15%", "targets": 4 }
        ]
    });
});
$('#add_Data').click(function () {
    $("#userRecordInfo").hide();
    $("#GMCOHCompanyId").attr("readonly", false);
    //Initialize all droopdowns in add mode
    fnInitializeAllDropdowns();
    //Initialize all screen fields in add mode
    fnReinstateFormControl('0');
});
function fnInitializeAllDropdowns(){
    $('#currenyId').val('INR').change();
    $('#quantityId').val('2').change();
    $('#valueId').val('2').change();
    $('#cityId').val('').change();
    $('#branchId1').val('').change();
    $('#branchId2').val('').change();
};
// When edit button is pushed
$(document).on('click', '.edit', function () {
    $("#userRecordInfo").show();
    var id = $(this).attr('id');
    // alert('Edit alert')
    $.ajax({
        // CopyChange
        url: "/company/Master/Update",
        method: 'GET',
        data: { id: id },
        dataType: 'json',
        success: function (data) {

            // General Info
            $('#GMCOHUniqueId').val(data.GMCOHUniqueId);
            $('#GMCOHCompanyId').val(data.GMCOHCompanyId);
            $('#GMCOHDesc1').val(data.GMCOHDesc1);
            $('#GMCOHDesc2').val(data.GMCOHDesc2);
            $('#GMCOHBiDesc').val(data.GMCOHBiDesc);
            $('#GMCOHNickName').val(data.GMCOHNickName);
            $('#GMCOHTagLine').val(data.GMCOHTagLine);
            // $('#GMCOHCurrenyId').val(data.GMCOHCurrenyId);
            $('#quantityId').val(data.GMCOHDecimalPositionQty).change();
            $('#valueId').val(data.GMCOHDecimalPositionValue).change();
            $('#GMCOHLandLine').val(data.GMCOHLandLine);
            $('#GMCOHMobileNo').val(data.GMCOHMobileNo);
            $('#GMCOHEmail').val(data.GMCOHEmail);
            $('#GMCOHWebsite').val(data.GMCOHWebsite);

            // How to pull Id in dropdown in Edit Mode - @Krishna

            $('#currenyId').val(data.GMCOHCurrenyId).change();

            // $("#cityId option").filter(function() {
            //     $(this).text() == data.GMCOHCityId;
            // }).prop('selected', true);
            $('#cityId').val(data.GMCOHCityId).change();
            // $("#iddropdown").dropdown('set selected', ['${product.category}'] );

            $('#stateDesc1').val(data.GMCOHStateId);
            $('#countryDesc1').val(data.GMCOHCountryId);

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
            $('#GMCOHESTDate').val(formattedDate(new Date(data.GMCOHLastCreated)));
            $('#GMCOHFolderName').val(data.GMCOHFolderName);
            $('#GMCOHImageFileName').val(data.GMCOHImageFileName);
            // Banking Info
            $('#GMCOHBankId1').val(data.GMCOHBankId1);
            $('#bankName1').val(data.bankDesc1);
            // console.log('BankId1 : '+ data.GMCOHBankId1);
            $('#branchId1').val(data.GMCOHBranchId1).change();
            // $('#branchId1').children("option:selected").val(data.GMCOHBranchId1);

            $('#GMCOHIFSId1').val(data.GMCOHIFSId1);
            $('#GMCOHBankAccNo1').val(data.GMCOHBankAccNo1);
            $('#GMCOHBankAcName1').val(data.GMCOHBankAcName1);
            $('#GMCOHBankId2').val(data.GMCOHBankId2);
            $('#bankName2').val(data.bankDesc2);
            $('#branchId2').val(data.GMCOHBranchId2).change();
            $('#GMCOHIFSId2').val(data.GMCOHIFSId2);
            $('#GMCOHBankAccNo2').val(data.GMCOHBankAccNo2);
            $('#GMCOHBankAcName2').val(data.GMCOHBankAcName2);
            // User Info
            $('#GMCOHUser').val(data.GMCOHUser);

            $('#GMCOHLastCreated').val(formattedDate(new Date(data.GMCOHLastCreated)));
            $('#GMCOHLastUpdated').val(formattedDate(new Date(data.GMCOHLastUpdated)));

            $("#GMCOHCompanyId").attr("readonly", true);
            $('#entryModalSmall').modal('show');

            fnReinstateFormControl('1');
        }
    });
});
// Edit Ends
// When submit button is pushed
$('#singleLevelDataEntryForm').on('submit', function (event) {
    event.preventDefault();
    // console.log($("#singleLevelDataEntryForm").serialize());
    // return;
    $.ajax({

        url: $(this).attr('action'),
        method: $(this).attr('method'),
        data: new FormData(this),
        processData: false,
        dataType: "json",
        contentType: false,
        beforeSend: function () {
            $(document).find('span.error-text').text('');
        },
        success: function (data) {
            if (data.status == 0) {
                $.each(data.error, function (prefix, val) {
                    $('span.' + prefix + '_error').text(val[0]);
                    $('#' + prefix).css('border-color', '#dc3545');
                });
            } else {
                $finalMessage3SIS = fnSingleLevelFinalSave(data.masterName, data.Id, data.Desc1, data.updateMode);
                $('#FinalSaveMessage').html($finalMessage3SIS);
                fnReinstateFormControl('0');
                $('#landingPageBrowser3SIS').DataTable().ajax.reload();
                if (data.updateMode == 'Updated') {
                    $('#entryModalSmall').modal('hide');
                    $('#modalZoomFinalSave3SIS').modal('show');
                }
                else {
                    $('#form_output').html($finalMessage3SIS);
                }
            }
        }
    })
});
// Submit Ends
// Submit Ends
// When delete button is pushed
$(document).on('click', '.delete', function () {
    var UniqueId = $(this).attr('id');
    // Fetch Record first that need to be deleted.
    $.ajax({
        url: "/company/Master/Update",
        method: 'GET',
        data: { id: UniqueId },
        dataType: 'json',
        success: function (data) {
            // success
            // error
        // if(data.status == 'success'){

        // }
            $deleteMessage3SIS = fnSingleLevelDeleteConfirmation($modalTitle, data.GMCOHCompanyId, '');
            $('#DeleteRecord').html($deleteMessage3SIS);
            $('#modalZoomDeleteRecord3SIS').modal('show');
        }
    });
    // Fetch Record Ends
    // Delete record only when OK is pressed on Modal.
    $(document).on('click', '.confirm', function () {
        $.ajax({
            // CopyChange
            url: "/company/Master/Delete",
            mehtod: "get",
            data: { id: UniqueId },
            success: function (data) {
                $finalMessage3SIS = fnSingleLevelFinalSave(data.masterName, data.Id, data.Desc1, data.updateMode);
                $('#FinalSaveMessage').html($finalMessage3SIS);
                $('#landingPageBrowser3SIS').DataTable().ajax.reload();
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
$('#Undelete_Data').click(function () {
    $('#html-extension3SIS').DataTable({
        stripeClasses: [],
        pageLength: 6,
        lengthMenu: [6, 10, 20, 50],
        order: [[1, "desc"]],
        processing: true,
        serverSide: true,
        destroy: true,
        // CopyChange
        "ajax": "/company/Master1",
        "columns": [
            // CopyChange
            { data: "GMCOHCompanyId" },
            { data: "GMCOHDesc1" },
            { data: "GMCOHDesc2" },
            { data: "action", orderable: false, searchable: false },
            { data: "GMCOHUniqueId", "visible": false },
        ]
    });
    fnReinstateDataTable('0');
});
// undo Ends
// When restore button is pushed
$(document).on('click', '.restore', function () {
    var DeletedUniqueId = $(this).attr('id');
    // Fetch Record first that need to be restored.
    $.ajax({
        url: "/company/Master/Update",
        method: 'GET',
        data: { id: DeletedUniqueId },
        dataType: 'json',
        success: function (data) {
            $restoreMessage3SIS = fnSingleLevelRestoreConfirmation($modalTitle, data.GMCOHCompanyId, '');
            $('#RestoreRecord').html($restoreMessage3SIS);
            $('#modalZoomRestoreRecord3SIS').modal('show');
            $('#modalZoomRestoreRecord3SIS').modal('hide');
        }
    });
    // Fetch Record Ends
    // Restore record only when OK is pressed on Modal.
    $(document).on('click', '.confirmrestore', function () {
        $.ajax({
            url: "/company/Master/Undelete",
            mehtod: "get",
            data: { id: DeletedUniqueId },
            success: function (data) {
                $('#landingPageBrowser3SIS').DataTable().ajax.reload();
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

$('#cityId').on('change', (function (e) {
    // alert('Shishir');
    let id = $(this).val();
    $.ajax({
        url: "/city/dropdown",
        type: 'post',
        data: 'id=' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $('#GMCOHStateId').val(response.stateId);
            $('#stateDesc1').val(response.stateDesc1);
            $('#GMCOHCountryId').val(response.countryId);
            $('#countryDesc1').val(response.countryDesc1);
        }
    })
}));

// Bank branch dropdown
$('#branchId1').change(function () {
    let id = $(this).val();
    // alert('branchId1');
    console.log(id);
    $.ajax({
        url: "/bankBranch/branchDetail",
        type: 'post',
        data: 'id=' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $('#GMCOHBankId1').val(response.BankId);
            $('#bankName1').val(response.bankDesc1);
            $('#GMCOHIFSId1').val(response.IFSCId);
        }
    })
});
// Bank branch dropdown
$('#branchId2').change(function () {
    let id = $(this).val();

    $.ajax({
        url: "/bankBranch/branchDetail",
        type: 'post',
        data: 'id=' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $('#GMCOHBankId2').val(response.BankId);
            $('#bankName2').val(response.bankDesc1);
            $('#GMCOHIFSId2').val(response.IFSCId);
        }
    })
});
$('#currenyId,#quantityId,#valueId,#cityId,#branchId1,#branchId2').select2({
    dropdownParent: $('#entryModalSmall')
});

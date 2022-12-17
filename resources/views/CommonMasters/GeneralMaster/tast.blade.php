@extends('layouts.app')
@section('content')
@section('css')
<link href="{{asset('assets/css/components/tabs-accordian/custom-accordions.css')}}" rel="stylesheet" type="text/css" />
@endsection
<div class="layout-px-spacing">
   <div>
      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
         <div class=" br-6">
            <div style='float:right; padding-right:30px'>
               <button type='button' name='Undo' id='Undelete_Data' class='btn btnUnDeleteRec3SIS'>Undo
               <i class="fas fa-undo-alt fa-sm ml-1"> </i>
               </button>
               <button type='button' name='add' id='add_Data' class='btn btnAddRec3SIS'>Add
               <i class="fas fa-plus fa-sm ml-1"> </i>
               </button>
            </div>
            <div class="table-responsive">
               <table id="html5-extension3SIS" class="table table-hover non-hover" style="width:100%">
                  <thead>
                     <tr>
                        @foreach($city_list as $key=>$value)
                            @foreach($value as $iKey=>$iValue)
                                <tr>
                                <td> {{$iKey}} </td>
                                <td> {{$iValue}}  </td>
                                </tr>

                            @endforeach
                        @endforeach


                     </tr>
                  </thead>
               </table>
            </div>
            <!-- start undeletemodal -->

            @include('commonViews3SIS.modalCommon3SIS')
         </div>
      </div>
   </div>
</div>
@endsection
@section('js_code')

@endsection

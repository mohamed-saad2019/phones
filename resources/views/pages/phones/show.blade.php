@extends('layouts/contentLayoutMaster')

@section('title', $pageConfigs['title'])

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$pageConfigs['title']}}</h4>
        </div>
      <div class="card-body">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-label-group ">
                                        <strong class="font-weight-bold col-md-2"> {{__('users.full_name')}} : </strong> <span class="col-md-4">{{$user->full_name}} </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-label-group">
                                        <strong class="font-weight-bold col-md-2"> {{__('users.username')}} : </strong> <span class="col-md-4">{{$user->username}} </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-label-group">
                                        <strong class="font-weight-bold col-md-2"> {{__('users.email')}} : </strong> <span class="col-md-4">{{$user->email}} </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-label-group">
                                        <strong class="font-weight-bold col-md-2"> {{__('users.phone')}} : </strong> <span class="col-md-4">{{$user->phone}} </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-label-group">
                                        <strong class="font-weight-bold col-md-2"> {{__('users.birthday')}} : </strong> <span class="col-md-4">{{$user->birthday}} </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-label-group">
                                        <strong class="font-weight-bold col-md-2"> {{__('main.status')}} : </strong> <span class="col-md-4">@if($user->status=='1') {{__('main.active')}} @else {{__('main.inactive')}} @endif </span>
                                    </div>
                                </div>
                                @if($user->type == 'user')
                                    <div class="col-md-6">
                                        <div class="form-group form-label-group">
                                            <strong class="font-weight-bold col-md-2"> {{__('users.add_by')}} : </strong> <span class="col-md-4">@if ($user->add_by != 0)
                                                {{Helper::GetUserName($user->add_by)->full_name}}
                                            @endif
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-label-group">
                                            <strong class="font-weight-bold col-md-2"> {{__('users.plan')}} : </strong> <span class="col-md-4">
                                                @if ($user->plan_id != 0)
                                                    {{$user->Plan->name}}
                                                @endif 
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-label-group">
                                            <strong class="font-weight-bold col-md-2"> {{__('users.rank')}} : </strong> <span class="col-md-4">
                                                @if ($user->rank_id != 0)
                                                    {{$user->Rank->name}}
                                                @endif 
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-label-group">
                                            <strong class="font-weight-bold col-md-2"> {{__('users.identifictionNumber')}} : </strong> <span class="col-md-4">
                                                    {{$user->identifictionNumber}}
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-label-group">
                                            <strong class="font-weight-bold col-md-2"> {{__('users.identifictionPhoto1')}} : </strong>
                                             <span class="col-md-4">
                                                <div class="col-md-6 col-6 user-latest-img">
                                                    <img src="{{URL::asset($user->identifictionPhoto1)}}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                                  </div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-label-group">
                                            <strong class="font-weight-bold col-md-2"> {{__('users.identifictionPhoto2')}} : </strong>
                                             <span class="col-md-4">
                                                <div class="col-md-6 col-6 user-latest-img">
                                                    <img src="{{URL::asset($user->identifictionPhoto2)}}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                                  </div>
                                            </span>
                                        </div>
                                    </div>
     
                                @endif
    


                                
                            </div>
                        </div>
                  </div>
                </div>
              </div>
              @if ($user->verify == 0)
                <div class="col-12" id="VerifyUser">
                    <button id="VerifyUser" data-route="{{route('admin.users.verify',$user->id)}}" yes="{{__('main.yes')}}" no="{{__('main.no')}}" data-id="{{$user->id}}" confirm_msg="{{__('users.verfiyConfirmMessage')}}" class="btn btn-success mr-1"><i class="feather icon-check"></i> {{__('users.verify')}}</button>
                </div>
              @endif
            </div>
      </div>
    </div>
  </div>
</div>
  {{-- Data list view end --}}
@endsection



@section('page-script')

<script>
    $('button#VerifyUser').click(function(e){
    e.preventDefault();
    var route 			= 	$(this).attr('data-route');
    var id 			    = 	$(this).attr('data-id');
    var confirm_msg 	= 	$(this).attr('confirm_msg');
    Swal.fire({
        title: confirm_msg,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: $(this).attr('yes'),
        cancelButtonText: $(this).attr('no'),
        confirmButtonClass: 'btn btn-primary',
        cancelButtonClass: 'btn btn-danger ml-1',
        buttonsStyling: false,
     
    }).then(function(result) {
        if (result.value) {
            jQuery.ajax( {
                async :true,
                type  :"POST",
                url   :route,
                data  :  { },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success : function(data) {
                if(data['title'] == 'success')
                {
                    toastr.success(data['message'], 'Success');
                    $('div#VerifyUser').remove();
                }
                else
                {
                    toastr.error(data['message'], 'Error');
                }
                },
                error : function() {
                    return true;
                }
            });
        }
    });
});
</script>
@endsection



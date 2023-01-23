@extends('layouts/contentLayoutMaster')

@section('title', $pageConfigs['title'])

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('content')
{{-- Data list view starts --}}
<section id="contextual-colors" class="card">
        <div class="card-content">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$pageConfigs['title']}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" id="edit" action="{{ route('admin.users.edit',$user['id']) }}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>{{__('main.parent_change_DC')}}</h6>
                                     <fieldset class="form-group form-label-group position-relative has-icon-left">
                                      <select class="form-control select2" name="add_by" id="add_by">
                                         <option value="">{{__('main.parent_change_DC')}}</option>
                                        @foreach($users as $u)
                                          <option value="{{$u->id}}" @if($u->id == $user->add_by) selected @endif>
                                            {{$u->full_name .' - '.$u->username.' - '.$u->memberShip }}</option>
                                        @endforeach
                                      </select>
                                      <label for="add_by">{{__('main.parent_change_DC')}}</label>
                                       @if ($errors->has('add_by'))
                                         <span class="invalid feedback" role="alert" style="color:red;">
                                            <small>{{ $errors->first('add_by') }}</small>
                                         </span>
                                        @endif
                                     </fieldset>
                                  </div>

                                 <div class="col-md-6">
                                     <h6>{{__('auth.Password')}}</h6>
                                      <fieldset class="form-label-group form-group position-relative has-icon-left">
                                      <input type="password" class="form-control" name="password" id="password" placeholder="{{__('auth.Password').' ( '.__('auth.password_msg').' ) '}}"  value="">
                                      <div class="form-control-position">
                                          <i class="feather icon-lock"></i>
                                      </div>
                                      <label for="password">{{__('auth.Password').' ( '.__('auth.password_msg').' ) '}}</label>
                                       @if ($errors->has('password'))
                                         <span class="invalid feedback" role="alert" style="color:red;">
                                            <small>{{ $errors->first('password') }}</small>
                                         </span>
                                        @endif
                                     </fieldset>
                                    </div>
                                  

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">{{__('main.SubmitUpdate')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
  {{-- Data list view end --}}
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>

        <script>
                              $('.select2').select2({dir: "rtl"});

           const form = $('#edit');
            $(document).ready(function(){
                form.formValidation({
                    excluded: [':disabled'],
                    fields: {
                        password: {
                            validators: {
                                regexp: {
                                    regexp: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/,
                                    message: "@lang('auth.PasswordIsNotCorrect')"
                                },
                                stringLength: {
                                    min: 8,
                                    message: "@lang('auth.PasswordMinLenght', ['lenght' => '8'])"
                                }
                            }
                        },
                    }
                });
            });
        </script>
@endsection

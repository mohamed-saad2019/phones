@extends('layouts/contentLayoutMaster')

@section('title', __('lang.Phones'))

@section('content')
{{-- Data list view starts --}}
<section id="contextual-colors" class="card">
        <div class="card-header">
             <h4 class="card-title">@lang('lang.Phones')</h4>
             <div class="row">
              <div class="col-12">
                <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                  <div class="ag-btns d-flex flex-wrap">
                    <div class="btn-export">
                      <button class="btn btn-primary ag-grid-export-btn waves-effect waves-light" onclick="location.href='{{route('export')}}{{str_replace(Request::url(), '', Request::fullUrl())}}'">
                        Export as excel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <br>
        <div class="card-content"> 
          <div class="card-body">
            <form method="Get" >
              <div class="form-body">
                <div class="row">
                  {{-- {{print_r(Helper::GetPhonesStatus())}} --}}

                    <div class="col-md-5">
                     <fieldset class="form-group form-label-group position-relative has-icon-left">
                      <select class="form-control select2" name="status" id="status">
                        <option value="all" @if("all" == request()->status || !request()->status) selected @endif> @lang('main.allStatus')</option>
                        <option value="1" @if(1 == request()->status) selected @endif> @lang('main.status1')</option>
                        <option value="2" @if(2 == request()->status) selected @endif> @lang('main.status2')</option>
                        <option value="-1" @if(-1 == request()->status) selected @endif> @lang('main.status-1')</option>
                      </select>
                      <label for="status">{{__('lang.status')}}</label>
                     </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                      <button type="submit" class="btn btn-primary mr-1 mb-1">{{__('main.update')}}</button>
                  </div>
                </div>
            </form>
         </div>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-bordered table-striped  mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('main.phone_number')}}</th>
                                <th scope="col">{{__('main.company_number')}}</th>
                                <th scope="col">we</th>
                                <th scope="col">etisalat</th>
                                <th scope="col">noor</th>
                                <th scope="col">orange</th>
                                <th scope="col">{{__('main.status')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($phones as $phone)
                                  <tr id="tr_{{$phone->id}}">
                                      <td>{{$phone->id}}</td>
                                      <td>{{$phone->phone}}</td>
                                      <td>{{$phone->company}}</td>
                                      <td>
                                        @if($phone->we == '1')
                                          <i class="fa-solid fa-check"></i>
                                        @endif
                                      </td>
                                      <td>
                                        @if($phone->etisalat == '1')
                                          <i class="fa-solid fa-check"></i>
                                        @endif
                                      </td>
                                      <td>
                                        @if($phone->noor == '1')
                                          <i class="fa-solid fa-check"></i>
                                        @endif
                                      </td>
                                      <td>
                                        @if($phone->orange == '1')
                                          <i class="fa-solid fa-check"></i>
                                        @endif
                                      </td>     
                                      <td>
                                        {{__('main.status'.$phone->status)}}
                                      </td>
                                  </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                    {!! $phones->links() !!}
            </div>
        </div>
</section>
  {{-- Data list view end --}}
@endsection

@section('page-script')
@endsection

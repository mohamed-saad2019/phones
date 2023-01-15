@extends('layouts/contentLayoutMaster')

@section('title',__('home.Title'))

@section('page-style')
        <!-- Page css files -->
        <script src="https://balkangraph.com/js/OrgChart.js"></script>

        <link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/tour/tour.css') }}">
        <link rel="stylesheet" href="{{ asset('tree/css/template.css') }}">
  @endsection

  @section('content')
  <<section id="contextual-colors" class="card">
        <div class="card-content">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('main.uploadxls')}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" id="CreatePlan" action="{{ route('saveXls') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-label-group">
                                                <input type="file" id="name_en"  name="file" class="form-control" placeholder="{{__('main.choosefile')}}" value="{{old('name_en')}}"> <span class="asterisk_input">  </span>
                                                <label for="name_en" >{{__('main.choosefile')}}</label>
                                                @if ($errors->has('file'))
                                                <span class="invalid feedback" role="alert" style="color:red;">
                                                    <small>{{ $errors->first('file') }}</small>
                                                </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">{{__('main.upload')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
  @endsection

@section('page-script')
        
        <script src="{{ asset('tree/js/template.js') }}"></script>

      
@endsection


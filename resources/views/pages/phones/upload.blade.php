@extends('layouts/contentLayoutMaster')

@section('title', $pageConfigs['title'])

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">
@endsection

@section('content')
{{-- Data list view starts --}}
<section id="contextual-colors" class="card">
        <div class="card-content">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__($PageType['AddTitle'])}}</h4>
                </div>
                @if ($errors)
                    @foreach ($errors as $error)
                        <span class="invalid feedback" role="alert" style="color:red;">
                            <small>{{ $error }}</small>
                        </span>
                    @endforeach
                @endif
                                  <!-- single file upload starts -->
                            <div class="row">
                                <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-content">
                                            <div class="card-body">
                                                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                                                {{-- <form action="{{route('upload')}}" method="post" class="dropzone dropzone-area dz-clickable" id="dpz-remove-thumb"> --}}
                                                    @csrf
                                                {{-- <div class="dz-message">{{__('lang.DropFilesHereToUpload')}}</div> --}}
                                                
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">With Browse button</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"  name="xlsx" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">{{__('lang.Upload')}}</button>
                                            </div>
                                            </div>
                                        </form>

                                        </div>
                                        </div>
                                    </div>
        <!-- single file upload ends -->
</section>
  {{-- Data list view end --}}
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/extensions/dropzone.js') }}"></script>
@endsection
@section('page-script')
        <script>
            const form = $('#CreateUser');
            $(document).ready(function(){
                form.formValidation({
                    excluded: [':disabled'],
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "@lang('users.email')"+" @lang('main.required')"
                                },
                                stringLength: {
                                    max: 100,
                                    message: "@lang('main.Stringlength' , ['min' => '5' ,'max' => '100'])"
                                },regexp: {
                                    regexp: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
                                    message: "@lang('auth.EmailIsNotCorrect')"
                                },
                                remote: {
                                    headers: {
                                        'X-CSRF-Token': '{{ csrf_token() }}',
                                    },
                                    url: '{{url("/admin/users/check")}}',
                                    type: 'POST',
                                    data: {
                                        email: 'email',
                                    },
                                    async: true,    // Send Ajax request every 2 seconds
                                }
                            }
                        },
                    }
                }); 
            });

           
        </script>
@endsection

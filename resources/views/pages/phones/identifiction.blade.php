@extends('layouts/contentLayoutMaster')

@section('title', $pageConfigs['title'])

@section('content')
{{-- Data list view starts --}}
<section id="contextual-colors" class="card">
        <div class="card-header">
             <h4 class="card-title">{{$pageConfigs['title']}}</h4>
        </div>
        
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-bordered table-striped table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('main.name')}}</th>
                                <th scope="col">{{__('main.phone')}}</th>
                                <th scope="col">{{__('users.identifictionNumber')}}</th>
                                <th scope="col">{{__('main.settings')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                  <tr id="tr_{{$user->id}}">
                                      <td>{{$user->id}}</td>
                                      <td>{{$user->full_name}}</td>
                                      <td>{{$user->phone}}</td>
                                      <td>{{$user->identifictionNumber}}</td>
                                      <td>
                                        <a href="{{ route('admin.users.show', $user->id) }}" data-toggle="tooltip" data-placement="top" title="{{__('main.show')}}" >
                                            <span class="action-edit"><i class="feather icon-eye" style="font-size:19px;"></i></span>
                                         </a>
                                     </td>
                                  </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                    {!! $users->links() !!}
            </div>
        </div>
</section>
  {{-- Data list view end --}}
@endsection

@section('page-script')
@endsection

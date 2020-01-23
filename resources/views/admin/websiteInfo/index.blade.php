@php
use App\Http\Controllers\infosController;
@endphp
@extends('admin.templates.layout')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row info-titles">
            <div class="col p-md-0">
                <h4>Manage infos</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/adminn')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{-- <a href="{{url('infos/create')}}">Add infos</a> --}}
                    </li>
                </ol>
            </div>
        </div>
    </div>


</div>

<!--**********************************
                Content body end
            ***********************************-->

<div class="content-body" style="margin-top: -1052px;">

    <div class="container-fluid">

        <div class="row">
            <!-- /# column -->

            <!-- /# column -->

            @if(session()->has('status'))
            <div class="alert alert-success">
                {!! session()->get('status') !!}
            </div>
            @endif


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4"> info Info</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('/adminn/webInfo/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add info Info"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Website Name</th>
                                        <th>Logo</th>
                                        <th>Fav Icon</th>
                                        <th>Description</th>
                                        <th>Default Image</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Contact Map</th>
                                        <th>Facebook URL</th>
                                        <th>Google URL</th>
                                        <th>Twitter URL</th>
                                        <th>Instagram Url</th>
                                        <th>Youtube URL</th>
                                        <th>Follow Us Information</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($infos as $info)

                                <tbody>
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>{{$info->website_name}}</td>
                                        <td>
                                            {{-- {{$info->website_logo}} --}}
                                            <img src="{{ asset('storage/websiteInfo').'/'.$info->website_logo}}"
                                                alt="{{$info->website_logo}}'s Image" class="img-responsive"
                                                style="height:auto;width:50%">
                                        </td>
                                        <td>
                                            {{-- {{$info->website_favIcon}} --}}
                                            <img src="{{ asset('storage/websiteInfo').'/'.$info->website_favIcon}}"
                                                alt="{{$info->website_favIcon}}'s Image" class="img-responsive"
                                                style="height:auto;width:50%">
                                        </td>
                                        <td>{{$info->website_description}}</td>
                                        <td>{{$info->website_default_image}}
                                            <img src="{{ asset('storage/websiteInfo').'/'.$info->website_default_image}}"
                                                alt="{{$info->website_default_image}}'s Image" class="img-responsive"
                                                style="height:auto;width:50%">
                                        </td>
                                        <td>{{$info->address}}</td>
                                        <td>{{$info->contact_number}}</td>
                                        <td>{{$info->contact_map}}</td>
                                        <td>{{$info->facebook_url}}</td>
                                        <td>{{$info->google_url}}</td>
                                        <td>{{$info->twitter_url}}</td>
                                        <td>{{$info->instagram_url}}</td>
                                        <td>{{$info->youtube_url}}</td>
                                        <td>{{$info->follow_us_information}}</td>
                                        <td>
                                            <span>
                                                <a href="{{url("/adminn/webInfo/$info->id/edit")}}" class="mr-4"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fas fa-edit"></i>
                                                </a>

                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();confirm();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deletewebInfo">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/webInfo/$info->id")}}'>
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->

            {{-- {{ $packages->links() }} --}}

        </div>
        <!-- row -->

    </div>


    @endsection

@php
use App\Http\Controllers\PagesController;
@endphp
@extends('admin.templates.layout')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>Manage hotels</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/adminn')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{url('/adminn/hotel-gallery/create')}}">Add Hotels</a>
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
                            <h4 class="mb-4">Add Hotels photo</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('/adminn/hotel-gallery/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add Hotels photo"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name/Title</th>
                                        <th>Description</th>
                                        <th>Image Name</th>
                                        <th>Hotels Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                              
                                @foreach ($hotelPhotos as $hotelPhoto)

                                <tbody>
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{$hotelPhoto->title}}</td>
                                        <td>{{$hotelPhoto->description}}</td>
                                        <td><img src="{{ asset('storage/photogallery').'/'.$hotelPhoto->name }}" alt="{{ $hotelPhoto->name}}'s Image" class="img-responsive" style="height:auto;width:50%"</td>
                                        <td>{{PagesController::showHotelName($hotelPhoto->hotel_title_id)}}</td>
                                        <td><span><a href="{{url("/adminn/editHotelsPhoto/$hotelPhoto->id")}}"
                                                    class="mr-4" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit"></i></a>
                                                
                                                     <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete{{$hotelPhoto->id}}').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deleteHotelPhoto">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete{{$hotelPhoto->id}}"
                                                    action='{{url("adminn/hotel-gallery/$hotelPhoto->id")}}'>
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
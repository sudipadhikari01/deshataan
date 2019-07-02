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
                <h4>Hotel Room Availabilities</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/adminn')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{url('adminn/roomavailabilities/create')}}">Add Hotels</a>
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
                            <h4 class="mb-4">Add Hotel Room Availabilities</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('adminn/roomavailabilities/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add hotel room availabilities"><i
                                    class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Amenities</th>
                                        <th>Included</th>
                                        <th>Maximum Person</th>
                                        <th>Price</th>
                                        <th>Hotel Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                @foreach ($hotel_room_availabilities as $hotel_room_availabilitie)

                                <tbody>
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{$hotel_room_availabilitie->title}}</td>
                                        <td>{{$hotel_room_availabilitie->amenities}}</td>
                                        <td>{{$hotel_room_availabilitie->includes}}</td>
                                        <td>{{$hotel_room_availabilitie->maximum_person}}</td>
                                        <td>{{$hotel_room_availabilitie->price}}</td>
                                        <td>{{PagesController::showHotelName($hotel_room_availabilitie->hotel_type_id)}}
                                        </td>
                                        <td><span><a href="{{url("adminn/roomavailabilities/$hotel_room_availabilitie->id/edit")}}"
                                                    class="mr-4" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit"></i></a>
                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deleteHotelFeatures">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/roomavailabilities/$hotel_room_availabilitie->id")}}'>
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

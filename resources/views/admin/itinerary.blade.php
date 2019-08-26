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
                <h4>Add Itinerary</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/adminn')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{url('adminn/itinerary/create')}}">Add Itinerary</a>
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

            @if(session()->has('status'))
            <div class="alert alert-success">
                {!! session()->get('status') !!}
            </div>
            @endif
            <!-- /# column -->

            <!-- /# column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Add Ininerary</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('adminn/itinerary/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add Itinerary"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Itinerary</th>
                                        <th style="width:10%">Package Type</th>
                                        <th style="width:15%">Individual Package</th>
                                        <th style="width:10%">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($itinerarys as $itinerary)


                                <tbody>
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{Str::limit($itinerary->itinerary, 400)}}</td>
                                        <td>{{PagesController::showPackageType($itinerary->p_id)}}</td>
                                        <td>{{PagesController::showIndividualPackage($itinerary->ip_id)}}</td>
                                        <td><span><a href="{{url("adminn/itinerary/$itinerary->id/edit")}}" class="mr-4"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fas fa-edit"></i></a>

                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deleteItenerary">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/itinerary/$itinerary->id")}}'>
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

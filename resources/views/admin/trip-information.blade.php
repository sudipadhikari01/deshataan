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
                <h4>Manage Trip Information</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/adminn')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{url('adminn/trip-info/create')}}">Add Trip Information</a>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Add Trip Information</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('adminn/trip-info/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add Trip Information"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Arrival Date</th>
                                        <th>Departure Date</th>
                                        <th>Inclusions</th>
                                        <th>Package Type</th>
                                        <th>Individual Package</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <?php
                           $i = 1;
                        ?>
                                @foreach ($tripInformations as $tripInformation)

                                <tbody>
                                    <tr>
                                        <th>{{ $i }}</th>
                                        <td>{{$tripInformation->arrival_date}}</td>
                                        <td>{{$tripInformation->departure_date}}</td>
                                        <td>{{$tripInformation->inclusions}}</td>
                                        <td>{{PagesController::showPackageType($tripInformation->p_id)}}</td>
                                        <td>{{PagesController::showIndividualPackage($tripInformation->ip_id)}}</td>
                                        <td><span><a href="{{url("/adminn/trip-info/$tripInformation->id/edit")}}"
                                                    class="mr-4" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit"></i></a>

                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deleteTripInfo">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/trip-info/$tripInformation->id")}}'>
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                                <?php
                             $i++;
                        ?>

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

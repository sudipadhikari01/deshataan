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
                <h4>Add About Tour</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{url('adminn/aboutTour/create')}}">Add About Tour</a>
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
                            <h4 class="mb-4">Add About Tour</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('adminn/aboutTour/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add About Tour"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Places Coverd</th>
                                        <th>Inclusions</th>
                                        <th>Exclusions</th>
                                        <th>Event Date</th>
                                        <th>Package Type</th>
                                        <th>Individual Package</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <?php
                           $i = 1;
                        ?>
                                @foreach ($aboutTours as $aboutTour)


                                <tbody>
                                    <tr>
                                        <th>{{ $i }}</th>
                                        <td>{{$aboutTour->places_covered}}</td>
                                        <td>{{$aboutTour->inclusions}}</td>
                                        <td>{{$aboutTour->exclusions}}</td>
                                        <td>{{$aboutTour->event_date}}</td>
                                        <td>{{PagesController::showPackageType($aboutTour->p_id)}}</td>
                                        <td>{{PagesController::showIndividualPackage($aboutTour->ip_id)}}</td>
                                        <td><span>
                                                <a href="{{url("/adminn/aboutTour/$aboutTour->id/edit")}}" class="mr-4"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fas fa-edit"></i></a>

                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deletePackage">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/aboutTour/$aboutTour->id")}}'>
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

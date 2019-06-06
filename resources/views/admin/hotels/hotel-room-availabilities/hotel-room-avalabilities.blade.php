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
                                <a href="{{url('/adminn/hotels-list')}}">Add Hotels</a>
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
                    <h4 class="mb-4">Add Hotels</h4>
                </div>

                <div class="card-upload" style="float:right">
                <a href="{{url('/adminn/addHotels')}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Add Hotels"><i class="fas fa-upload"></i></a>
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
                        <?php
                           $i = 1;
                        ?>
                     @foreach ($hotel_room_availabilities as $hotel_room_availabilitie)   
                            
                        <tbody>
                            <tr>
                                <th>{{ $i }}</th>
                               <td>{{$hotel_room_availabilitie->title}}</td>
                                <td>{{$hotel_room_availabilitie->amenities}}</td>
                                <td>{{$hotel_room_availabilitie->includes}}</td>
                                <td>{{$hotel_room_availabilitie->maximum_person}}</td>
                                <td>{{$hotel_room_availabilitie->price}}</td>
                                <td>{{PagesController::showHotelName($hotel_room_availabilitie->hotel_type_id)}}</td> 
                                <td><span><a href="{{url("/adminn/editHotels/$hotel_room_availabilitie->id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="{{url("/adminn/deleteHotels/$hotel_room_availabilitie->id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Delete"  onclick="del()"><i class="fa fa-trash color-danger" aria-hidden="true"  id="deletePackage"></i></a> 
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

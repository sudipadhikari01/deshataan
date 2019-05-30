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
                                    <a href="{{url('adminn/booking-by-email')}}">Booking by email List</a>
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
                    <h4 class="mb-4">Booking By Email</h4>
                </div>

               {{-- Success Alert --}}
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif {{-- Error Alert --}}
             @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif

                {{-- <div class="card-upload" style="float:right">
                <a href="{{url('/adminn/addItinerary')}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Add Package"><i class="fas fa-upload"></i></a>
                </div> --}}
                <div class="table-responsive">
                    <table class="table table-bordered" style="min-width: 500px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Package Type</th>
                                <th>Arrival Date</th>
                                <th>Departure Date</th>
                                <th>No of Adults</th>
                                <th>No of Childrens</th>
                                <th>Min Price</th>
                                <th>Max Price</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
                           $i = 1;
                        ?>
                      @foreach ($bookingByEmails as $bookingByEmail)  
                            
                   
                        <tbody>
                            <tr>
                                 <th>{{ $i }}</th>
                                <td>{{$bookingByEmail->name}}</td> 
                                <td>{{$bookingByEmail->phone}}</td>
                                <td>{{$bookingByEmail->email}}</td>
                                 <td>{{$bookingByEmail->city}}</td>
                                 <td>{{PagesController::showPackageType($bookingByEmail->package_type)}}</td>
                                 <td>{{$bookingByEmail->arrival_date}}</td>
                                 <td>{{$bookingByEmail->departure_date}}</td>
                                 <td>{{$bookingByEmail->no_of_adults}}</td>
                                 <td>{{$bookingByEmail->no_of_childrens}}</td>
                                 <td>{{$bookingByEmail->min_price}}</td>  
                                 <td>{{$bookingByEmail->max_price}}</td>
                                 <td>{{$bookingByEmail->created_at}}</td>
                                <td>
                                    <a href="{{url("/adminn/deleteBookingByEmail/$bookingByEmail->id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Delete"  onclick="del()"><i class="fa fa-trash color-danger" aria-hidden="true"  id="deletePackage"></i></a>
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

  <div class="container" style="margin: 0 auto;width:10%">
    {{ $bookingByEmails->links() }}
  </div>

</div>
<!-- row -->

</div>


@endsection


{{-- <span><a href="{{url("/adminn/editItinerary/$itinerary->id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a> --}}
@php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\HotelsController;
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
                        <a href="{{url('adminn/hotels/create')}}">Add Hotels</a>
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
                            <a href="{{url('/adminn/hotels/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add Hotels"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name/Title</th>
                                        <th>Location</th>
                                        <th>Contact</th>
                                        <th>Amenities</th>
                                        <th>Price</th>
                                        <th>Available Room</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <?php
                           $i = 1;
                        ?>
                                @foreach ($hotels as $hotel)

                                <tbody>
                                    <tr>
                                        <th>{{ $i }}</th>
                                        <td>{{$hotel->title}}</td>
                                        <td>{{$hotel->location}}</td>
                                        <td>{{$hotel->contact}}</td>
                                        <td>
                                            @php
                                            $temps = array();
                                            $temps = json_decode( $hotel->amenities );
                                            if(!empty($temps)){
                                            $lastKey = array_key_last($temps);
                                            foreach ($temps as $k => $temp)
                                            {
                                            $test = HotelsController::getAmenitiesList($temp);
                                            echo $test->title;
                                            if ($k !== $lastKey) {
                                            echo ", ";
                                            }
                                            }
                                            }
                                            else{
                                            echo $hotel->amenities;
                                            }
                                            @endphp
                                            {{-- {!! $pkgType['title'].'<br>' !!} --}}
                                        </td>
                                        <td>{{$hotel->price}}</td>
                                        <td>{{$hotel->available_room}}</td>
                                        <td><span><a href="{{url("/adminn/hotels/$hotel->h_id/edit")}}" class="mr-4"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fas fa-edit"></i></a>

                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deleteHotels">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/hotels/$hotel->h_id")}}'>
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

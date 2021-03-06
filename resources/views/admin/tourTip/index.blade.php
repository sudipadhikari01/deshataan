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
                <h4>Tour Tips</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/adminn')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{-- <a href="{{url('pages/create')}}">Add pages</a> --}}
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
                            <h4 class="mb-4"> Tour Tips</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('/adminn/tourtips/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add Page Info"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Tip Name</th>
                                        <th>Tips Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($tourtips as $tourtip)

                                <tbody>
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>{{$tourtip->tip_title}}</td>
                                        <td>{{$tourtip->tip_description}}</td>
                                        <td>
                                            <img src="{{ asset('storage/tourTips').'/'.$tourtip->image}}"
                                                alt="{{$tourtip->image}}'s Image" class="img-responsive"
                                                style="height:auto;width:50%">
                                        </td>
                                        <td>
                                            <span>
                                                <a href="{{url("/adminn/tourtips/$tourtip->id/edit")}}" class="mr-4"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fas fa-edit"></i>
                                                </a>

                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();confirm();document.querySelector('#item-delete').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deletetourtips">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete"
                                                    action='{{url("adminn/tourtips/$tourtip->id")}}'>
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

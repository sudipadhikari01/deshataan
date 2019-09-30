@extends('admin.templates.layout')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>Add Package Type</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url("/adminn")}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{url('/adminn/packagetype')}}">Add Package Type</a>
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
                            <h4 class="mb-4">Edit Packages Type</h4>
                        </div>

                        <div class="card-upload" style="float:right">
                            <a href="{{url('/adminn/packagetype/create')}}" class="mr-4" data-toggle="tooltip"
                                data-placement="top" title="Add Package"><i class="fas fa-upload"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="min-width: 500px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package Type</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                           $i = 1;
                        ?>
                                @foreach ($packages as $package)

                                {{--  --}}
                                <tbody>
                                    <tr>
                                        <th>{{ $i }}</th>
                                        <td>{{$package->p_name}}</td>
                                        <td><span>{{$package->p_desc}}</span> </td>
                                        <td><span><a href="{{url("adminn/packagetype/$package->p_id/edit")}}"
                                                    class="mr-4" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit"></i></a>



                                                <a href="javascript:void();" class="mr-4" data-toggle="tooltip"
                                                    data-placement="top" title="Delete"
                                                    onclick="event.preventDefault();document.querySelector('#item-delete{{$package->p_id}}').submit();">
                                                    <i class="fa fa-trash color-danger" aria-hidden="true"
                                                        id="deletePackage">
                                                    </i>
                                                </a>

                                                <form method='POST' id="item-delete{{$package->p_id}}"
                                                    action='{{url("adminn/packagetype/$package->p_id")}}'>
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

            {{ $packages->links() }}

        </div>
        <!-- row -->

    </div>


    @endsection

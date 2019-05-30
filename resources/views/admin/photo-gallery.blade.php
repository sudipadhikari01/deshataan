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
                                <a href="{{url('/adminn/packagetype')}}">Add About Tour</a>
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
                    <h4 class="mb-4">Add Photo Gallery</h4>
                </div>

                <div class="card-upload" style="float:right">
                <a href="{{url('/adminn/addPhoto')}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Add Photo Gallery"><i class="fas fa-upload"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" style="min-width: 500px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image title</th>
                                <th>Image Name</th>
                                <th>Package Type</th>
                                <th>Individual Package</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
                           $i = 1;
                        ?>
                      @foreach ($photos as $photo)  
                            
                   
                        <tbody>
                            <tr>
                                <th>{{ $i }}</th>
                                <td>{{$photo->image_title}}</td>
                                <td>{{$photo->image_name}}</td>
                                <td>{{PagesController::showPackageType($photo->p_id)}}</td>
                                <td>{{PagesController::showIndividualPackage($photo->ip_id)}}</td> 
                            <td><span><a href="{{url("/adminn/editPhoto/$photo->id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="{{url("/adminn/deletePhoto/$photo->id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Delete"  onclick="del()"><i class="fa fa-trash color-danger" aria-hidden="true"  id="deletePackage"></i></a>

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

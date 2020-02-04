@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/hotel-gallery/$hotelPhotos->id")}}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Hotels Photo to Gallery</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Image Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            name="imageTitle" value="{{$hotelPhotos->title}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Image Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            name="imageDesc" value="{{$hotelPhotos->description}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Upload Hotel Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id=""
                                            aria-describedby="inputGroupPrepend2" name="image">
                                    </div>
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Choose Hotel Name</label>
                                <div class="col-sm-9">
                                    <select name="hotelName" class="form-control">
                                        <option>Choose Package Type</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->h_id}}" @if ($hotel->h_id ==
                                            $hotelPhotos->hotel_title_id)
                                            selected="selected"
                                            @endif
                                            >{{$hotel->title}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>





                            <input type="submit" class="btn btn-success " value="Edit" name="Edit"
                                style="margin:0 auto; width:112px;">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection

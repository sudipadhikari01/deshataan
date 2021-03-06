@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('/adminn/hotel-gallery')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Hotels Photo to Gallery</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Image Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter image title"
                                            aria-describedby="validationDefaultUsername1" name="imageTitle">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Image Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter image description"
                                            aria-describedby="validationDefaultUsername1" name="imageDesc">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Upload Hotel Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image"
                                            aria-describedby="inputGroupPrepend2" name="image[]" multiple>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Choose Hotel Name</label>
                                <div class="col-sm-9">
                                    <select name="hotelName" class="form-control">
                                        <option>Choose Package Type</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->h_id}}">{{$hotel->title}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>





                            <input type="submit" class="btn btn-success " value="Add" name="add"
                                style="margin:0 auto; width:112px;">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
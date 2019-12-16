@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('adminn/roomavailabilities')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Hotel Room Availabilities</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Enter title" aria-describedby="validationDefaultUsername1"
                                            name="title" required>
                                    </div>
                                 <div class="form-text text-danger" id="demo1"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Amenities</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="amenities"
                                            placeholder="Enter amenities" aria-describedby="validationDefaultUsername1"
                                            name="amenities" required>
                                    </div>
                                    <div class="form-text text-danger" id="demo2"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Includes</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="includes"
                                            placeholder="Enter what are includes"
                                            aria-describedby="validationDefaultUsername1" name="includes" required>
                                    </div>
                                    <div class="form-text text-danger" id="demo3"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Maximum Person</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="maximumPerson"
                                            placeholder="Enter the maximum number of person"
                                            aria-describedby="validationDefaultUsername1" name="maximumPerson" required> 
                                    </div>
                                    <div class="form-text text-danger" id="demo4"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price"
                                            placeholder="Enter the price" aria-describedby="validationDefaultUsername1"
                                            name="price" required>
                                    </div>
                                    <div class="form-text text-danger" id="demo5"></div>
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Choose Hotel Name</label>
                                <div class="col-sm-9">
                                    <select name="hotelName" class="form-control"  id="hotelName" required> 
                                        <option value="">Choose Hotels Type</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->h_id}}">{{$hotel->title}}</option>
                                        @endforeach


                                    </select>
                                    <div class="form-text text-danger" id="demo6"></div>
                                </div>
                            </div>





                            <input type="submit" class="btn btn-success " value="Add" name="add"
                                style="margin:0 auto; width:112px;" onclick="hotelRoomAvaiValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'includes',{
        width:"100%"
    } );
    // CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
    // $('#itineraryDesc').ckeditor({
    // toolbar: 'Full',
    // enterMode : CKEDITOR.ENTER_BR,
    // shiftEnterMode: CKEDITOR.ENTER_P

    // });
</script>
@endsection

@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('adminn/trip-info')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Trip Information</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Arrival Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="arrivalDate"
                                            placeholder="Enter Arrival date" name="arrivalDate">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Departure Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="departureDate"
                                            placeholder="Enter Arrival date" name="departureDate">
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea class="form-control" id="inclusions" placeholder="Enter inclusions"
                                            name="inclusions" required></textarea>
                                        <p class="form-text text-danger" id="demo1"></p>
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>



                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control" id="packageType" required>
                                        <option value="">Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}">{{$package->p_name}}</option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Individual Package</label>
                                <div class="col-sm-9">
                                    <select name="individualPackage" class="form-control" id="individualPackage"
                                        required>
                                        <option value="">Choose Individual Package Type</option>
                                        @foreach ($individualPkgs as $individualPkg)
                                        <option value="{{$individualPkg->p_id}}">{{$individualPkg->title}}</option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo5"></p>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Add" name="add"
                                style="margin:0 auto; width:112px;" onclick="tripInformationValidateForm()">
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'inclusions',{
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

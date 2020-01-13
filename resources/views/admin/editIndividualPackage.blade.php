@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("adminn/indipackage/$individualPkg->p_id")}}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Individual Package</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{$individualPkg->title}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        {{-- <input type="text" class="form-control" id="description"
                                            value="" name="description" required> --}}
                                        <textarea class="form-control" id="addIndividualPackageDescription"
                                            placeholder="Enter Package description" name="description"
                                            required>{{$individualPkg->description}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Location</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="location"
                                            value="{{$individualPkg->location}}" name="location" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Duration of Package</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="duration"
                                            value="{{$individualPkg->duration}}" name="duration" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Start Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker" name="startDate"
                                            value="{{$individualPkg->start_date}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">End Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1" name="endDate"
                                            value="{{$individualPkg->end_date}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo5"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Ticket Quantity</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ticketQuantity"
                                            name="ticketQuantity" value="{{$individualPkg->ticket_quantity}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo6"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price"
                                            value="{{$individualPkg->price}}" name="price" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Discount</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="discount"
                                            value="{{$individualPkg->discount}}" name="discount">
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Location Map</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="packageLocationMap" class="form-control" id="packageLocationMap"
                                            cols="30" rows="10"
                                            placeholder="Enter Package Location Map">{{$individualPkg->map}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>
                            @php
                            $checkedPackages = json_decode($individualPkg->package_type);
                            @endphp
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <div class="checkbox form-group">
                                        @foreach ($packages as $package)
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="packageType[]" value="{{$package->p_id}}"
                                                id="packageType" @if(in_array($package->p_id,$checkedPackages))
                                            checked=checked @endif
                                            >
                                            &nbsp; {{$package->p_name}} &nbsp;
                                        </label>
                                        {{-- <option value="{{$package->p_id}}">{{$package->p_name}}</option> --}}
                                        @endforeach
                                    </div>
                                    {{-- <select name="packageType" class="form-control" id="packageType" required>
                                        <option value="">Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}" @if($package->p_id ==
                                    $individualPkg->package_type) {{ 'selected' }} @endif>
                                    {{$package->p_name}}
                                    </option>
                                    @endforeach



                                    </select> --}}
                                    <p class="form-text text-danger" id="demo8"></p>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="add"
                                style="margin:0 auto; width:112px;" onclick="indiPkgValidateForm()" id="add">


                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'addIndividualPackageDescription',{
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

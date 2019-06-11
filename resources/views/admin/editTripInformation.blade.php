@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/trip-info/$itripInformation->id")}}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Trip Information</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Arrival Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1"
                                            placeholder="Enter Arrival date" name="arrivalDate"
                                            value="{{$itripInformation->arrival_date}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Departure Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1"
                                            placeholder="Enter Arrival date" name="departureDate"
                                            value="{{$itripInformation->departure_date}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter inclusions" name="inclusions"
                                            value="{{$itripInformation->inclusions}}">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control">
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}" @if($package->p_id ==
                                            $itripInformation->id) {{ 'selected' }} @endif >{{$package->p_name}}
                                        </option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Individual Package</label>
                                <div class="col-sm-9">
                                    <select name="individualPackage" class="form-control">
                                        @foreach ($individualPkgs as $individualPkg)
                                        <option value="{{$individualPkg->p_id}}" @if($individualPkg->p_id ==
                                            $itripInformation->ip_id) {{ 'selected' }} @endif >{{$individualPkg->title}}
                                        </option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="add"
                                style="margin:0 auto; width:112px;">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection

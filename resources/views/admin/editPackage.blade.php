@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card forms-card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Package</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{url("adminn/packagetype/$singlePackage->p_id")}}">
                            {{ csrf_field() }}
                            <input type="hidden" value="PUT" name="_method">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Package Type *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Package Type"
                                        name="packageType" id="packageType" value="{{ $singlePackage->p_name}}" max="100" required>
                                        <p class="form-text" id="demo"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Package Description *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="package description"
                                        name="packageDesc"  id="packageDesc" value="{{ $singlePackage->p_desc}}" max="300" required>
                                        <p class="form-text" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-form" value="Update"  id="add" onclick="validateForm()">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

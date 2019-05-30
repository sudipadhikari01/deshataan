@extends('admin.templates.layout')
@section('content')

<div class="content-body">


<div class="container-fluid">
    
<div class="col-md-12">
    <div class="card forms-card">
        <div class="card-body">
            <h4 class="card-title mb-4">Edit Package</h4>
            <div class="basic-form">
            <form method="POST" action="{{url("/adminn/editPackageType/$singlePackage->p_id")}}">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-label">Package Type *</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Package Type" name="packageType" value="{{ $singlePackage->p_name}}">
                            <p class="form-text">Edit Package Type</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-label">Package Description *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="package description" name="packageDesc" value="{{ $singlePackage->p_desc}}">
                           
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <input type="submit" class="btn btn-primary btn-form" value="Edit">
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
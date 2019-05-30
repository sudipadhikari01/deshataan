@extends('admin.templates.layout')
@section('content')

<div class="content-body">


<div class="container-fluid">
    
<div class="col-md-12">
    <div class="card forms-card">
        <div class="card-body">
            <h4 class="card-title mb-4">Add Package</h4>
            <div class="basic-form">
            <form method="POST" action="{{url("/adminn/addpackage")}}">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-label">Package Type *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Package Type" name="packageType">
                            <p class="form-text">Add Package Type</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-label">Package Description *</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="package description" name="packageDesc">
                           
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <input type="submit" class="btn btn-primary btn-form" value="Add">
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
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
                                        <p class="form-text text-danger" id="demo"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Package Description *</label>
                                <div class="col-sm-9">
                                    {{-- <input type="text" class="form-control" placeholder="package description" --}}
                                        {{-- name="packageDesc"  id="packageDescedit" value="{{ $singlePackage->p_desc}}" max="300" required> --}}
                                        <textarea class="form-control" id="packageDescedit"
                                        placeholder="Enter Package description" name="packageDesc"
                                        required>{{$singlePackage->p_desc}}</textarea>
                                        <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-form" value="Update"  id="add" onclick="pkgValidateForm()">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'packageDescedit',{
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

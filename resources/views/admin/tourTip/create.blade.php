@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('/adminn/tourtips')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Tour Tips</h4>
                        <div class="basic-form">

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Tip Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tip_title"
                                            placeholder="Enter New Tip" name="tip_title" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Tip Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="tip_description" id="tip_description"
                                            placeholder="Enter Tip Description" cols="30" rows="10"
                                            class="form-control"></textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image"
                                            aria-describedby="inputGroupPrepend2" name="image">
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
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

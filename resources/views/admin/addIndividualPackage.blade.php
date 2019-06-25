@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('adminn/indipackage')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Individual Package</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control"  placeholder="Enter package title" name="title" 
                                        id="title" required>
                                           
                                    </div>
                                    <p class="form-text" id="demo"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="description"placeholder="Enter package description"
                                            name="description" required>
                                            
                                    </div>
                                    <p class="form-text" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Location</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="location"
                                            placeholder="Enter location" name="location" required>
                                            
                                    </div>
                                    <p class="form-text" id="demo2"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Duration of Package</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="duration"
                                            placeholder="Enter duration of package" name="duration" required>
                                            
                                    </div>
                                    <p class="form-text" id="demo3"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Start Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker" placeholder="Enter start date" 
                                        name="startDate" required>
                                       
                                    </div>
                                    <p class="form-text" id="demo4"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">End Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1"
                                            placeholder="Enter end date" name="endDate" required>
                                            
                                    </div>
                                    <p class="form-text" id="demo5"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Ticket Quantity</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ticketQuantity"
                                            placeholder="Enter ticket quantity" name="ticketQuantity" required>
                                            
                                    </div>
                                    <p class="form-text" id="demo6"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price"
                                            placeholder="Enter price of package"
                                            aria-describedby="validationDefaultUsername2" name="price" required>
                                            
                                    </div>
                                    <p class="form-text" id="demo7"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control" id="packageType" required>
                                        <option selected>Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        
                                        <option value="{{$package->p_id}}">{{$package->p_name}}</option>
                                        @endforeach

                                       
                                    </select>
                                    <p class="form-text" id="demo8"></p>
                                    

                                </div>
                            </div>



                            <button type="submit" class="btn btn-success " value="Add" name="add" id="add"
                                style="margin:0 auto; width:112px;" onclick="validateForm()">Add</button>





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection

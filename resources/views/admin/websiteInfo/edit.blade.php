@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/webInfo/$websiteInfo->id")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Website Info</h4>
                        <div class="basic-form">

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Website Name</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->website_name}}" class="form-control"
                                            id="website_name" placeholder="Enter Website Name" name="website_name"
                                            required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Web Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="website_description" id="website_description"
                                            placeholder="Enter web Description" cols="30" rows="10"
                                            class="form-control">{{$websiteInfo->website_description}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Logo for Website</label>
                                <div class="col-sm-9">
                                    @if ($websiteInfo->website_logo)
                                    <img src="{{ asset('storage/websiteInfo').'/'.$websiteInfo->website_logo}}"
                                        alt="{{$websiteInfo->website_logo}}'s Image" class="img-responsive"
                                        style="height:auto;width:50%">
                                    @endif
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="website_logo"
                                            aria-describedby="inputGroupPrepend2" name="website_logo"
                                            value="{{$websiteInfo->website_logo}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Fav Icon for Website</label>
                                <div class="col-sm-9">
                                    @if ($websiteInfo->website_favIcon)
                                    <img src="{{ asset('storage/websiteInfo').'/'.$websiteInfo->website_favIcon}}"
                                        alt="{{$websiteInfo->website_favIcon}}'s Image" class="img-responsive"
                                        style="height:auto;width:50%">
                                    @endif
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="website_favIcon"
                                            aria-describedby="inputGroupPrepend2" name="website_favIcon"
                                            value="{{$websiteInfo->website_favIcon}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Default Image for Website</label>
                                <div class="col-sm-9">
                                    @if ($websiteInfo->website_default_image)
                                    <img src="{{ asset('storage/websiteInfo').'/'.$websiteInfo->website_default_image}}"
                                        alt="{{$websiteInfo->website_default_image}}'s Image" class="img-responsive"
                                        style="height:auto;width:50%">
                                    @endif
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="website_default_image"
                                            aria-describedby="inputGroupPrepend2" name="website_default_image"
                                            value="{{$websiteInfo->website_default_image}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Office Address</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->address}}" class="form-control"
                                            id="address" placeholder="Enter Website Address" name="address" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Office Contact Number</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->contact_number}}" class="form-control"
                                            id="contact_number" placeholder="Enter Office Contact Number"
                                            name="contact_number" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Office Location Map</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="contact_map" id="contact_map" placeholder="Enter The iframe map"
                                            cols="30" rows="10"
                                            class="form-control">{{$websiteInfo->contact_map}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Facebook Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->facebook_url}}" class="form-control"
                                            id="facebook_url" placeholder="Enter the Facebook Url of the Page"
                                            name="facebook_url">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Google Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->google_url}}" class="form-control"
                                            id="google_url" placeholder="Enter the Google Url of the Page"
                                            name="google_url">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Twitter Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->twitter_url}}" class="form-control"
                                            id="twitter_url" placeholder="Enter the Twitter Url of the Page"
                                            name="twitter_url">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Instagram Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->instagram_url}}" class="form-control"
                                            id="instagram_url" placeholder="Enter Instagram Url of Page "
                                            name="instagram_url">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Youtube Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" value="{{$websiteInfo->youtube_url}}" class="form-control"
                                            id="youtube_url" placeholder="Enter Youtube Url of Page "
                                            name="youtube_url">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Follow Us Information</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="follow_us_information" id="follow_us_information"
                                            placeholder="Enter The information" cols="30" rows="10"
                                            class="form-control">{{$websiteInfo->follow_us_information}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>


                            <input type="submit" class="btn btn-success " value="Update" name="update"
                                style="margin:0 auto; width:112px;">
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection

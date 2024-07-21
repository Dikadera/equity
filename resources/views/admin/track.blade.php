@extends ('layout.admin')

@section('content')
<!-- END HEADER -->

<!-- START SECTION BREADCRUMB -->
<!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Create a Shipment</h3>
                            </div>
                            <form method="POST" action="{{route('tracking')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="trackingID" placeholder="Enter Tracking ID" value="{{ old('trackingID') }}">
                                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="sendersName" placeholder="Enter Senders Name" value="{{ old('sendersName') }}">
                                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="receiversName" placeholder="Enter Receivers Name" value="{{ old('receiversName') }}">
                                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Enter  Email" value="{{ old('email') }}">
                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="from" placeholder="Enter Package origin" value="{{ old('from') }}">
                                        <span class="text-danger">@error('from'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="destination" placeholder="Enter Destination" value="{{ old('destination') }}">
                                        <span class="text-danger">@error('destination'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" type="text" name="currentLocation" placeholder="Enter Current Location">
                                        <span class="text-danger">@error('currentLocation'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" type="text" name="shippingStatus" placeholder="Enter shipping Status ">
                                        <span class="text-danger">@error('shippingStatus'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" type="text" name="shippingDate" placeholder="Enter shipping Date">
                                        <span class="text-danger">@error('shippingDate'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" type="text" name="arrivalDate" placeholder="Enter arrival Date">
                                        <span class="text-danger">@error('arrivalDate'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary btn-block" value="Create shipment">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->

<!-- END FOOTER -->

@endsection

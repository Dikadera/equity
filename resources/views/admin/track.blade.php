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
                            <form action="{{ route('tracking') }}" method="POST" enctype="multipart/form-data" class="container mt-5">
                                @csrf
                                <div class="row g-3">
                                    <h2 class="mb-4">Create Shipment</h2>
                                    <div class="col-md-6">
                                        <label for="trackingID" class="form-label">Tracking ID</label>
                                        <input type="text" class="form-control" name="trackingID" placeholder="Enter Tracking ID" value="{{ old('trackingID') }}">
                                        <span class="text-danger">@error('trackingID'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sendersName" class="form-label">Senders Name</label>
                                        <input type="text" class="form-control" name="sendersName" placeholder="Enter Sender Name" value="{{ old('sendersName') }}">
                                        <span class="text-danger">@error('sendersName'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sendersName" class="form-label">Senders Phone</label>
                                        <input type="text" class="form-control" name="sendersPhone" placeholder="Enter Sender Phone" value="{{ old('sendersPhone') }}">
                                        <span class="text-danger">@error('sendersPhone'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sendersEmail" class="form-label">Sender's Email</label>
                                        <input type="email" class="form-control" name="sendersEmail" placeholder="Enter Senders Email" value="{{ old('sendersEmail') }}">
                                        <span class="text-danger">@error('sendersEmail'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="receiversName" class="form-label">Receiver's Name</label>
                                        <input type="text" class="form-control" name="receiversName" placeholder="Enter Receiver Name" value="{{ old('receiversName') }}">
                                        <span class="text-danger">@error('receiversName'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="receiversPhone" class="form-label">Receiver's Phone</label>
                                        <input type="text" class="form-control" name="receiversPhone" placeholder="Enter Receivers Phone" value="{{ old('receiversPhone') }}">
                                        <span class="text-danger">@error('receiversPhone'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Receiver's Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Receiver's Email" value="{{ old('email') }}">
                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="from" class="form-label">Package Origin</label>
                                        <input type="text" class="form-control" name="from" placeholder="Enter Package Origin" value="{{ old('from') }}">
                                        <span class="text-danger">@error('from'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="destination" class="form-label">Destination</label>
                                        <input type="text" class="form-control" name="destination" placeholder="Enter Destination" value="{{ old('destination') }}">
                                        <span class="text-danger">@error('destination'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="currentLocation" class="form-label">Current Location</label>
                                        <input class="form-control" type="text" name="currentLocation" placeholder="Enter Current Location" value="{{ old('currentLocation') }}">
                                        <span class="text-danger">@error('currentLocation'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="shippingStatus" class="form-label">Shipping Status</label>
                                        <input class="form-control" type="text" name="shippingStatus" placeholder="Enter Shipping Status" value="{{ old('shippingStatus') }}">
                                        <span class="text-danger">@error('shippingStatus'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="shippingDate" class="form-label">Shipping Date</label>
                                        <input class="form-control" type="text" name="shippingDate" placeholder="dd/mm/yyyy" value="{{ old('shippingDate') }}">
                                        <span class="text-danger">@error('shippingDate'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="arrivalDate" class="form-label">Arrival Date</label>
                                        <input class="form-control" type="text" name="arrivalDate" placeholder="dd/mm/yyyy" value="{{ old('arrivalDate') }}">
                                        <span class="text-danger">@error('arrivalDate'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="parcelimage" class="form-label">Upload Parcel Image</label>
                                        <input class="form-control" type="file" name="parcelimage">
                                        <span class="text-danger">@error('parcelimage'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="startDatetime" class="form-label">Start Date & Time</label>
                                        <input class="form-control" type="datetime-local" name="startDatetime" value="{{ old('startDatetime') }}">
                                        <span class="text-danger">@error('startDatetime'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="updatedDatetime" class="form-label">Updated Date & Time</label>
                                        <input class="form-control" type="datetime-local" name="updatedDatetime" value="{{ old('updatedDatetime') }}">
                                        <span class="text-danger">@error('updatedDatetime'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="shipmentMode" class="form-label">Shipment Mode</label>
                                        <input type="text" class="form-control" name="shipmentMode" placeholder="Enter Shipment Mode" value="{{ old('shipmentMode') }}">
                                        <span class="text-danger">@error('shipmentMode'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="weight" class="form-label">Weight (in kg)</label>
                                        <input type="number" class="form-control" name="weight" placeholder="Enter Weight" value="{{ old('weight') }}">
                                        <span class="text-danger">@error('weight'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block mt-3">Create Shipment</button>
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

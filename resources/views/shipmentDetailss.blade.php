@extends('layout.app')
@section('content')

<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/10.jpg" alt="Background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="title text-lg-left">
                    <div class="title-sub-heading">
                        <p>Dedicated Customer Teams &amp; An Agile Services</p>
                    </div>
                    <div class="title-heading">
                        <h1>Shipment Information</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-lg-start">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/trackingPage">Track</a></li>

                    </ol>
                </div>
                <!-- End .title -->
            </div>
            <!-- End .col-lg-8 -->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>


<section class="about about-4" id="about-4">
    <div class="container">
        <div class="row">




            <div class="container">
                <div class="table-responsive">
                    @if($shipments->count() > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-danger">
                                <th>Tracking ID</th>
                                <th>Sender's Name</th>
                                <th>Receiver's Name</th>
                                <th>Package Origin</th>
                                <th>Destination</th>
                                <th>Current Location</th>
                                <th>Shipping Status</th>
                                <th>Shipping Date</th>
                                <th>Arrival Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shipments as $shipment)
                            <tr>
                                <td>{{$shipment->trackingID}}</td>
                                <td>{{$shipment->sendersName}}</td>
                                <td>{{$shipment->receiversName}}</td>
                                <td>{{$shipment->from}}</td>
                                <td>{{$shipment->destination}}</td>
                                <td>{{$shipment->currentLocation}}</td>
                                <td>{{$shipment->shippingStatus}}</td>
                                <td>{{$shipment->shippingDate}}</td>
                                <td>{{$shipment->arrivalDate}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="container d-flex justify-content-center align-items-center">
                        <div class=" text-center message">
                            <div class="text-danger">
                                @if (!empty($_GET['query']))
                                Tracking ID "{{$_GET['query']}}" not found.
                                @else
                                No search query provided.
                                @endif
                            </div>
                        </div>
                    </div>

                    <style>
                        .message {
                            padding: 20px;
                            /* Adjust padding as needed */
                            margin: 0 auto;
                            /* Center horizontally */
                            max-width: 400px;
                            /* Set maximum width */
                            font-size: 1.2rem;
                            /* Adjust text size */
                        }

                        /* Additional styling can be added here */
                    </style>
                    @endif
                </div>
            </div>
            <!-- End .col-lg-6-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

@endsection

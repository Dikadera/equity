@extends('layout.app')
@section('content')


<style>
    html {
        height: 100%;
        box-sizing: border-box;
    }

    body {
        position: relative;
        margin: 0;
        min-height: 100%;
    }

    /* fonts family */
    h1 {
        font-family: 'lato';
        font-size: 50px !important;
    }

    h2 {
        font-family: 'lato';
        font-size: 48px !important;
    }

    h4 {
        font-family: 'lato';
        font-size: 24px !important;
        font-weight: 700 !important;
    }

    .nav-link {
        font-family: 'Raleway';
        font-size: 18px !important;
        font-weight: 700 !important;
    }

    .abs-wrapper {
        font-family: 'Raleway';
        font-size: 16px !important;
        font-weight: 700 !important;
    }

    /* font family ends */
    a {
        text-decoration: none;
    }

    /*Section one start  */
    .section-one {
        height: 400px;
        background-image: url("https://cdn.pixabay.com/photo/2023/03/18/09/06/railway-7860168_1280.jpg");
        background-position: bottom;
        align-content: center;
        text-align: center;
    }

    .Hero-section {
        width: 90%;
        margin-inline: auto;
    }

    .hero-wrapper {
        background-color: white;
        border-top: 4px solid red;
        border-left: 4px solid red;
        display: flex;
        align-content: center;
        align-items: center;
        justify-content: space-between;
    }

    .item-1 img {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    @media screen and (max-width: 992px) {
        .item-2 {
            display: none !important;
        }
    }

    /* end */
    /* upper nav with black background */
    .upper-nav {
        display: flex;
        justify-content: end;
        height: fit-content;
        padding-top: 10px;
    }

    /* upper nav ends  */

    /* for button */
    .nav-link:hover {
        color: red;
    }

    .btn:focus {
        box-shadow: none;
    }

    /*button ends  */

    /* hidden nav starts here */
    .navbarb {
        width: 100%;
        background-color: #fff;
        overflow: hidden;
    }

    .navbarb ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .navbarb li {
        float: left;
    }

    .navbarb li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbarb.hidden {
        display: none;
    }

    .navbarb.sticky {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-inline: 40px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    /* Media query for smaller screens */
    @media screen and (max-width: 992px) {
        #navbarB {
            display: none !important;
        }
    }

    /* hidden nav end here */

    /* nav for smaller screen start */
    @media (max-width: 992px) {
        .navbar {
            width: 100%;
        }

        .nav-for-small-screen {
            position: fixed;
            top: 0;
            z-index: 1000;
            border-top: 5px solid red;
        }

        .navbar-brand img {
            width: 100%;
        }

        .navbar-brand {
            width: 50%;
        }

        #navbarB {
            display: none;
        }

        .hero-wrapper {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .navbar {
            width: 100%;
        }
    }

    /* smaller screen nav end */

    /* absolute small container */
    .absolute-container {
        margin-top: -25px;
        width: fit-content;
        margin-inline: auto;
    }

    /* end */

    /* section two  start*/
    .section-two {
        padding-top: 50px;
        padding-bottom: 80px;
    }

    /* end */

    /* section three start */
    .section-three {
        padding-bottom: 40px;
    }

    .section-3-container {
        display: flex;
        gap: 40px;
    }

    /* Styles for the circle container */
    .circle-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 200px;
        position: relative;
    }

    /* Styles for the outer circles */
    .outer-circle {
        width: 35px;
        height: 35px;
        background-color: lightskyblue;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .outer-circle-danger {
        width: 35px;
        height: 35px;
        background-color: red;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 60px 0;
    }

    /* Styles for the inner circles */
    .inner-circle {
        width: 10px;
        height: 10px;
        background-color: grey;
        border-radius: 50%;
    }

    /* Styles for the connecting line */
    .line {
        width: 1px;
        height: 70px;
        background-color: grey;
        position: absolute;
        top: 35px;
        left: 20px;
    }

    .logo-wrapperscan {
        width: 150px;
        height: fit-content;
        margin-inline: auto;
    }

    .logo-wrapperscan img {
        width: 100%;
        height: 100%;
    }

    /* ends */

    /* section five */
    .section-five {
        width: 95%;
        height: fit-content;
        margin-inline: auto;
    }

    .section-five img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* end */

    /* section six */
    .section-six {
        padding-bottom: 100px;
    }

    /* end */
    /* section seven start*/
    .section-seven {
        padding-bottom: 80px;
        height: fit-content;
        position: relative;
        border-top: 3px solid #EB0028;
        z-index: 1;
    }

    .section-seven::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("https://cdn.pixabay.com/photo/2014/04/02/14/09/world-map-306338_1280.png");
        opacity: 0.07;
        z-index: -1;
    }

    .container-item {
        padding-top: 100px;
    }

    /* social icons */
    .social-icon {
        color: #555;
        width: 30px;
        height: 25px;
        text-align: center;
    }

    /* Hover Effects */
    .social-icon:hover {
        background-color: red;
        color: #ffffff;
    }

    /* end */
    @media screen and (max-width: 768px) {
        .sec-7-container {
            flex-direction: column !important;
        }
    }

    @media screen and (max-width: 768px) {
        .right-item {
            gap: 30px;
            padding-top: 50px;
            width: 100% !important;
        }
    }

    @media screen and (max-width: 500px) {
        .right-item {
            flex-direction: column;
            gap: 30px;
            padding-top: 50px;
            width: 100% !important;
        }
    }

    /* scroll arrow */
    #scrollToTopLink {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: block;
        z-index: 1000;
    }

    /* end */
    /* footer */
    footer {
        height: 80px;
        background-color: #EB0028;
        vertical-align: middle;
        line-height: 80px;
        margin-top: auto;
    }
</style>
@foreach($shipments as $shipment)

<section class="page-title bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/9.jpg" alt="Background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="title text-lg-left">
                    <div class="title-heading">
                        <h1>Track Shipment</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-lg-start">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Track Shipment</li>
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





<section class="section-three">
    <div class="container text-cente  section-3-container">
        <div class="ro">
            <div class="col pb-5">
                <span>{{$shipment->startDatetime}}</span><br>

            </div>
            <div class="col">
                <span>{{$shipment->updatedDatetime}}</span><br>

            </div>
        </div>
        <div class="circle-container">
            <div class="circle outer-circle">
                <div class="circle inner-circle"></div>
            </div>
            <div class="line"></div>
            <div class="circle outer-circle-danger">
                <div class="circle inner-circle"></div>
            </div>
        </div>
        <div class="ro">
            <div class="col pb-5">
                <span>{{$shipment->parcelOrigin}}</span><br>
                <span>Shipped</span>
            </div>
            <div class="col">
                <span>{{$shipment->currentLocation}}</span><br>
                <span>{{$shipment->shippingStatus}}</span>

            </div>
        </div>
    </div>
    <!--  -->
    <div class="container text-center">
        <div class="row ">
            <div class="col">
                <div class="logo-wrapperscan">
                    <img src="https://script3.webcrackdigitals.com/images/logo-small-2.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col gy-3">
                <div class="barscan-wrapper">
                    <img src="https://script3.webcrackdigitals.com/images/qrcode.png" alt="">
                </div>
            </div>
        </div>
        <div class="col pt-2">
            <span class="fw-bolder">{{$shipment->trackingID}}</span>
        </div>
    </div>
    </div>
</section>

<!--section four  -->
<section class="section-four">
    <!--  -->
    <div class="container text-start">
        <div class="row gy-4">
            <div class="col-sm-12 col-lg-6 col-md-12">
                <span class="fw-bolder ">Shipper Information</span>
                <hr>
                <span>Name: {{$shipment->sendersName}}</span><br>
                <span>Address: {{$shipment->parcelOrigin}}</span><br>
                <span> Phone Number: {{$shipment->sendersPhone}}</span><br>
                <span>Email: {{$shipment->sendersEmail}}</span><br>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-12">
                <span class="fw-bolder ">Receiver Information</span>
                <hr>
                <span> Name: {{$shipment->receiversName}}</span><br>
                <span> Address: {{$shipment->destination}}</span><br>
                <span> Phone Number: {{$shipment->receiversPhone}}</span><br>
                <span>Email: {{$shipment->email}}</span><br>
            </div>

        </div>
    </div>
    <!--  -->
    <!-- <div class="container pb-3">
        <div class="row">
            <button type="button" class="btn btn-secondary py-2">SHIPMENT STATUS - {{$shipment->shippingStatus}}</button>
        </div>
    </div> -->
    <div class="container text-start">


    
        <div class="container mt-4">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 col-md-6 mb-3">
                        <div class="card p-3">
                            <h6 class="card-title">Origin</h6>
                            <span>{{$shipment->from}}</span>
                            <h6 class="card-title mt-2">Carrier</h6>
                            <span>Equity Express</span>
                            <h6 class="card-title mt-2">Total Freight</h6>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-6 mb-3">
                        <div class="card p-3">
                            <h6 class="card-title">Destination</h6>
                            <span>{{$shipment->destination}}</span>
                            <h6 class="card-title mt-2">Expected Delivery Date</h6>
                            <span>{{$shipment->arrivalDate}}</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-6 mb-3">
                        <div class="card p-3">
                            <h6 class="card-title">Status</h6>
                            <span class="text-danger fw-bold bg-warning p-1 rounded">{{$shipment->shippingStatus}}</span>
                            <h6 class="card-title mt-2">Departure Date</h6>
                            <span>{{$shipment->shippingDate}}</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-6 mb-3">
                        <div class="card p-3">
                            <h6 class="card-title">Package</h6>
                            <span>Confidential</span>
                            <h6 class="card-title mt-2">Type of Shipment</h6>
                            <span>{{$shipment->shipmentMode}}</span>
                            <h6 class="card-title mt-2">Weight</h6>
                            <span>{{$shipment->weight}}KG</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- section five -->
<section class="section-five" style="text-align: center;">
    <div class="container">
        <img src="/productFolder/{{$shipment->parcelimage}}" ; alt="" style="height: 500px; width: 500px; object-fit: cover;">
    </div>
</section>
<div class="ro d-flex justify-content-center">
    <button type="button" class="btn btn-primary">Print Receipt</button>
</div>
<!-- section six -->
<section class="section-six">
    <div class="containe">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63461.03827224215!2d7.035626220248452!3d6.222144682150152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104382bd8b94e753%3A0xcf2391eb8abd4753!2sAwka%2C%20Anambra!5e0!3m2!1sen!2sng!4v1721119842462!5m2!1sen!2sng"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>


@endforeach


<script>
    window.onscroll = function() {
        toggleNavbar()
    };

    function toggleNavbar() {
        const navbarA = document.getElementById('navbarA');
        const navbarB = document.getElementById('navbarB');
        const navbarAHeight = navbarA.offsetHeight;
        if (window.pageYOffset >= navbarAHeight) {
            navbarB.classList.add('sticky');
            navbarB.classList.remove('hidden');
        } else {
            navbarB.classList.remove('sticky');
            navbarB.classList.add('hidden');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

@endsection

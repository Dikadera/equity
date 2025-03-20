@extends ('layout.app')

@section('content')

<section class="page-title bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/2.jpg" alt="Background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="title text-lg-left">
                    <div class="title-heading">
                        <h1>find location</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-lg-start">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Find Location</li>
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
<!-- End #page-title-->
<!--
      ============================
      Find Location Section
      ============================
      -->
<section id="findLoaction">
    <div class="container">
        <div class="row">
            <!--
            ============================
            Sidebar Area
            ============================
            -->
            <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
                <div class="sidebar sidebar-case-study">
                    <!-- Start .widget-categories-->
                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h5>transport services</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li><a href="javascript:void(0)">warehouse</a></li>
                                <li><a href="javascript:void(0)">air freight</a></li>
                                <li><a href="javascript:void(0)">ocean freight</a></li>
                                <li><a href="javascript:void(0)">road freight</a></li>
                                <li><a href="javascript:void(0)">supply chain</a></li>
                                <li><a href="javascript:void(0)">packaging</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End .widget-categories -->
                    <!-- Start .widget-reservation-->
                    <div class="widget widget-reservation"><img src="assets/images/blog/sidebar/reservation.jpg" alt="Background Image" />
                        <div class="widget-content">
                            <h5>Dedicated Customer Teams & Agile Services</h5>
                            <p>Our worldwide presence ensures the timeliness, cost efficiency compliance adherence required to ensure your production timelines are met.</p><a class="btn btn--transparent btn--inverse btn--block" href="javascript:void(0)">Schedule An Appointment</a>
                        </div>
                    </div>
                    <!-- End .widget-reservation-->
                </div>
            </div>
            <!-- End .col-lg-4 -->
            <div class="col-12 col-lg-8">
                <div class="locations" id="locations">
                    <p class="presentation">Equita Group is a representative logistics operator providing full range of service in the sphere of customs clearance transportation worldwide for any cargo. We pride ourselves on providing the best transport and shipping services available allover the world.</p>
                    <div class="map">
                        <iframe class="map-gray" src="https://maps.google.com/maps?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" width="600" height="450" style="border:0;"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="address">
                                <div class="office">
                                    <h6>london office</h6>
                                </div>
                                <ul class="list-unstyled info">
                                    <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">New York 11226 United States.</a></li>
                                    <li><span class="fas fa-envelope"></span><a href="mailto::info@equita.com">info@equita.com</a></li>
                                    <li class="fas fa-phone-alt"><a href="http://wa.me/+6014544724"><i class="fas fa-phone-alt"></i> +60(14)54-47-24</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="address">
                                <div class="office">
                                    <h6>berlin office</h6>
                                </div>
                                <ul class="list-unstyled info">
                                    <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">Germany</a></li>
                                    <li><span class="fas fa-envelope"></span><a href="mailto::info@equita.com">info@equita.com</a></li>
                                    <li class="fas fa-phone-alt"><a href="http://wa.me/+6014544724"><i class="fas fa-phone-alt"></i> +60(14)54-47-24</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="address">
                                <div class="office">
                                    <h6>bangkok office</h6>
                                </div>
                                <ul class="list-unstyled info">
                                    <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">Thailand</a></li>
                                    <li><span class="fas fa-envelope"></span><a href="mailto::info@equita.com">info@equita.com</a></li>
                                    <li class="fas fa-phone-alt"><a href="http://wa.me/+6014544724"><i class="fas fa-phone-alt"></i> +60(14)54-47-24</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
@endsection

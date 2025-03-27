@extends ('layout.app')
@section('content')

<section class="page-title bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/9.jpg" alt="Background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="title text-lg-left">
                    <div class="title-heading">
                        <h1>Contact</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-lg-start">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
<style>
    .map {
        margin: 20px;
        /* Adds margin around the section */
        padding: 15px;
        /* Adds padding inside the section */
        background-color: #f9f9f9;
        /* Optional: Light background color for contrast */
        border-radius: 8px;
        /* Optional: Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        /* Optional: Adds shadow for depth */
    }

    .map-gray {
        width: 100%;
        /* Make iframe responsive */
        height: 100%;
        /* Adjust height as desired */
        border: 0;
        /* Removes default border */
    }

    /* Optional: Ensure responsive behavior on small screens */
    @media (max-width: 600px) {
        .map {
            margin: 10px;
            /* Adjust margin for small screens */
        }
    }
</style>
<!--
      ============================
      Contact Information Section
      ============================
      -->
<section class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="contact-details">
                            <h6>contact details</h6>
                            <ul class="list-unstyled info">


                                <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">New York 11226 United States.</a></li>
                                <li><span class="fas fa-envelope"></span><a href="mailto::info@equita.com">info@equita.com</a></li>
                                <li class="fas fa-phone-alt"><a href="http://wa.me/+6014544724"><i class="fas fa-phone-alt"></i> +610(14)84-41-09</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="opening-hours">
                            <h6>opening hours</h6>
                            <ul class="list-unstyled">
                                <li> <span>Monday-friday</span><span>10:00 - 18:00</span></li>
                                <li> <span>saturday</span><span>10:00 - 14:00</span></li>
                                <li> <span>sunday</span><span>closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <form class="contactForm" method="post" action="">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <input class="form-control" type="text" name="contact-name" placeholder="name" required="" />
                        </div>
                        <div class="col-12 col-lg-4">
                            <input class="form-control" type="text" name="contact-email" placeholder="email" required="" />
                        </div>
                        <div class="col-12 col-lg-4">
                            <input class="form-control" type="text" name="contact-website" placeholder="website" required="" />
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" name="contact-message" cols="30" rows="2" placeholder="message" required=""></textarea>
                        </div>
                        <div class="col-12">
                            <input class="btn btn--primary" type="submit" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End .row-->
    </div>

    <!-- End .container-->
</section>
<section class="map map-2">
    <iframe class="map-gray" src="https://maps.google.com/maps?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" width="600" height="450" style="border:0;"></iframe>
</section>

@endsection

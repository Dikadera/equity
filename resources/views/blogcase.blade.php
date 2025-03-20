@extends ('layout.app')

@section('content')
<section class="page-title page-title-2 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/3.jpg" alt="Background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="title text-center">
                    <div class="title-heading">
                        <h1>case studies</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Case Studies</li>
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
      Cases Standard Section
      ============================
      -->
<section class="cases-standard" id="workStandard">
    <div class="container">
        <div class="row">
            <!-- .cases-filter-->
            <div class="col-sm-12 col-md-12 col-md-12 cases-filter">
                <ul class="list-inline mb-0">
                    <li><a class="active-filter" href="javascript:void(0)" data-filter="*">ALL Cases</a></li>
                    <li><a href="javascript:void(0)" data-filter=".filter-Distrbution">Distrbution</a></li>
                    <li><a href="javascript:void(0)" data-filter=".filter-Warehousing">Warehousing</a></li>
                    <li><a href="javascript:void(0)" data-filter=".filter-Optimization">Optimization</a></li>
                    <li><a href="javascript:void(0)" data-filter=".filter-Logistics">Logistics</a></li>
                    <li><a href="javascript:void(0)" data-filter=".filter-Analytics">Analytics</a></li>
                </ul>
            </div>
        </div>
        <div class="row" id="all-cases">
            <div class="case-item col-sm-6 col-md-6 col-lg-4 filter-Analytics filter-Distrbution">
                <div class="case-item-warp">
                    <div class="case-img"><img src="assets/images/work/full/1.jpg" alt="work Item Image" /></div>
                    <!-- End .work-img-->
                    <div class="case-content">
                        <div class="case-title">
                            <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                        </div>
                        <div class="case-cat"><a href="javascript:void(0)">analytics</a><a href="javascript:void(0)">optimization</a></div>
                        <div class="case-desc">
                            <p>We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.</p>
                        </div>
                        <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                    </div>
                    <!-- End .work-content-->
                </div>
            </div>
            <div class="case-item col-12 col-md-6 col-lg-4 filter-Optimization filter-Warehousing">
                <div class="case-item-warp">
                    <div class="case-img"><img src="assets/images/work/full/2.jpg" alt="work Item Image" /></div>
                    <!-- End .work-img-->
                    <div class="case-content">
                        <div class="case-title">
                            <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                        </div>
                        <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a href="javascript:void(0)">distrbution</a></div>
                        <div class="case-desc">
                            <p>Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an schedule.</p>
                        </div>
                        <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                    </div>
                    <!-- End .work-content-->
                </div>
            </div>
            <div class="case-item col-12 col-md-6 col-lg-4 filter-Print filter-Logistics">
                <div class="case-item-warp">
                    <div class="case-img"><img src="assets/images/work/full/3.jpg" alt="work Item Image" /></div>
                    <!-- End .work-img-->
                    <div class="case-content">
                        <div class="case-title">
                            <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                        </div>
                        <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                        <div class="case-desc">
                            <p>Our Group has been building relationships and projects that last. Serving an impressive list of long-term.</p>
                        </div>
                        <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                    </div>
                    <!-- End .work-content-->
                </div>
            </div>
            <div class="case-item col-12 col-md-6 col-lg-4 filter-Logistics filter-Warehousing">
                <div class="case-item-warp">
                    <div class="case-img"><img src="assets/images/work/full/4.jpg" alt="work Item Image" /></div>
                    <!-- End .work-img-->
                    <div class="case-content">
                        <div class="case-title">
                            <h4><a href="case-study-single.html">Regulatory Seminar</a></h4>
                        </div>
                        <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a href="javascript:void(0)">analytics</a></div>
                        <div class="case-desc">
                            <p>Our Group has been building relationships and projects that last. Serving an impressive list of long-term.</p>
                        </div>
                        <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                    </div>
                    <!-- End .work-content-->
                </div>
            </div>
            <div class="case-item col-12 col-md-6 col-lg-4 filter-Logistics">
                <div class="case-item-warp">
                    <div class="case-img"><img src="assets/images/work/full/5.jpg" alt="work Item Image" /></div>
                    <!-- End .work-img-->
                    <div class="case-content">
                        <div class="case-title">
                            <h4><a href="case-study-single.html">Documents &amp; Electronic Data</a></h4>
                        </div>
                        <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                        <div class="case-desc">
                            <p>Our Group has been building relationships and projects that last. Serving an impressive list of long-term.</p>
                        </div>
                        <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                    </div>
                    <!-- End .work-content-->
                </div>
            </div>
            <div class="case-item col-12 col-md-6 col-lg-4 filter-Optimizations">
                <div class="case-item-warp">
                    <div class="case-img"><img src="assets/images/work/full/6.jpg" alt="work Item Image" /></div>
                    <!-- End .work-img-->
                    <div class="case-content">
                        <div class="case-title">
                            <h4><a href="case-study-single.html">role of the importer</a></h4>
                        </div>
                        <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                        <div class="case-desc">
                            <p>Our Group has been building relationships and projects that last. Serving an impressive list of long-term.</p>
                        </div>
                        <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                    </div>
                    <!-- End .work-content-->
                </div>
            </div>
        </div>
        <!-- End .row-->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 clearfix text--center">
                <ul class="pagination">
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)" aria-label="Next"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

@endsection

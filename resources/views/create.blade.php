@extends ('layout.app')


@section('content')
<!-- END HEADER -->

<!-- START SECTION BREADCRUMB -->
<!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->

<!-- END MAIN CONTENT -->
<section class="contact-info">
    <div class="container">
        <div class="row">
            <!-- <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="contact-details">
                            <h6>contact details</h6>
                            <ul class="list-unstyled info">
                                <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">New York 11226 United States.</a></li>
                                <li><span class="fas fa-envelope"></span><a href="mailto::Equita@7oroof.com">Equita@7oroof.com</a></li>
                                <li><span class="fas fa-phone-alt"></span><a href="tel:01061245741">(002) 01061245741</a></li>
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
            </div> -->
            <div class="col-12 col-lg-8">
                <form method="POST" action="{{route('store_user')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old ('name') }}">
                        <span class="text-danger">@error ('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="{{ old ('email') }}">
                        <span class="text-danger">@error ('email'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <span class="text-danger">@error ('password'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
                    </div>
                    <div class="login_footer form-group mb-3">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-fill-out btn-block" value="Register">
                    </div>
                </form>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
<!-- START FOOTER -->

<!-- END FOOTER -->


@endsection

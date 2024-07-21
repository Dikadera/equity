@extends('layout.app')
@section('content')
<section class="page-title bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/7.jpg" alt="Background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="title text-lg-left">
                    <div class="title-heading">
                        <h1>Track your shipment</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-lg-start">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Track </li>
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
      Track Shimpent Section
      ============================
      -->
<section style="background-color: #f8f9fa; padding: 20px; ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div style="background-color: white; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px;">
                    <h3 style="color: red; text-align: center; margin-bottom: 20px;">Track Your Shipment</h3>
                    <form style="text-align: center;" action="/search" method="get">
                        @csrf
                        <input type="type" name="query" class="form-control" style="margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Enter Tracking ID">
                        <button class="btn btn-danger" style="padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    @media (max-width: 768px) {
        .col-md-8 {
            width: 100%;
        }

        input {
            width: 80%;
        }
    }
</style>

<!--
<div style="margin:200px;">
    <form method="get" action="{{url('/search')}}">
        @csrf
        <input type="search" name="query">
        <div>
            <input type="submit" value="enter">
        </div>
    </form>
</div> -->

@endsection

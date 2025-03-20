@extends('layout.admin')
@section('content')




<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Track List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                <li class="breadcrumb-item active">Users List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- end col -->
                <div class="col-xl-12 col-lg-12">
                    <div class="row g-4 mb-4">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{route('admin_track')}}" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Create New Shipment</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" autocomplete="off" id="searchProductList" placeholder="Search Users...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="product-list" class="gridjs-border-none mb-4">
                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                            <div class="gridjs-wrapper table-responsive" style="height: auto;">
                                @if($shipments->count() > 0)
                                <table class="table">
                                    <thead class="table-light">

                                        <tr>
                                            <th scope="col">TrackingID</th>
                                            <th scope="col">Package Image</th>
                                            <th scope="col">Senders Name</th>
                                            <th scope="col">Receivers Name </th>
                                            <th scope="col">Package Origin</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Destination </th>
                                            <th scope="col">Current Location</th>
                                            <th scope="col">Shipping Status</th>
                                            <th scope="col">Start Date time </th>
                                            <th scope="col">Updated Date time </th>
                                            <th scope="col">Shipment Mode </th>
                                            <th scope="col">Weight </th>
                                            <th scope="col">Shipping Date</th>
                                            <th scope="col">Arrival Date</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Updated At</th>
                                            <th scope="col">Action</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($shipments as $shipment)
                                        <tr>

                                            <td>{{$shipment->trackingID}}</td>
                                            <td>
                                                <img src="/productFolder/{{$shipment->parcelimage}}" alt="Package Image" style="max-width: 100px; max-height: 100px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                                            </td>

                                            <td>{{$shipment->sendersName}}</td>
                                            <td>{{$shipment->receiversName}}</td>
                                            <td>{{$shipment->from}}</td>
                                            <td>{{$shipment->email}}</td>
                                            <td>{{$shipment->destination}}</td>
                                            <td>{{$shipment->currentLocation}}</td>
                                            <td>{{$shipment->shippingStatus}}</td>
                                            <td>{{$shipment->startDatetime}}</td>
                                            <td>{{$shipment->updatedDatetime}}</td>
                                            <td>{{$shipment->shipmentMode}}</td>
                                            <td>{{$shipment->weight}}</td>
                                            <td>{{$shipment->shippingDate}}</td>
                                            <td>{{$shipment->arrivalDate}}</td>
                                            <td>{{\Carbon\Carbon::parse($shipment->created_at)->format('d M, Y h:i A')}}</td>
                                            <td>{{\Carbon\Carbon::parse($shipment->updated_at)->format('d M, Y h:i A')}}</td>
                                            <td></td>
                                            <!-- <td class="gridjs-td">
                                                <div>  </div>
                                            </td>
                                            <td class="gridjs-td">
                                                <div>  </div>
                                            </td> -->
                                            <!-- <td></td>
                                            <td></td> -->
                                            <td>
                                                <div class="d-flex">
                                                    <a onclick="return confirm('Are you sure you want to edit the shipment')" class="dropdown-item remove-list text-success" href="{{route('editShipment', $shipment->id)}}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>

                                                    <a onclick="return confirm('Are you sure you want to delete this user')" class="dropdown-item remove-list text-danger" href=" "><i class=" ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>


                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <div class="flex items-center justify-center mt-6">
                                            {{$shipments->withQueryString()->links('pagination::bootstrap-5')}}
                                        </div>
                                    </div>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td class="text-danger"> No Shipment Found</td>
                                        </tr>
                                    </thead>
                                </table>
                                @endif
                            </div>
                            <div class="gridjs-footer">
                                <div class="gridjs-pagination">

                                </div>
                            </div>
                            <div id="gridjs-temp" class="gridjs-temp"></div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script>2023 © Toner.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design &amp; Developed by TechBundo
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection

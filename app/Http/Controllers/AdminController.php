<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function admin_dashboard()
    {
        return view('admin.index');
    }
    //create tracker view
    public function admin_track()
    {
        return view('admin.track');
    }
    //create tracker
    public function tracking(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'trackingID' => 'required|string|min:3',
                'sendersName' => 'required|string|max:255',
                'sendersPhone' => 'required|string|max:255',
                'sendersEmail' => 'required|string|max:255',
                'receiversName' => 'required|string|min:2',
                'receiversPhone' => 'required|string|min:2',
                'from' => 'required|string|min:2',
                'email' => 'required|email|min:2',
                'destination' => 'required|string|min:2',
                'currentLocation' => 'required|string|min:2',
                'shippingStatus' => 'required|string|min:1',
                'shippingDate' => 'required|string|min:1',
                'arrivalDate' => 'required|string|min:1',
                'parcelimage' => ['nullable', 'file', 'max:10000'],
                'startDatetime' => 'required|date', // New field: optional date
                'updatedDatetime' => 'required|date', // New field: optional date
                'shipmentMode' => 'required|string|max:255', // New field: optional string with max length
                'weight' => 'required|string', // New field: optional numeric

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $tracking = new Tracker();
            $tracking->trackingID = $request->trackingID;
            $tracking->sendersName = $request->sendersName;
            $tracking->sendersPhone = $request->sendersPhone;
            $tracking->sendersEmail = $request->sendersEmail;
            $tracking->receiversName = $request->receiversName;
            $tracking->receiversPhone = $request->receiversPhone;
            $tracking->from = $request->from;
            $tracking->email = $request->email;
            $tracking->destination = $request->destination;
            $tracking->currentLocation = $request->currentLocation;
            $tracking->shippingStatus = $request->shippingStatus;
            $tracking->shippingDate = $request->shippingDate;
            $tracking->arrivalDate = $request->arrivalDate;
            $tracking->parcelimage = $request->parcelimage; // Can be null
            $tracking->startDatetime = $request->startDatetime; // Can be null
            $tracking->updatedDatetime = $request->updatedDatetime; // Can be null
            $tracking->shipmentMode = $request->shipmentMode; // Can be null
            $tracking->weight = $request->weight; // Can be null


            if ($request->hasFile('parcelimage')) {
                $image = $request->file('parcelimage');
                $parcelimage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('productFolder'), $parcelimage);
                $tracking->parcelimage = $parcelimage;
            }

            $save = $tracking->save();


            if ($save) {
                return redirect()->back()->with('success', 'Tracker saved successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to save tracking');
            }
        } catch (Exception $e) {
            dd('Error Message:', $e);
        }
    }

    //Shipment List
    public function trackList()
    {
        $shipments = Tracker::paginate(20);
        return view('admin.trackedList', compact('shipments'));
    }

    //to edit a shipment

    public function editShipment($id)
    {
        $shipment = Tracker::findorFail($id);
        return view('admin.editShipment', compact('shipment'));
    }
    //TO UPDATE
    public function updateShipment(Request $request, $id)
    {

        $request->validate([
            'trackingID' => 'required|max:255',
            'sendersName' => 'required|max:255',
            'receiversName' => 'required',
            'from' => 'required|max:255',
            'email' => 'required|max:255',
            'destination' => 'required',
            'currentLocation' => 'nullable|max:255',
            'shippingStatus' => 'nullable|max:255',
            'shippingDate' => 'required|max:255',
            'arrivalDate' => 'required|max:255',

        ]);

        $shipment =  Tracker::find($id);
        $shipment->trackingID = $request->trackingID;
        $shipment->sendersName = $request->sendersName;
        $shipment->receiversName = $request->receiversName;
        $shipment->from = $request->from;
        $shipment->email = $request->email;
        $shipment->destination = $request->destination;
        $shipment->currentLocation = $request->currentLocation;
        $shipment->shippingStatus = $request->shippingStatus;
        $shipment->shippingDate = $request->shippingDate;
        $shipment->arrivalDate = $request->arrivalDate;



        $shipment->save();

        return redirect()->route('trackList')->with('success', 'Shipment updated successfully');
    }




    // public function viewByTrackingId(Request $request)
    // {
    //     $trackingID = $request->input('trackingID');

    //     // Logic to retrieve shipment details based on the tracking ID
    //     $shipment = Tracker::where('tracking_id', $trackingID)->first();

    //     if (!$shipment) {
    //         return redirect()->route('trackShipment')->with('error', 'Shipment not found');
    //     }

    //     return view('shipmentDetails', ['shipment' => $shipment]);
    // }
}

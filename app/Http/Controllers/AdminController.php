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
                'receiversName' => 'required|string|min:2',
                'from' => 'required|string|min:2',
                'email' => 'required|email|min:2',
                'destination' => 'required|string|min:2',
                'currentLocation' => 'required|string|min:2',
                'shippingStatus' => 'required|string|min:1',
                'shippingDate' => 'required|string|min:1',
                'arrivalDate' => 'required|string|min:1',

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $tracking = new Tracker();
            $tracking->trackingID = $request->trackingID;
            $tracking->sendersName = $request->sendersName;
            $tracking->receiversName = $request->receiversName;
            $tracking->from = $request->from;
            $tracking->email = $request->email;
            $tracking->destination = $request->destination;
            $tracking->currentLocation = $request->currentLocation;
            $tracking->shippingStatus = $request->shippingStatus;
            $tracking->shippingDate = $request->shippingDate;
            $tracking->arrivalDate = $request->arrivalDate;

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

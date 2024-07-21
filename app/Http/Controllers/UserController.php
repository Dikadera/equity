<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        //validation of input
        //nullable doesn't work in this type of validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email|max:255, string',

            'password' => 'required|min:6|max:40',
            'confirm_password' => 'required|min:6|max:40|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        if ($save) {
            return redirect()->route('login')->with('success', 'Registration Successful');
        } else {
            return redirect()->back()->with('error', 'Registration Failed');
        }
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $shipments = Tracker::where('trackingID', 'LIKE', '%' . $search_text . '%')->get();
        return view('shipmentDetails', compact('shipments'));
    }
}

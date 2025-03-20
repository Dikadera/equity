<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simple extends Controller
{
    //
    public function index(){
        $fakeData = [
'id' => '1',
'name' => 'Equity',
'email' => 'firstwaylogistics@list.ru'
        ];
        return response()->json($fakeData);
    }
}

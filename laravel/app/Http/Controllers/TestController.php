<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
//        $drivers = \DB::table('drivers')->get();

        $bestDriver = \DB::table('drivers')
            ->where('total_points','>',222)->get()
;
        dd($bestDriver);
    }
}

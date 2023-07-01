<?php

namespace App\Services;

use DB;
use App\Models\Plan;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Auth;

class FbService {
    
    /**
     * Process payment platforms
     *
     * 
     */
    // public function show($id){
    //     return $names = Plan::pluck('id');
    //     //  return Plan::where('id', $id)
    //     //     ->firstOrFail();
    // }

    public function show(){
        return Plan::select('plan_name','id')->get();
    }

    public function fetchListOrders(){
        return Order::orderByDesc('id')->paginate(15);
    }

    // public function createService(){
    //    echo 'abc';
    // }
}
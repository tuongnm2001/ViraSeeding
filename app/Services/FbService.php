<?php

namespace App\Services;

use DB;
use App\Models\Plan;
use App\Models\User;
use App\Models\Order;
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

    // public function show(){
    //     return Plan::select('plan_name')->get();
    // }

    // public function fetchListOrders(){
    //     return Order::orderByDesc('id')->paginate(15);
    // }

    public function createService($request){
        try {
            $userId = Auth::id(); // get id user 
            // $planId = Plan::findOrFail($request->plan_id); 
            $planId = $request->route('id');

            $user = Order::create([
                'user_id'=>$userId,
                'plan_id'=>$planId,
                'note'=>$request->input('note'),
                'amount'=>$request->input('amount'),
                'cost'=>$request->input('cost'),
                'result'=>$request->input('amount') * $request->input('cost'),
            ]);

            // $this->infoProductCart($user->id);
            // DB::commit();
            $request->session()->flash('success', 'Tạo thành công');
        } catch (\Exception $th) {
            DB::rollBack();
            $request->session()->flash('error', 'Tạo thất bại');
            return false ;
        }
        return true ;
    }

    // protected function infoProductCart($user_id){

    //     $plans = Plan::select('id', 'plan_name', 'cost' , 'active')->get();

    //     $data = [];
    //     foreach ($plans as $item) {
    //         $data[] = [
    //             'user_id' => $user_id,
    //             'plan_id' => $item->id,
    //             'note' => $item->note,
    //             'amount' => $item->amount,
    //             'cost'=>$item->cost,
    //             'result'=>$item->result,
    //             'bonus'=>$item->bonus,
    //             'status'=>$item->status
    //         ];
    //     }

    //     return Order::insert($data);
    // }

}
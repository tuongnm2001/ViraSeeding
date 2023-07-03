<?php

namespace App\Http\Controllers\User;

use DataTables;
use App\Models\Plan;
use App\Models\Order;
use App\Services\FbService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller{

    protected $fbService ;

    public function __construct(FbService $fbService){
        $this->fbService = $fbService ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function show(Request $request, $id){

      // Lấy giá trị của tham số đường dẫn 'id'
      $planId = $request->route('id');
      // $url = urldecode($urlEncoded);
      // Hoặc có thể lấy trực tiếp giá trị của biến $id
      // $userId = $id;
      $data = Plan::find($planId);

      return view('user.service.facebook.likepost.viplike',[
         'content'=>$data
      ]);
   }

   public function listOrder(Request $request, $id ){
        $id = $request->route('id');
        
        // return Datatables::of(Plan::query())->make(true) ; get all data
        return Datatables::of(Order::where('plan_id', $id))->make(true); // get 1 row by id
         // $userID = Auth::id();
         // return Datatables::of(Order::where('user_id', $userID)->where('plan_id', $id))->make(true);   
}

   public function createService(Request $request){
      // dd($request->input());
      $result = $this->fbService->createService($request);
      return \redirect()->back();
   }

}
<?php

namespace App\Http\Controllers\User;

use DataTables;
use App\Models\Plan;
use App\Models\Order;
use App\Services\FbService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use App\Models\User;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller{

    protected $fbService ;

    public function __construct(FbService $fbService){
        $this->fbService = $fbService ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function show(Request $request,$plan_name){

      // Lấy giá trị của tham số đường dẫn 'id'
      $data = Plan::where('plan_name', $plan_name)->first();
      // $url = urldecode($urlEncoded);
      // Hoặc có thể lấy trực tiếp giá trị của biến $id
      // $userId = $id;
      // $data = Plan::find($planId);
        $costs = base64_decode($request->input('cost'));
      return view('user.service.facebook.likepost.viplike',[
         'content'=>$data,
         'cost'=>$costs
      ]);
   }

   public function listOrder(Request $request, $id ){
        $id = $request->route('id');
        
        // return Datatables::of(Plan::query())->make(true) ; get all data
        return Datatables::of(Order::where('plan_id', $id))->make(true); // get 1 row by id
         // $userID = Auth::id();
         // return Datatables::of(Order::where('user_id', $userID)->where('plan_id', $id))->make(true);   
}

   public function orderService(Request $request){
      // dd($request->input());
      // $result = $this->fbService->createService($request);

       try {
            $userId = Auth::id(); // get id user 
            // $planId = Plan::findOrFail($request->plan_id); 
            $planId = $request->route('id');

            $plan = Plan::where('id', $planId)->first();
            $cost = $plan->cost;
            //  $cost = base64_decode($request->input('cost'));

            $order = Order::create([
                'user_id'=>$userId,
                'plan_id'=>$planId,
                'uid'=>$request->input('urlstring'),
                'note'=>$request->input('note'),
                'amount'=>$request->input('amount'),
                'cost'=>$cost,
                // 'result'=>$request->input('amount') * $request->input('cost')
            ]);

            // Lấy đối tượng User tương ứng với user_id của Order
            $user = User::find($order->user_id);

            // Trừ balance của User bằng amount * cost
            $user->balance -= $request->input('amount') * $request->input('cost');

            // Lưu lại thông tin User
            $user->save();

            //trừ banlance user
            //user_id
            //tongtien

            // $this->infoProductCart($user->id);
            // DB::commit();
            $request->session()->flash('success', 'Tạo thành công');
        } catch (\Exception $th) {
            $request->session()->flash('error', 'Tạo thất bại');
            return false ;
        }
      //   return true ;

      return redirect()->back();
   }

}
